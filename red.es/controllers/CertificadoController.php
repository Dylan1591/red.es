<?php
   
require 'models/hora.php';
require 'models/estudiante.php';




 class certificadoController
{
    private $model;


    public function __construct()
    {
        try {

        $this->model= new Hora;


        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function certificado() {
      $this->model->certifi($_REQUEST);
    }












    
}
?>