<?php


class Estudiante
{
    private $id_estudiante;
    private $estu_nombre;
    private $estu_apellido;
    private $estu_identificacion;
    private $estu_nacimiento;
    private $estu_celular;
    private $estu_nombreAcudiente;
    private $estu_celularAcudiente;
    private $estu_correo;
    private $id_usuario;
    private $id_estado;
    private $id_grado;
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

        $strSql = "SELECT e.*, u.usua_correo as usuario, g.grad_nombre as grado, es.esta_nombre as estado FROM estudiante e INNER JOIN usuario u ON u.id_usuario=e.id_usuario INNER JOIN grado g ON g.id_grado=e.id_grado INNER JOIN estado es ON es.id_estado=e.id_estado WHERE e.id_usuario = $id_u ORDER BY e.estu_apellido ASC";

        $query = $this->pdo->select($strSql);
        return $query;
        } 
         $strSql = "SELECT e.*, u.usua_correo as usuario, g.grad_nombre as grado, es.esta_nombre as estado FROM estudiante e INNER JOIN usuario u ON u.id_usuario=e.id_usuario INNER JOIN grado g ON g.id_grado=e.id_grado INNER JOIN estado es ON es.id_estado=e.id_estado ORDER BY e.estu_apellido ASC";

         $query = $this->pdo->select($strSql);
        return $query;
        
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

        public function newEstudiante($data)
    {
        try {
            $data['id_estado'] = 4;

            $this->pdo->insert('estudiante', $data);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function editEstudiante($data)
    {
        try {
            $strWhere = 'id_estudiante=' . $data['id_estudiante'];
            $this->pdo->update('estudiante', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getById($id)
    {
        try {
            $strsql="SELECT * FROM estudiante WHERE id_estudiante= :id_estudiante";
            $array =['id_estudiante'=>$id];
            $query=$this->pdo->select($strsql,$array);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function deleteEstudiante($data)
    {
        try {
            $strWhere = 'id_estudiante = ' . $data['id_estudiante'];
            $this->pdo->delete('estudiante', $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        } 
    }

     public function getByIdUs($id)
     {
        try{
        $strSql = "SELECT e.*, u.usua_correo as usuario, g.grad_nombre as grado, es.esta_nombre as estado FROM estudiante e INNER JOIN usuario u ON u.id_usuario=e.id_usuario INNER JOIN grado g ON g.id_grado=e.id_grado INNER JOIN estado es ON es.id_estado=e.id_estado ORDER BY e.estu_apellido ASC";
                    $array =['id_'=>$id];
            $query=$this->pdo->select($strsql,$array);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage()); 
        }
     }
}



