<?php

namespace App\Controllers;

class Produto extends BaseController {
    public function index() {
        // Inclusão de cabeçalho
        echo view('templates/header');

        echo view('produto/index');

        // Inclusão de "rodapé"
        echo view('templates/footer');
    }

    public function nova()  {
        // Inclusão de cabeçalho
        echo view('templates/header');

        // Inclusão de "rodapé"
        echo view('templates/footer');
    }
}