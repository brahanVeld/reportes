<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'conexion.php';

$cliente= utf8_decode($_POST['cliente']);
$usuario= utf8_decode($_POST['usuario']);
//$descripcion= utf8_decode($_POST['descripcion']);

if(strlen($cliente)>0&& strlen($usuario)>0){
    $query="select * from clientes where Descripcion=$cliente";
    $resultado= mysqli_query($conexion, $query);
    if(!empty($resultado)){
    if(mysqli_num_rows($resultado)>0){
        echo '<script type="text/javascript">
        alert("Ya existe el cliente");
        window.location.href="adminclientes.php";
        </script>';
    }else{
        $insert="insert into clientes (Descripcion, idUsuario)values('$cliente',$usuario)";
        mysqli_query($conexion, $insert)or die(mysqli_error($conexion));
         echo '<script type="text/javascript">
        alert("Cliente registrado");
        window.location.href="adminclientes.php";
        </script>';
    }
    }else{
         $insert="insert into clientes (Descripcion, idUsuario)values('$cliente',$usuario)";
        mysqli_query($conexion, $insert)or die(mysqli_error($conexion));
         echo '<script type="text/javascript">
        alert("Cliente registrado");
        window.location.href="adminclientes.php";
        </script>';
    }
}else{
    echo'<script type="text/javascript">
        alert("Ningun dato debe de estar vacio");
        window.location.href="adminclientes.php";
        </script>';
}


///5537171451