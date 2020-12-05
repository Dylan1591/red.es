<?php
    include_once('tbs_3121/tbs_class.php'); 
    include_once('tbs_3121/plugins/tbs_plugin_opentbs.php');  
class hora
{
    private $id_hora;
    private $hora_fecha;
    private $hora;
    private $id_estudiante;
    private $id_actividad;
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

            $strSql = "SELECT h.*, e.estu_nombre as estu_nombre, e.estu_apellido as estu_apellido, a.acti_nombre as actividad, u.usua_correo as usua_correo FROM hora h INNER JOIN estudiante e ON e.id_estudiante=h.id_estudiante INNER JOIN actividad a ON a.id_actividad=h.id_actividad INNER JOIN usuario u ON u.id_usuario=h.id_usuario  WHERE e.id_usuario = $id_u  ORDER BY e.id_estudiante ASC";
            $query = $this->pdo->select($strSql);
            return $query;
        }

        $strSql = "SELECT h.*, e.estu_nombre as estu_nombre, e.estu_apellido as estu_apellido, a.acti_nombre as actividad, u.usua_correo as usua_correo FROM hora h INNER JOIN estudiante e ON e.id_estudiante=h.id_estudiante INNER JOIN actividad a ON a.id_actividad=h.id_actividad INNER JOIN usuario u ON u.id_usuario=h.id_usuario  ORDER BY e.id_estudiante ASC";
            $query = $this->pdo->select($strSql);
            return $query;

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

        public function new($data)
    {
        try {
            
           $data['id_usuario'] = $_SESSION['user']->id_usuario;

            $this->pdo->insert('hora', $data);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function edit($data)
    {
        try {


            $strWhere = 'id_hora=' . $data['id_hora'];       

            $this->pdo->update('hora', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getById($id)
    {
        try {
            $strsql="SELECT * FROM hora WHERE id_hora= :id_hora";
            $array =['id_hora'=>$id];
            $query=$this->pdo->select($strsql,$array);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function deleteActividad($data)
    {
        try {
            $strWhere = 'id_hora = ' . $data['id_hora'];
            $this->pdo->delete('hora', $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

        public function getByIdE($id)
    {
        try {
            $strsql="SELECT h.*, e.estu_nombre as estu_nombre, e.estu_apellido as estu_apellido,  a.acti_nombre as actividad, u.usua_correo as usua_correo FROM hora h INNER JOIN estudiante e ON e.id_estudiante=h.id_estudiante INNER JOIN actividad a ON a.id_actividad=h.id_actividad INNER JOIN usuario u ON u.id_usuario=h.id_usuario WHERE e.id_estudiante = :id_estudiante ORDER BY h.hora_fecha ASC";
            $array =['id_estudiante'=>$id];
            $query=$this->pdo->select($strsql,$array);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage()); 
        }
    }
            public function SumCol($id)
    {
                         
        try {
           
            $strsql="SELECT SUM(hora) AS hora_sum  FROM hora where id_estudiante = :id_estudiante ";
            $array =['id_estudiante'=>$id];
            $query=$this->pdo->select($strsql,$array);

            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

            public function grad($id)
    {
                         
        try {
           
            $strsql= "SELECT e.*, g.grad_horasTotales from estudiante e INNER JOIN grado g on g.id_grado=e.id_grado where id_estudiante = :id_estudiante";;
            $array =['id_estudiante'=>$id];
            $query=$this->pdo->select($strsql,$array);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
       
            public function EsN($id)
    {
        try {
            $strsql="SELECT * FROM estudiante  WHERE id_estudiante = :id_estudiante ";
            $array =['id_estudiante'=>$id];
            $query=$this->pdo->select($strsql,$array);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

            public function getByIdCert($id)
    {
        try {
            $strsql="SELECT * FROM estudiante  WHERE id_estudiante = :id_estudiante";
            $array =['id_estudiante'=>$id];
            $query=$this->pdo->select($strsql,$array);
            return $query;
                

        } catch (PDOException $e) {
            die($e->getMessage()); 
        }
    }
    public function cert($id){
         try {


            $strsql="SELECT * FROM estudiante  WHERE id_estudiante = :id_estudiante ";
            $array =['id_estudiante'=>$id];

            $query=$this->pdo->select($strsql,$array);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage()); 
        }

    }

    public function certifi($id){
        try {
            
           
            $strsql="SELECT * FROM estudiante  WHERE id_estudiante = :id_estudiante";

            $array =['id_estudiante'=>$id];

            $query=$this->pdo->select($strsql,$array);
            $id_estadoE = $query[0]->id_estado;
            $id_E = $query[0]->id_estudiante;

            if ($id_estadoE == 4 ) {

                $date= new DateTime();
                $TBS = new clsTinyButStrong; 
                $TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); 
                //Parametros
                $estu_nombre = $query[0]->estu_nombre;
                $estu_apellido = $query[0]->estu_apellido;
                $estu_identificacion = $query[0]->estu_identificacion;
                $fecha = $date->format('d-m-Y');
                $firmadecano = 'firma.png';
                //Cargando template
                $template = 'tbs_3121/Plantilla_Colegiado.docx';
                $TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8);
                //Escribir Nuevos campos
                $TBS->MergeField('c.estu_nombre', $estu_nombre);
                $TBS->MergeField('c.estu_apellido', $estu_apellido);
                $TBS->MergeField('c.fecha', $fecha);
                $TBS->MergeField('c.estu_identificacion', $estu_identificacion);
                $TBS->VarRef['x'] = $firmadecano;

                $TBS->PlugIn(OPENTBS_DELETE_COMMENTS);

                $save_as = (isset($_POST['save_as']) && (trim($_POST['save_as'])!=='') && ($_SERVER['SERVER_NAME']=='localhost')) ? trim($_POST['save_as']) : '';
                $output_file_name = str_replace('.', '_'.date('Y-m-d').$save_as.'.', $template);
                if ($save_as==='') {
                    $TBS->Show(OPENTBS_DOWNLOAD, $output_file_name); 
                    exit();
                } else {
                    $TBS->Show(OPENTBS_FILE, $output_file_name);
                    exit("File [$output_file_name] has been created.");
                }
            }
            
                 echo "<script>
                
                window.location= '?controller=hora&method=hora&id_estudiante=$id_E';
                alert('Usted no posee un certificado');
                 </script>";
                 die();
            

            

            } catch (PDOException $e) {
            die($e->getMessage()); 
        }

    }



}



    
