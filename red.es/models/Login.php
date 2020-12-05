 <?php

/**
 * Modelo Login
 */

class Login
{
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new Database;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function validateUser($data)
    {
        try {

            // Encriptar contraseña      
            $strSql = "SELECT u.*, e.esta_Nombre as estado, r.roll_nombre as roll FROM usuario u INNER JOIN estado e ON e.id_estado = u.id_estado INNER JOIN roll r ON r.id_roll = u.id_roll WHERE u.usua_correo = '{$data['usua_correo']}' AND u.usua_clave = '{$data['usua_clave']}' AND u.id_estado = 1";
           

            $query = $this->pdo->select($strSql);

            if(isset($query[0]->id_estado)) {

                    $_SESSION['user'] = $query[0];
                    return true;
                } else {
                    return 'Usuario o contraseña incorrectos';
                }


        } catch (PDOException $e) {
            return $e->getMessage();
        }    
    }

}
