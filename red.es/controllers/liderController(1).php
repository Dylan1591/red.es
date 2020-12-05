<?php

require 'models/lider.php';
require 'models/usuario.php';
require 'models/roll.php';
require 'models/programacion.php';

class liderController
{
    private $model;
    private $usuario;
    private $roll;
    private $programacion;

    public function __construct()
    {
        try {
        $this->model= new Lider;
        $this->usuario= new Usuario;
        $this->roll= new Roll;
        $this->programacion= new programacion;

        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function index()
    {
        $lideres = $this->model->getAll();
        require 'views/layout.php';
        require 'views/lider/lider.php';
    }

        public function new()
    {   
        $usuarios = $this->usuario->getAll();
        $rolles = $this->roll->getAll();
        $programaciones = $this->programacion->getAll();
        require 'views/layout.php';
        require 'views/lider/new.php';
    }
    public function save()
    {
        $this->model->new($_REQUEST);
        header('Location: ?controller=lider');
        
    }
    public function edit()
    {
        if (isset($_REQUEST['id_lider'])) {
            $id = $_REQUEST['id_lider'];
            $data = $this->model->getById($id);
            $usuarios = $this->usuario->getAll();
            $rolles = $this->roll->getAll();
            $programaciones = $this->programacion->getAll();
            require 'views/layout.php';
            require 'views/lider/edit.php';
        } else {
            require'views/samples/404.php';
        }
    }
    public function update()
    {
        if (isset($_POST)) {
            $this->model->edit($_POST);
            header('Location: ?controller=lider');
        } else {
            require'views/samples/404.php';
        }
    }
    public function delete()
    {
        $this->model->delete($_REQUEST);
        header('Location: ?controller=lider');
    }
    
}
