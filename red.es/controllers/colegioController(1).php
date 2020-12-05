<?php

require 'models/colegio.php';
require 'models/estado.php';


class colegioController
{
    private $model;
    private $estado;

    public function __construct()
    {
        $this->model= new colegio;
         $this->estado= new estado; 

    }

    public function index()
    {
        require 'views/layout.php';
        $colegio = $this->model->getAll();
        require 'views/colegio/colegio.php';
    }

        public function new()
    {
        require 'views/layout.php';
        $estados = $this->estado->getAll();
        require 'views/colegio/new.php';
    }
    public function save()
    {
        $this->model->new($_REQUEST);

        header('Location: ?controller=colegio');
        
    }
    public function edit()
    {
        if (isset($_REQUEST['id_colegio'])) {
            $id = $_REQUEST['id_colegio'];
            $data = $this->model->getById($id);
            $estados = $this->estado->getAll();
            require 'views/layout.php';
            require 'views/colegio/edit.php';
        } else {
            echo "Error, no se pudo completar la edicion";
        }
    }
    public function update()
    {
        if (isset($_POST)) {
            $this->model->edit($_POST);
            header('Location: ?controller=colegio');
        } else {
            echo "Error, no se realizo";
        }
    }
    public function delete()
    {
        $this->model->delete($_REQUEST);
        header('Location: ?controller=colegio');
    }
    
}
