<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'conexion.php';



$nombre= utf8_decode($_POST['nombreCompleto']);
$usuario= utf8_decode($_POST['nombreUser']);
$pasw1= utf8_decode($_POST['pasw1']);
$pasw2= utf8_decode($_POST['pasw2']);

if($pasw1===$pasw2){
    $query="select * from usuarios where usuario='$usuario'";
    $rsultado= mysqli_query($conexion, $query) or die(mysqli_error($conexion));
    /////valido que la consulta no venga vacía \\\\\\\
    if(!empty($rsultado)){
        if(mysqli_num_rows($rsultado)>0){
             echo '<script type="text/javascript">
        alert("Ya existe el usuario");
       window.location.href="adminusuarios.php?id=0";
        </script>';
        }else{
            $insert="insert into usuarios (nombre,usuario, contrasenia) values('$nombre','$usuario', '$pasw1') ";
        mysqli_query($conexion, $insert) or die(mysqli_error($conexion));
        echo '<script type="text/javascript">
        alert("Usuario registrado");
        window.location.href="adminusuarios.php?id=0";
        </script>';
       }
    }
  
    
}else{
    echo '<script type="text/javascript">
        alert("Las contraseñas deben de ser iguales");
        window.location.href="adminusuarios.php?id=0";
        </script>';
}
       
mysqli_close($conexion);