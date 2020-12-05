<?php

require 'models/grado.php';

class gradoController
{
    private $model;

    public function __construct()
    {
        $this->model= new grado;

    }

    public function index()
    {
        require 'views/layout.php';
        $grado = $this->model->getAll();
        require 'views/grado/grado.php';
    }

        public function new()
    {
        require 'views/layout.php';
        require 'views/grado/new.php';
    }
    public function save()
    {
        $this->model->new($_REQUEST);
        header('Location: ?controller=grado');
        
    }
    public function edit()
    {
        if (isset($_REQUEST['id_grado'])) {
            $id = $_REQUEST['id_grado'];
            $data = $this->model->getById($id);
            require 'views/layout.php';
            require 'views/grado/edit.php';
        } else {
            echo "Error, no se pudo completar la edicion";
        }
    }
    public function update()
    {
        if (isset($_POST)) {
            $this->model->edit($_POST);
            header('Location: ?controller=grado');
        } else {
            echo "Error, no se realizo";
        }
    }
    public function delete()
    {
        $this->model->delete($_REQUEST);
        header('Location: ?controller=grado');
    }
    
}
