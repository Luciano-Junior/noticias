@extends('layouts.home')
@section('content')
<main>
    <section class="noticia">
        <h1>{{$noticia->titulo}}</h1>
        <small>{{$noticia->autor}}, {{$noticia->data->format('d/m/Y - H:i:s')}}</small>
        <p>{{$noticia->descricao}}</p>
    </section>
</main>
@endsection