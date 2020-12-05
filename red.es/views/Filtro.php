<?php  
        $ocultarEstudiante="block";
        if ($_SESSION['user']->roll=="Estudiante" ) {
            $ocultarEstudiante="none";
        }

        $ocultarLider="block";
        if ($_SESSION['user']->roll=="Lider" ) {
            $ocultarLider="none";
        }

        $ocultarInstructor="block";
        if ($_SESSION['user']->roll=="Instructor" ) {
            $ocultarInstructor="none";
        }
        $ocultarAdministrador="block";
        if ($_SESSION['user']->roll=="Administrador" ) {
            $ocultarAdministrador="none";
        }
        $ocultarEstudiante_lider="block";
        if ($_SESSION['user']->roll=="Estudiante" ) {
            $ocultarEstudiante_lider="none";
        }elseif ($_SESSION['user']->roll=="Lider" ) {
            $ocultarEstudiante_lider="none";
        }

       $ocultarE_l_I="block";

        if ($_SESSION['user']->roll=="Estudiante" ) {

            $ocultarE_l_I="none";

        }elseif ($_SESSION['user']->roll=="Lider" ) {

            $ocultarE_l_I="none";

         }elseif ($_SESSION['user']->roll=="Instructor" ) {
          
            $ocultarE_l_I="none";
        }
         $ocultarLider_instructor="block";
        if ($_SESSION['user']->roll=="Lider" ) {
            $ocultarLider_instructor="none";
        }elseif ($_SESSION['user']->roll=="Instructor" ) {
            $ocultarLider_instructor="none";
        }
        ?>