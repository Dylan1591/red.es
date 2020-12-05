<?php

require 'models/usuario.php';
require 'models/Roll.php';
require 'models/estado.php';

class usuarioController
{
    private $model;
    private $roll;
    private $estado;

    public function __construct()
    {
        $this->model= new usuario;
        $this->roll= new Roll;
        $this->estado= new estado;

    }

    public function index()
    {
        require 'views/layout.php';
        $usuarios = $this->model->getAll();
        require 'views/usuario/usuario.php';
    }

        public function new()
    {
        $rolles = $this->roll->getAll();
        $estados = $this->estado->getAll();
        require 'views/layout.php';
        require 'views/usuario/new.php';
    }
    public function save()
    {
        $this->model->new($_REQUEST);
        header('Location: ?controller=usuario');
        
    }
    public function edit()
    {
        if (isset($_REQUEST['id_usuario'])) {
            $id = $_REQUEST['id_usuario'];
            $data = $this->model->getById($id);
            $rolles = $this->roll->getAll();
            $estados = $this->estado->getAll();
            require 'views/layout.php';
            require 'views/usuario/edit.php';
        } else {
            echo "Error, no se pudo completar la edicion";
        }
    }
        public function password()
    {
        if (isset($_REQUEST['id_usuario'])) {
            $id = $_REQUEST['id_usuario'];
            $data = $this->model->getById($id);
            require 'views/layout.php';
            require 'views/usuario/change_password.php';
        } else {
            echo "Error, no se pudo completar la edicion";
        }
    }
    public function perfil()
    {
        require 'views/layout.php';
        $usuarios = $this->model->getAll();
        require 'views/usuario/Perfil.php';
    }

    public function update()
    {
        if (isset($_POST)) {
            $this->model->edit($_POST);
            header('Location: ?controller=usuario');
        } else {
            echo "Error, no se realizo";
        }
    }
    public function delete()
    {
        $this->model->delete($_REQUEST);
        header('Location: ?controller=usuario');
    }
    
}
