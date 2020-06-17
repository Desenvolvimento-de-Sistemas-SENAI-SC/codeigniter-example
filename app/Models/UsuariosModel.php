<?php namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table = 'usuarios';

    public function getUsuarios()   {
        return $this->findAll();
    }

    public function getUsuario($id) {
        return $this->where(['id' => $id])->first();
    }
}