<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'conexion.php';
session_start();


//validar que no es un ataque csrf
//if(isset($_SESSION['token'])&& $_POST['token']==$_SESSION['token']){
    //no es un ataque csrf
    

    
    //se validan las credenciales\\\\
    if((isset($_POST['name'])&&!empty($_POST['name']))&&(isset($_POST['password'])&&!empty($_POST['password']))){
        $usuario=$_POST['name'];
        $contrasenia=$_POST['password'];
        $query="select * from reportes.usuarios where usuario='".$_POST['name']."' and contrasenia='".$_POST['password']."'";
        error_log($query);
        $row= mysqli_query($conexion, $query)or die(mysqli_error($conexion));
        if(!empty($row)){
            if(mysqli_num_rows($row)>0){
              //  error_log("id ".$row['id']);
                while($result= mysqli_fetch_array($row, MYSQLI_BOTH)){
                     $_SESSION['usuario']=$result['usuario'];
               $_SESSION['nombre']=$result['nombre'];
               $_SESSION['contrasenia']=$result['contrasenia'];
               $_SESSION['id']=$result['id'];
                }
                if($_SESSION['id']==='1'){
                    
               header("location: administrador.php");
                }else{
                    header("location: index.php");
                }
            }
        }else{
             echo '<script type="text/javascript">
        alert("Ocurrio un problema con el usuario, contacte al administrador"'.$user.');
        window.location.href="index.php";
        </script>';
        }
    }else{
         echo '<script type="text/javascript">
        alert("Ocurrio un problema con el usuario, contacte al administrador");
        window.location.href="index.php";
        </script>';
        
        
        
    }
        
        
       /* 
        //$result=mysqli_fetch_row($row);
        $result= mysqli_fetch_array($row)or die(mysqli_errno($conexion));
        $num_row= mysqli_num_rows($result);
        if($num_row>0){
            error_log("num filas".$num_row);
            if($result['id']==1){
                 $_SESSION['usuario']=$result['usuario'];
               $_SESSION['nombre']=$result['nombre'];
               $_SESSION['contrasenia']=$result['contrasenia'];
               $_SESSION['id']=$result['id'];
               header("location: administrador.php");
            }
        }else{
             echo '<script type="text/javascript">
        alert("Ocurrio un problema con el usuario, contacte al administrador"'.$user.');
        window.location.href="index.php";
        </script>';
        }
        
      
           
       }else{
           echo '<script type="text/javascript">
        alert("Verifique las credenciales "'.$user.');
        window.location.href="index.php";
        </script>';
       }
*/