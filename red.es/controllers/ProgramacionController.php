<?php

require 'models/programacion.php';
require 'models/actividad.php';
require 'models/estado.php';
require 'models/lider.php';


class programacionController
{
    private $model;
    private $actividad;
    private $estado;
    private $lider;

    public function __construct()
    {
        try {

        $this->model= new programacion;
        $this->actividad= new actividad;
        $this->estado= new estado;
        $this->lider= new lider;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    
    }

    public function index()
    {
        require 'views/layout.php';
        $programaciones = $this->model->getAll();
        $lideres = $this->lider->getAll();
        require 'views/programacion/programacion.php';
    }

        public function new()
    {
        $actividades = $this->actividad->getAll();
        $estados = $this->estado->getAll();
        $lideres = $this->lider->getAll();
        require 'views/layout.php';
        require 'views/programacion/new.php';
    }
    public function save()
    {
        $this->model->new($_REQUEST);
        header('Location: ?controller=programacion');
        
    }
    public function edit()
    {
        if (isset($_REQUEST['id_programacion'])) {
            $id = $_REQUEST['id_programacion'];
            $data = $this->model->getById($id);
            $actividades = $this->actividad->getAll();
            $estados = $this->estado->getAll();
            $lideres = $this->lider->getAll();
            require 'views/layout.php';
            require 'views/programacion/edit.php';
        } else {
            require 'views/samples/error-404.html';
        }
    }
    public function update()
    {
        if (isset($_POST)) {
            $this->model->edit($_POST);
            header('Location: ?controller=programacion');
        } else {
            echo "Error, no se realizo";
        }
    }
    public function delete()
    {
        $this->model->delete($_REQUEST);
        header('Location: ?controller=programacion');
    }
    
}
