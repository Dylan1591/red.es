<?php


class programacion
{
    private $id_programacion;
    private $prog_fecha;
    private $prog_horaInicio;
    private $prog_horaFinal;
    private $id_actividad;
    private $id_estado;
    private $id_lider;
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
            $strSql = "SELECT p.*, a.acti_nombre as actividad, e.esta_nombre as estado, l.lide_nombre as lide_nombre, l.lide_apellido as lide_apellido FROM programacion p INNER JOIN actividad a ON a.id_actividad=p.id_actividad INNER JOIN estado e ON e.id_estado=p.id_estado INNER JOIN lider l ON l.id_lider=p.id_lider ORDER BY p.prog_fecha ASC";



            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

        public function new($data)
    {
        try {
            $data['id_estado'] = 1;
            $this->pdo->insert('programacion', $data);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function edit($data)
    {
        try {
            $strWhere = 'id_programacion=' . $data['id_programacion'];
            $this->pdo->update('programacion', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getById($id)
    {
        try {
            $strsql="SELECT * FROM programacion WHERE id_programacion= :id_programacion";
            $array =['id_programacion'=>$id];
            $query=$this->pdo->select($strsql,$array);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function delete($data)
    {
        try {
            $strWhere = 'id_programacion = ' . $data['id_programacion'];
            $this->pdo->delete('programacion', $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}



