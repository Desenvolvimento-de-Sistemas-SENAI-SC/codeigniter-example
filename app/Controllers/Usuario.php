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

    public function detalhes($id = null)  {
        $dados = [];

        $model = new UsuariosModel();

        $dados['usuario'] = $model->getUsuario($id);

        return view('usuario/detalhes', $dados);
    }

    public function cadastrar()   {
        $dados['titulo'] = 'Cadastrar novo usuário';

        echo view('templates/header', $dados);
        echo view('usuario/inserir');
        echo view('templates/footer');
    }
}