<?php namespace App\Controllers;

use App\Models\UsuariosModel;

class Usuario extends BaseController
{
    public function index() {
        $dados = [];

        $model = new UsuariosModel();

        $dados['usuarios'] = $model->getUsuarios();

        return view('usuario/listar', $dados);
    }
}