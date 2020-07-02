@extends('layout')

@section('title', 'Contact')

@section('content')
    {{-- Traducir el titulo automaticamente con la configuración de lang/es.json se almacena las traducciones en un objeto. --}}
    <h1> {{ __('Contact') }} </h1>

    <form method="POST" action="{{ route('contact') }}">
        @csrf
        <br><input name="name" placeholder="Nombre..." value="{{old('name')}}">
        {!! $errors->first('name', '<small>:message</small>')!!}
        
        <br><input name="email" type="email" placeholder="Email..." value="{{old('email')}}">
        {!! $errors->first('email', '<small>:message</small>')!!}
        
        <br><input name="subject" placeholder="Asunto..." value="{{old('subject')}}">
        {!! $errors->first('subject', '<small>:message</small>')!!}
        
        <br><textarea name="content" placeholder="Comentario..."> {{old('content')}} </textarea>
        {!! $errors->first('content', '<small>:message</small>')!!}

        <br><button>Enviar</button>
    </form>
@endsection