<?php

    $Especialidad = "1,2,3,4,5,6,7,8,";
    $Especialidad = trim($Especialidad);
    $Especialidades=explode(",",$Especialidad);


    for($i=0;$i<count($Especialidades);$i++){

        if ($Especialidades[$i] == "1") { echo "Preparador físico especialista en rendimiento deportivo" . "<br>"; }
        if ($Especialidades[$i] == "2") { echo "Preparador físico como educador físico o readaptador de lesiones, patologías o enfermedades". "<br>"; }
        if ($Especialidades[$i] == "3") { echo "Especialista en pruebas de acceso a cuerpos y fuerzas de seguridad del estado" . "<br>"; }
        if ($Especialidades[$i] == "4") { echo "Profesor de educación física" . "<br>"; }
        if ($Especialidades[$i] == "5") { echo "Director deportivo especialista en gestión deportiva" . "<br>"; }
        if ($Especialidades[$i] == "6") { echo "Especialista en actividades en el medio natural" . "<br>"; }
        if ($Especialidades[$i] == "7") { echo "Especialista en fitness y actividades dirigidas en salas polivalentes" . "<br>"; }
        if ($Especialidades[$i] == "8") { echo "Especialista en natación, actividades acuáticas o salvamento y socorrismo" . "<br>"; }

    } 
        
?>