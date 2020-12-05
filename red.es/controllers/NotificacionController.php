<?php
require 'models/notifiacion.php';




class notificacionController
{
    private $model;

    public function __construct()
    {
        $this->model= new notificacion;

    }

    public function index()
    {
        require 'views/layout.php';
        $noti = $this->model->getAll();

    }


    public function save()
    {
        $this->model->new($_REQUEST);

        header('Location: ?controller=notificacion');
        
    }

    public function delete()
    {
        $this->model->delete($_REQUEST);
        header('Location: ?controller=notificacion');
    }
    
}
