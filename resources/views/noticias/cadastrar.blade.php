@extends('layouts.home')
@section('content')
    <main>
        <section class="cadastro">
            <h1>Cadastrar Notícia</h1>
            @include('message')
            <form action="{{route('salvar')}}" method="post">
                @csrf
                <div class="form-box">
                    <label for="">Título</label>
                    <input type="text" name="titulo" id="titulo" maxlength="60" placeholder="Título">
                </div>
                <div class="form-box">
                    <label for="">Notícia</label>
                    <textarea name="descricao" id="" cols="30" rows="10" placeholder="Notícia"></textarea>
                </div>
                <div class="form-box">
                    <label for="categoria">Categoria</label>
                    <select id="categoria" name="categoria">
                        <option value="Ciência">Ciência</option>
                        <option value="Tecnologia">Tecnologia</option>
                        <option value="Economia">Economia</option>
                        <option value="Negócios">Negócios</option>
                        <option value="Educação">Educação</option>
                        <option value="Política">Política</option>
                        <option value="Religião">Religião</option>
                        <option value="Saúde">Saúde</option>
                    </select>
                </div>
                <div class="form-box">
                    <label for="">Autor</label>
                    <input type="text" name="autor" id="autor" maxlength="50" placeholder="Autor">
                </div>
                <div class="form-box">
                    <button type="submit" id="cadastrar">Cadastrar</button>
                </div>
            </form>
            
        </section>
    </main>
@endsection