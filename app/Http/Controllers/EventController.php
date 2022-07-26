<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Evento;

class EventController extends Controller
{
    //Endpoint para estudo
    public function index2() {
        $nome = "Natanael";
        $idade = 25;
        $sexo = "M";
    
        $arr = [10,20,30,40,50];
    
        $nomes = ["João","José","Rita","Bruno","Diego"];
    
        return view('estudo', 
        [
            'nome' => $nome, 
            'idade' => $idade, 
            'profissao' => "programador", 
            'sexo' => $sexo,
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }

    //---------------------------------------------------------
    //ENDPOINTSs principal do projeto Evento
    public function index(){

        $busca = request('busca');
        
        if ($busca) {

            $evento = Evento::where([
                ['titulo', 'like', '%'.$busca.'%']
            ])->paginate(3);

        } else {
            $evento = Evento::paginate(3);
        }
        
        return view('welcome', 
        [
            'eventos' => $evento,
            'busca' => $busca
        ]);
    }

    public function create() {
        return view('events.create');
    }

    public function store(Request $request) {
        $evento = new Evento;
        
        $evento->titulo = $request->titulo;
        $evento->data = $request->data;
        $evento->cidade = $request->cidade;
        $evento->privado = $request->privado;
        $evento->descricao = $request->descricao;
        $evento->ativo = 1;
        $evento->items = $request->items;

        //Imagem upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;

            $request->image->move(public_path('img/eventos'), $imageName);

            $evento->image = $imageName;
        }

        $evento->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }
    
    public function show($id) {
        $evento = Evento::findOrFail($id);

        return view('events.show', ['evento' => $evento]);
    }
}
