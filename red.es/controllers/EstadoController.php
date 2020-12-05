<?php

require 'models/estado.php';

class estadoController
{
    private $model;

    public function __construct()
    {
        $this->model= new estado;

    }

    public function index()
    {
        require 'views/layout.php';
        $estados = $this->model->getAll();
        require 'views/estado/estado.php';
    }

        public function new()
    {
        require 'views/layout.php';
        require 'views/estado/new.php';
    }
    public function save()
    {
        $this->model->new($_REQUEST);
        header('Location: ?controller=estado');
        
    }
    public function edit()
    {
        if (isset($_REQUEST['esta_id'])) {
            $id = $_REQUEST['esta_id'];
            $data = $this->model->getById($id);
            require 'views/layout.php';
            require 'views/estado/edit.php';
        } else {
            require 'views/samples/error-404.html';
        }
    }
    public function update()
    {
        if (isset($_POST)) {
            $this->model->edit($_POST);
            header('Location: ?controller=estado');
        } else {
            echo "Error, no se realizo";
        }
    }
    public function delete()
    {
        $this->model->delete($_REQUEST);
        header('Location: ?controller=estado');
    }
    
}