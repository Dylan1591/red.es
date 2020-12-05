<?php

require 'models/hora.php';
require 'models/estudiante.php';
require 'models/actividad.php';
require 'models/usuario.php';


class horaController
{
    private $model;
    private $estudiante;
    private $actividad;
    private $usuario;

    public function __construct()
    {
        try {

        $this->model= new Hora;
        $this->estudiante= new Estudiante;
        $this->actividad= new Actividad;
        $this->usuario= new Usuario;

        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function index()
    {
        require 'views/layout.php';
        $hora = $this->model->getAll();
        require 'views/horas/hora.php';
    }

        public function new()
    {
        $estudiantes = $this->estudiante->getAll();
        $actividades = $this->actividad->getAll();
        $usuarios = $this->usuario->getAll();
        require 'views/layout.php';
        require 'views/horas/new.php';
    }
    public function save()
    {
        $this->model->new($_REQUEST);
        header('Location: ?controller=hora');
        
    }
    public function edit()
    {
        if (isset($_REQUEST['id_hora'])) {
            $id = $_REQUEST['id_hora'];
            $data = $this->model->getById($id);
            $estudiantes = $this->estudiante->getAll();
            $actividades = $this->actividad->getAll();
            $usuarios = $this->usuario->getAll();
            require 'views/layout.php';
            require 'views/horas/edit.php';
        } else {
            require'views/samples/error-404.php';
        }
    }
    public function update()
    {
        if (isset($_POST)) {
            $this->model->edit($_POST);
            header('Location: ?controller=hora');
        } else {
            require'views/samples/404.php';
        }
    }
    public function delete()
    {
        $this->model->deleteHora($_REQUEST);
        header('Location: ?controller=hora');
    }

        public function hora()
    {
        if (isset($_REQUEST['id_estudiante'])) {
            $id = $_REQUEST['id_estudiante'];
            $data = $this->model->getByIdE($id);
            $cert = $this->model->cert($id);
            $grad = $this->model->grad($id);
            $Cole =$this->model->SumCol($id);
            $EsN =$this->model->EsN($id);

            require 'views/layout.php';       
            require 'views/estudiante/hora_registro.php';

        }
        else {
            require'views/error-404.php';
        }
    }
    public function certificado() {
        if (isset($_REQUEST['id_estudiante'])) {
            $id = $_REQUEST['id_estudiante'];
            
            $this->model->certifi($id, $_REQUEST);
      }
              
        else {
            require'views/error-404.php';
        }


        
    }


   

    
}

