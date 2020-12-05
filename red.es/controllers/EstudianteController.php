<?php

require 'models/Usuario.php';
require 'models/Grado.php';
require 'models/estado.php';
require 'models/Estudiante.php';




class EstudianteController
{
    private $model;
    private $usuario;
    private $grado;
    private $hora;
    private $estado;


    public function __construct()
    {
        try {

        $this->model= new Estudiante;
        $this->usuario= new Usuario;
        $this->grado= new Grado;
        $this->estado= new Estado;



        } catch (Exception $e) {
            require'views/samples/error-404.html';
        }
    


    }

    public function index()
    {
        require 'views/layout.php';
        $estudiantes = $this->model->getAll();
        $estados = $this->estado->getAll();
        require 'views/estudiante/Estudiante.php';

        

    }

        public function new()
    {

        $usuarios = $this->usuario->getAll();
        $grados = $this->grado->getAll();
        require 'views/layout.php';
        require 'views/estudiante/new.php';

    }
    public function save()
    {
        $this->model->newEstudiante($_REQUEST);
        header('Location: ?controller=estudiante');
        
    }
    public function edit()
    {
        if (isset($_REQUEST['id_estudiante'])) {
            $id = $_REQUEST['id_estudiante'];
            $data = $this->model->getById($id);
            $usuarios = $this->usuario->getAll();
            $grados = $this->grado->getAll();
            $estados = $this->estado->getAll();
            require 'views/layout.php';
            require 'views/estudiante/edit.php';
        } else {
             require'views/samples/error-404.html';
        }
    }


    public function update()
    {
        if (isset($_POST)) {
            $this->model->editEstudiante($_POST);
            header('Location: ?controller=estudiante');
            echo "Estudiante actializado";
        } else {
            require'views/samples/404.php';
        }
    }
    public function delete()
    {
        $this->model->deleteEstudiante($_REQUEST);
        header('Location: ?controller=estudiante');
    }
    
}
