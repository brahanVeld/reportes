<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'conexion.php';
session_start();

$nombre= utf8_decode($_POST['nombreCompleto']);
$usuario= utf8_decode($_POST['nombreUser']);
$pasw1= utf8_decode($_POST['pasw1']);
$pasw2= utf8_decode($_POST['pasw2']);
$id= utf8_decode($_POST['id']);

if($pasw1===$pasw2){
    $query="select * from usuarios where usuario='$usuario'";
     $rsultado= mysqli_query($conexion, $query) or die(mysqli_error($conexion));
    if(!empty($rsultado)){
        if(mysqli_num_rows($rsultado)>0){
            echo '<script type="text/javascript">
        alert("Ya existe un usuario con este nombre.");
        window.location.href="adminusuarios.php?id=0";
        </script>';
        }else{
            $update="update usuarios set nombre='$nombre' and contrasenia='$pasw1' where  id='$id'";
            mysqli_query($conexion, $update);
             echo '<script type="text/javascript">
        alert("Usuario actualizado");
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