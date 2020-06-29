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

        $model = new UsuariosModel();

        $array_regras = [
            'nome' => [
                'rules' => 'required|min_length[3]|max_length[20]',
                'errors' => [
                    'required' => 'O nome é obrigatório!',
                    'min_length' => 'O nome deve ter pelo menos 3 caracteres!',
                    'max_length' => 'O nome deve ter no máximo 20 caracteres!'
                ]
            ],
            'email' =>  [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'O e-mail é obrigatório!',
                    'valid_email' => 'O e-mail fornecido não é válido!'
                ]
            ],
            'hash_senha'    =>  [
                'rules' => 'required|min_length[6]|matches[confirmacao]',
                'errors'    => [
                    'required' => 'A senha é obrigatória!',
                    'min_length' => 'A senha deve ter pelo menos 6 caracteres!',
                    'matches' => 'A confirmação não confere com a senha!'
                ]
            ]
        ];

        echo view('templates/header', $dados);

        if(!$this->validate($array_regras)) {
            echo view('usuario/inserir');
        }
        else    {
            $model->save([
                'nome' => $this->request->getVar('nome'),
                'email' => $this->request->getVar('email'),
                'hash_senha' => sha1($this->request->getVar('hash_senha'))
            ]);
            echo view('usuario/sucesso');
        }

        echo view('templates/footer');
    }

    public function deletar($id)    {
        $model = new UsuariosModel();
        $model->where(['id' => $id])->delete();
        
        return redirect()->to(site_url('Usuario/index'));
    }
}