<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $this->cargarPost(); // Carga los posts si no existen en sesión
        $posts = session('posts', []);

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $posts = session('posts', []); // Recupera los posts de la sesión

        $post = (object) [
            'id' => count($posts) + 1,
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'author' => $request->input('author'),
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $posts[] = $post;
        session(['posts' => $posts]); // Guarda los posts en la sesión

        return redirect()->route('posts.index')->with('success', 'Post creado exitosamente.');
    }

    public function show($id)
    {
        $posts = session('posts', []);
        $post = $posts[$id - 1] ?? null;

        if (!$post) {
            return redirect()->route('posts.index');
        }

        return view('posts.show', compact('post'));
    }

    private function cargarPost()
    {
        if (!session()->has('posts')) {
            $posts = [
                (object) ['id' => 1, 'title' => 'Post 1', 'content' => 'Contenido del post 1', 'author' => 'Autor 1', 'created_at' => '2023-10-01'],
                (object) ['id' => 2, 'title' => 'Post 2', 'content' => 'Contenido del post 2', 'author' => 'Autor 2', 'created_at' => '2023-10-02'],
                (object) ['id' => 3, 'title' => 'Post 3', 'content' => 'Contenido del post 3', 'author' => 'Autor 3', 'created_at' => '2023-10-03'],
                (object) ['id' => 4, 'title' => 'Post 4', 'content' => 'Contenido del post 4', 'author' => 'Autor 4', 'created_at' => '2023-10-04'],
            ];

            session(['posts' => $posts]); // Guarda los posts en la sesión
        }
    }
}
