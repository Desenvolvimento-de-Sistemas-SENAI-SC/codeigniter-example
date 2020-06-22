<?php

namespace App\Controllers;

class Produto extends BaseController {
    public function index() {
        $dados = [
            'titulo' => 'Página index'
        ];

        // Inclusão de cabeçalho
        echo view('templates/header', $dados);

        echo view('produto/index');

        // Inclusão de "rodapé"
        echo view('templates/footer');
    }

    public function nova()  {
        $dados = [
            'titulo' => 'Página nova!'
        ];

        // Inclusão de cabeçalho
        echo view('templates/header', $dados);

        echo view('produto/nova');

        // Inclusão de "rodapé"
        echo view('templates/footer');
    }
}