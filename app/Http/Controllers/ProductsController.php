<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
  
    public function index()
    {
        $products = Products::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $products = Products::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
        ]);

        // Validar los datos del formulario
        if(!$products){
            return redirect()->back()->with('error', 'Error al crear el producto.');
        }

        return redirect()->route('products.index')->with('success', 'Producto creado exitosamente.');
    }

    public function show($id)
    {
        $product = Products::find($id);
        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Producto no encontrado.');
        }
        return view('products.show', compact('product'));
    }
}
