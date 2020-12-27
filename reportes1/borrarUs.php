<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'conexion.php';
session_start();
$id=$_GET['id'];


$borrar="delete from usuarios where id='$id'";
mysqli_query($conexion, $borrar);
 header("location: adminusuarios.php?id=0");
 
 mysqli_close($conexion);