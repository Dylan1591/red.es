<?php

class notificacion
{
    private $id_notificacion;
    private $usuario;
    private $tipo;
    private $leido;
    private $fecha;
    private $acti_nombre;
    private $acti_descripcion;
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new Database;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAll()
    {
        try {
            $strSql = "SELECT * FROM notificacion WHERE leido = 0";
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

        public function new($data)
    {
        try {


            $data['usuario'] = $_SESSION['user']->usua_correo;
            $data['tipo'] = "Se ha creado una actividad";
            $data['leido'] = 0;
            $data['fecha'] = date_default_timezone_set('UTC');
            $data['acti_nombre'] = $_POST['acti_nombre'];
            $data['acti_descripcion'] = $_POST['acti_descripcion'];
            $this->pdo->insert('notificacion', $data);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }



    
    public function edit($data)
    {
        try {
            $strWhere = 'id_notificacion=' . $data['id_notificacion'];
            $this->pdo->update('notificacion', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getById($id)
    {
        try {
            $strsql="SELECT * FROM notificacion WHERE id_notificacion= :id_notificacion";
            $array =['id_notificacion'=>$id];
            $query=$this->pdo->select($strsql,$array);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function delete($data)
    {
        try {
            $strWhere = 'id_notificacion = ' . $data['id_notificacion'];
            $this->pdo->delete('notificacion', $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


}



