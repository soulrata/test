@extends('layout')

@section('title', 'Portafolio')

@section('content')
    <h1>Portafolio</h1>
    <h3>Forma de hacerlo "if" luego "foreach"</h3>
    <p>"if" si existe algun contenido en tal variable</p>
    <ul>
        @if ($portafolio)
            @foreach ($portafolio as $portafolioItem)
                <li>{{ $portafolioItem['title']}}</li>
            @endforeach
        @else
            <li>No hay proyecto para mostrar</li>
        @endif
    </ul>

    <hr>

    <h3>Forma de hacerlo "isset" luego "foreach"</h3>
    <p>"isset" si existe la variable</p>
    <ul>
        @isset ($portafolio)
            @foreach ($portafolio as $portafolioItem)
                <li>{{ $portafolioItem['title']}}</li>
            @endforeach
        @else
            <li>No hay proyecto para mostrar</li>
        @endisset
    </ul>
    <br>
    <h3>en los dos casos "if" e "isset" son diferentes y ninguno cubre parte de la otra.</h3>
    <p>Ej. si la variable no existe y usamos "if" aparecera error 404, y si usamos "isset" y la variable existe pero está vacío no nos aparecera nada (no estaria bien, ya que no hay un mensaje de advertencia).</p>
    <br>
    <hr>

    <h3>Forma de hacerlo "forelse" con "ampty"</h3>
    <p>"forelse" muestra el recorrido del array si existe, en caso de existir tal variable y esté vacío "empty" mostrara el mensaje correspondiente.</p>
    <p>es la manera de cubrir los 2 casos anteriores sin usar 2 "if"</p>
    <ul>
        @forelse ($portafolio as $portafolioItem)
            <li>{{$portafolioItem['title']}}</li>
        @empty
            <li>No hay proyecto que mostrar</li>
        @endforelse
    </ul>

    <hr>
    <h3>Veamos "Loop"</h3>
    <p>Veamos lo que contiene "loop" con un "var_dump"</p>
    <ul>
        @forelse ($portafolio as $portafolioItem)
            <li>{{$portafolioItem['title']}} <pre>{{ var_dump($loop) }}</pre></li>
        @empty
            <li>No hay proyecto que mostrar</li>
        @endforelse
    </ul>
   
    <p>iteration: intereación nro.</p>
    <p>index: numero del elemento recorrido.</p>
    <p>remaining: cuántos elementos nos quedan.</p>
    <p>count: total de los elementos del array</p>
    <p>first: si es el primer elemento</p>
    <p>last: si es el último elemento</p>
    <p>depth: profundidad del array</p>
    <br>
    <h3>veamos cómo usar "loop"</h3>
    <ul>
        @forelse ($portafolio as $portafolioItem)
            <li>{{$portafolioItem['title']}} <small>{{ $loop->last ? 'Es último' : 'No es el último'}}</small></li>
        @empty
            <li>No hay proyecto que mostrar</li>
        @endforelse
    </ul>

    <h2>Otros que se pueden llegar a usar</h2>
    <p>@ for()</p>
    <p>@ endfor</p>
    <p>@ while()</p>
    <p>@ endwhile</p>

@endsection