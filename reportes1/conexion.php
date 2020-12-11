<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$hostname='localhost';
$database='reportes';
$username='root';
$password='';
$conexion= new mysqli($hostname, $username, $password,$database);
if($conexion->connect_errno){
    echo "No se pudo realizar la conexión";
}

?>