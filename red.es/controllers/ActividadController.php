<?php

require 'models/Actividad.php';
require 'models/estado.php';



class ActividadController
{
    private $model;
    private $estado;
    private $notificacion;

    public function __construct()
    {
        try {
        $this->model= new Actividad;
        $this->estado= new estado; 

        } catch (Exception $e) {
            require'views/samples/error-404.html';
        }

    }

    public function index()
    {
        require 'views/layout.php';
        $actividades = $this->model->getAll();
        require 'views/actividad/Actividad.php';
    }

        public function new()
    {
        require 'views/layout.php';
        require 'views/actividad/new.php';
    }
    public function save()
    {
        $this->model->new($_REQUEST);
        header('Location: ?controller=actividad');
        
    }
    public function edit()
    {
        if (isset($_REQUEST['id_actividad'])) {
            $id = $_REQUEST['id_actividad'];
            $data = $this->model->getById($id);
            $estados = $this->estado->getAll();
            require 'views/layout.php';
            require 'views/actividad/edit.php';
        } else {
            require'views/samples/404.php';
        }
    }
    public function update()
    {
        if (isset($_POST)) {
            $this->model->editActividad($_POST);
            header('Location: ?controller=actividad');
        } else {
            require'views/samples/404.php';
        }
    }
    public function delete()
    {
        $this->model->deleteActividad($_REQUEST);
        header('Location: ?controller=actividad');
    }
    
}
