<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Noticia;

class NoticiaController extends Controller
{
    public function home(){
        $noticias = Noticia::all();
        return view('welcome',compact('noticias'));
    }

    public function create(){
        return view('noticias.cadastrar');
    }

    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'titulo' => 'required|unique:noticias|max:60',
            'descricao' => 'required',
            'categoria' => 'required',
            'autor' => 'required',
        ]);

        $noticia = Noticia::create($request->all());
        Session()->flash('success','Notícia cadastrada com sucesso!');

        return redirect()->back();
    }

    public function show($id){
        $noticia = Noticia::where('id',$id)->first();
        return view('noticias.noticia', compact('noticia'));
    }

    public function search(Request $request){
        $noticias = Noticia::where('categoria','like','%'.$request->pesquisa.'%')->get();
        if(count($noticias) == 0){
            $noticias = Noticia::where('titulo','like','%'.$request->pesquisa.'%')->get();
        }
        return view('noticias.pesquisa', compact('noticias'));
    }
}
