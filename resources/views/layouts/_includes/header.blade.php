<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notícias</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header class="main_header">
        <div class="main_header_content">
            <a href="{{route('home')}}" class="logo">
                <img src="{{asset('img/logo.png')}}" alt="Bem vindo ao projeto de notícias"
                    title="Bem vindo ao projeto de notícias" width="120">
            </a>

            <nav class="main_header_content_menu">
                <ul>
                    <li><a href="{{route('cadastrar')}}">CADASTRAR NOTÍCIAS</a></li>
                    <li><a href="{{route('home')}}">EXIBIR NOTICIAS</a></li>
                    <li>
                        <form action="{{route('pesquisar')}}" class="form" method="POST">
                            @csrf
                            <input type="search" name="pesquisa" id="search" placeholder="Buscar">
                            {{-- <button type="submit"></button> --}}
                        </form>
                    </li>
                </ul>
            </nav>
            <nav class="main_header_content_menu_mobile ds_none">
                <ul>
                    <li>
                        <span class="main_header_content_menu_mobile_obj icon-menu icon-notext"></span>
                        <ul class="main_header_content_menu_mobile_sub ds_none">
                            <li><a href="#">CADASTRAR NOTÍCIAS</a></li>
                            <li><a href="#">EXIBIR NOTICIAS</a></li>
                            <li>
                                <form action="" class="form">
                                    <input type="search" name="" id="search" placeholder="Buscar">
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>