<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function index() {
        $nome = "Natanael";
        $idade = 25;
        $sexo = "M";
    
        $arr = [10,20,30,40,50];
    
        $nomes = ["João","José","Rita","Bruno","Diego"];
    
        return view('welcome', 
        [
            'nome' => $nome, 
            'idade' => $idade, 
            'profissao' => "programador", 
            'sexo' => $sexo,
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }

    public function create() {
        return view('events.create');
    }
    
}
