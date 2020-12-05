<?php


class lider
{
    private $id_lider;
    private $lide_nombre;
    private $lide_apellido;
    private $lide_identificacion;
    private $lide_celular;
    private $lide_correo;
    private $id_usuario;
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
        if ($_SESSION['user']->id_roll == 1) {
        $id_u=$_SESSION['user']->id_usuario;

        $strSql = "SELECT l.*, l.lide_nombre as lide_nombre, l.lide_apellido as lide_apellido, u.usua_correo as usuario FROM lider l INNER JOIN usuario u ON u.id_usuario=l.id_usuario WHERE l.id_usuario = $id_u ORDER BY l.id_lider ASC";
        

        $query = $this->pdo->select($strSql);
            return $query;
        }
        $strSql = "SELECT l.*, l.lide_nombre as lide_nombre, l.lide_apellido as lide_apellido, u.usua_correo as usuario FROM lider l INNER JOIN usuario u ON u.id_usuario=l.id_usuario ORDER BY l.id_lider ASC";
        

        $query = $this->pdo->select($strSql);
            return $query;

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

        public function new($data)
    {
        try {
            $this->pdo->insert('lider', $data);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function edit($data)
    {
        try {
            $strWhere = 'id_lider=' . $data['id_lider'];
            $this->pdo->update('lider', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getById($id)
    {
        try {
            $strsql="SELECT * FROM lider WHERE id_lider= :id_lider";
            $array =['id_lider'=>$id];
            $query=$this->pdo->select($strsql,$array);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function delete($data)
    {
        try {
            $strWhere = 'id_lider = ' . $data['id_lider'];
            $this->pdo->delete('lider', $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}



