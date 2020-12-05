<?php

class Actividad 
{
    private $id_actividad;
    private $acti_nombre;
    private $acti_descripcion;
    private $id_estado;
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
            $strSql = "SELECT * from actividad a INNER JOIN estado e ON e.id_estado=a.id_estado";
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
        public function new($data)
    {
        try {
            if ($_SESSION['user']->usua_roll == 4) {
                $data['id_estado'] = 1;
            } 
                $data['id_estado'] = 2;
                        

            $this->pdo->insert('actividad', $data);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }



    
    public function editActividad($data)
    {
        try {
            $strWhere = 'id_actividad=' . $data['id_actividad'];
            $this->pdo->update('actividad', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getById($id)
    {
        try {
            $strsql="SELECT * FROM actividad WHERE id_actividad= :id_actividad";
            $array =['id_actividad'=>$id];
            $query=$this->pdo->select($strsql,$array);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function deleteActividad($data)
    {
        try {
            $strWhere = 'id_actividad = ' . $data['id_actividad'];
            $this->pdo->delete('actividad', $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


}



