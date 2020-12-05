<?php





class grado
{
    private $id_grado;
    private $grad_nombre;
    private $grad_horasTotales;
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
            $strSql = "SELECT * from grado";
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

        public function new($data)
    {
        try {
            $this->pdo->insert('grado', $data);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function edit($data)
    {
        try {
            $strWhere = 'id_grado=' . $data['id_grado'];
            $this->pdo->update('grado', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getById($id)
    {
        try {
            $strsql="SELECT * FROM grado WHERE id_grado= :id_grado";
            $array =['id_grado'=>$id];
            $query=$this->pdo->select($strsql,$array);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function delete($data)
    {
        try {
            $strWhere = 'id_grado = ' . $data['id_grado'];
            $this->pdo->delete('grado', $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}



