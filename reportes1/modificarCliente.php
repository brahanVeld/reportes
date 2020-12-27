<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'conexion.php';
session_start();


$id_cliente=$_POST['id'];
$clienteDescr=$_POST['cliente'];
$usuario=$_POST['usuario'];

if(strlen($cliente)>0&& strlen($usuario)>0){
    $query="select * from clientes where Descripcion like '%".$clienteDescr." %'";
    $resultado= mysqli_query($conexion, $query)or die (mysqli_error($conexion));
    if(!empty($resultado)){
        if(mysqli_num_rows($resultado)>0){
             echo '<script type="text/javascript">
        alert("Ya existe un cliente con este nombre.");
        window.location.href="adminclientes.php?id=0";
        </script>';
        }else{
            $update="update clientes set Descripcion='".$clienteDescr."' and idUsuario=".$usuario." where id=".$id_cliente."";
            mysqli_query($conexion, $update);
            echo '<script type="text/javascript">
        alert("Se actualizo el cliente.");
        window.location.href="adminclientes.php?id=0";
        </script>';
        }
    }
    
    
}else{
    echo '<script type="text/javascript">
        alert("Es necesario el nombre del cliente y el usuario");
        window.location.href="adminclientes.php?id=0";
        </script>';
}

mysqli_close($conexion);


