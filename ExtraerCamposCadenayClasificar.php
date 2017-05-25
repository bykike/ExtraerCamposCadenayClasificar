<?php

    /* $Especialidad=trim($registro['Especialidad']); */

    $Especialidad = trim("1,2,3,4,5,6");
    $Especialidades=explode(",",$Especialidad); 


    echo $Especialidad . "<br>";

    echo $Especialidades . "<br>";

    echo $Especialidades[0];

    if (!empty($Especialidades[0])) 
        {
            for($i=0;$i<count($Especialidades);$i++){

                switch ($Especialidades[$i]) {

                    case '1':
                        echo "Preparador físico especialista en rendimiento deportivo";
                        echo "<br";
                        break;
                    case '2':
                        echo "Preparador físico como educador físico o readaptador de lesiones, patologías o enfermedades";
                        echo "<br"; 
                        break;  
                    case "3":
                        echo "Especialista en pruebas de acceso a cuerpos y fuerzas de seguridad del estado";
                        echo "<br";
                        break;
                    case "4":
                        echo "Profesor de educación física";
                        echo "<br"; 
                        break; 
                    case "5":
                        echo "Director deportivo especialista en gestión deportiva";
                        echo "<br";
                        break;
                    case "6":
                        echo "Especialista en actividades en el medio natural";
                        echo "<br";
                        break;  
                    case "7":
                        echo "Especialista en fitness y actividades dirigidas en salas polivalentes";
                        echo "<br";
                        break;
                    case "8":
                        echo "Especialista en natación, actividades acuáticas o salvamento y socorrismo";
                        echo "<br"; 
                         break;                                                             
                    default:
                         # code...
                         break;

                 } /* Fin Switch */

                } /* Fin for */
        
        } /* Fin If */ 
 
?>