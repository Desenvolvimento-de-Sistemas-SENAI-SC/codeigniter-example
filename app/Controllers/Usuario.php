<?php namespace App\Controllers;

class Usuario extends BaseController
{
    public function index() {
        $dados = ['usuarios' => 
            [
                'Rafael',
                'Miguel',
                'Josias'
            ]
        ];

        return view('usuario/listar', $dados);
    }
}