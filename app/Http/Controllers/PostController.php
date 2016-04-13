<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function Posts()
    {
        $posts = [
            0 => array("Polimorfismo por Inclusão", "No polimorfismo por inclusão um objeto pode ser visto como pertencendo a diferentes classes que não precisam ser disjuntas. O PHP adota esse tipo de polimorfismo, pois é uma linguagem orientada a objeto que permite recursos de herança"),
            1 => array("Polimorfismo por Coerção", "O PHP também suporta o polimorfismo por coerção, no qual a linguagem dispõe de uma operação semântica para converter um argumento para um tipo esperado por uma função, em uma situação que de outra forma resultaria em um erro de tipo")
        ];
        
        return view ('task.post', compact('posts'));
        //return view ('task.post');
        //return "ola";
    }  
}