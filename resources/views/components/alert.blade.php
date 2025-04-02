<section {{$attributes->merge(['class' => 'alert-section'])}}>
  
     <h2 class="text-center">{{ $title }}</h2>
        <div class="alert alert-{{ $type }} text-center" role="alert">
            <strong>{{ $slot }}</strong>
        </div>
        @foreach ($lenguage('pyton') as $lang)
            <p> {{ $lang }} </p>
        @endforeach
</section>

