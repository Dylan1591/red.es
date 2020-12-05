<?php



class usuario
{
    private $id_usuario;
    private $usua_correo;
    private $usua_clave;
    private $id_roll;
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
            $strSql =" SELECT u.*,  r.roll_nombre as roll, e.esta_Nombre as estado FROM usuario u INNER JOIN roll r ON r.id_roll=u.id_roll INNER JOIN estado e ON e.id_estado=u.id_estado ORDER BY u.id_usuario ASC";
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
            $this->pdo->insert('usuario', $data);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function edit($data)
    {
        try {

            $strWhere = 'id_usuario=' . $data['id_usuario'];
            $this->pdo->update('usuario', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getById($id)
    {
        try {
            $strsql="SELECT * FROM usuario WHERE id_usuario= :id_usuario";
            $array =['id_usuario'=>$id];
            $query=$this->pdo->select($strsql,$array);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function delete($data)
    {
        try {
            $strWhere = 'id_usuario = ' . $data['id_usuario'];
            $this->pdo->delete('usuario', $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}



