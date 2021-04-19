@extends('layouts.home')
@section('content')
<main>
    <section class="main_blog">
        @foreach ($noticias as $noticia)
            <article>
                <h1>{{$noticia->titulo}}</h1>
                <p><a href="#" class="category">{{$noticia->categoria}}</a></p>
                <h2><a href="#" class="title">{{\Illuminate\Support\Str::limit($noticia->descricao, 100, $end='...')}}</a></h2>
                <div class="div-button">
                    <a href="{{route('noticia',$noticia->id)}}"><button>Acessar</button></a>
                </div>
            </article>
        @endforeach

    </section>
</main>
@endsection
@include('layouts._includes.footer')