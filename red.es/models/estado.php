<?php
class estado
{
    private $id_estado;
    private $esta_Nombre;
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
            $strSql = "SELECT * from estado";   
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

        public function new($data)
    {
        try {
            $this->pdo->insert('estado', $data);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function edit($data)
    {
        try {
            $strWhere = 'id_estado=' . $data['id_estado'];
            $this->pdo->update('estado', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getById($id)
    {
        try {
            $strsql="SELECT * FROM id_estado WHERE id_estado= :id_estado";
            $array =['id_estado'=>$id];
            $query=$this->pdo->select($strsql,$array);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function delete($data)
    {
        try {
            $strWhere = 'id_estado = ' . $data['id_estado'];
            $this->pdo->delete('estado', $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}