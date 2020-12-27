<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//include 'conexion.php';

$nombre= utf8_decode($_POST['']);
$usuario= utf8_decode($_POST['']);
$contrasenia1= utf8_decode($_POST['']);
$contrasenia2= utf8_decode($_POST['']);
$id= utf8_decode($_POST['']);


if($contrasenia1===$contrasenia2){
    $query="select * from usuarios where usuario=$usuario";
    $resultado= mysqli_query($conexion, $query);
    if(mysqli_num_rows($result)>0){
         echo '<script type="text/javascript">
        alert("Ya existe el usuario");
        window.location.href="adminusuarios.php";
        </script>';
    }else{
        $update="update usuarios set contrasenia=$contrasenia1, nombre=$nombre, usuario=$usuario where id=$id";
        mysqli_query($conexion, $update);
    }
    
    
}else{
     echo '<script type="text/javascript">
        alert("Las contraseñas deben de ser iguales");
        window.location.href="misdatos.php";
        </script>';
}
