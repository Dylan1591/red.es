<?php



class colegio
{
    private $id_colegio;
    private $cole_nombre;
    private $cole_celular;
    private $cole_direccion;
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
            $strSql = "SELECT c.*, e.esta_Nombre as estado from colegio c INNER JOIN estado e ON e.id_estado=c.id_estado ORDER BY c.id_colegio ASC  ";
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
            $this->pdo->insert('colegio', $data);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function edit($data)
    {
        try {
            $strWhere = 'id_colegio=' . $data['id_colegio'];
            $this->pdo->update('colegio', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getById($id)
    {
        try {
            $strsql="SELECT * FROM colegio WHERE id_colegio= :id_colegio";
            $array =['id_colegio'=>$id];
            $query=$this->pdo->select($strsql,$array);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function delete($data)
    {
        try {
            $strWhere = 'id_colegio = ' . $data['id_colegio'];
            $this->pdo->delete('colegio', $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}



