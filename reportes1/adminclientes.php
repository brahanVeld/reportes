<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'conexion.php';
include 'administrador.php';
session_start();

formulario();

///////función para mostrar el formulario: bien para agregar un nuevo cliente o para editar alguno
function formulario(){
    global $conexion;
    if(!empty($_GET['id'])){
        if(isset($_GET['id'])!=0){
            /***
             * si el id es diferente a cero se muestra el formulario para modificar un cliente ya existente
             */
            $id=$_GET['id'];
            $cliente="SELECT * FROM clientes, usuarios WHERE clientes.idUsuario=usuarios.id and clientes.id=$id";
            $fila= mysqli_query($conexion, $cliente) or die(mysqli_error($conexion));
            if(!empty($fila)){
                if(mysqli_num_rows($fila)>0){
                 
                    
                    while($resultado= mysqli_fetch_array($fila,MYSQLI_BOTH)){
                        $idusuario=$resultado[3];
                        
                         echo '<form action="modificarCliente.php" method="POST">
                             <div class="form-group row">
                             <div class="alert alert-danger" role="alert">
                            Al modificar un cliente se veran afectados todos los reportes relacionados con el cliente.
                        </div>
                             </div>
                 <div class="form-group row">
                 <label class="col-sm-2 col-form-label" name="id">'.$id.'</label>
                 </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Cliente</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="cliente" value="'.$resultado['Descripcion'].'">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Usuario</label>
        <div class="col-sm-10">
            
            <select class="form-select" aria-label="Default select example" name="usuario">
                <option selected>Elija el usuario</option>';
           $query="select * from usuarios";
           $fila= mysqli_query($conexion, $query) or die(mysqli_error($conexion));
           if(!empty($fila)){
               if(mysqli_num_rows($fila)>0){
                   while($resultado= mysqli_fetch_array($fila,MYSQLI_BOTH)){
                       $id1=$resultado['id'];
                       if($id1===$idusuario){
                           echo '<option selected value='.$resultado['id'].'">'.$resultado['nombre'].'</option>';
                       }else{
                       echo '<option value="'.$resultado['id'].'">'.$resultado['nombre'].'</option>';
                       }
                   }
               }else{
                  echo'<option >Sin usuarios</option>'; 
               }
            
           }
                    
           echo' </select>
        </div>
    </div>
   
    
    <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary"><a href="modificarCliente.php?id="'.$id.'>Guardar</a></button>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button class="btn btn-primary"><a href="adminclientes.php?id=0">Cancelar</a></button>
    </div>
  </div>
  
</form>'; 
           
           
                    }
                }
            }
            
            
            
           
       
            
        }else{
            /***
             * si el id es igual a cero se muestra un formulario para agregar clientes
             */
            
             echo '<form action="guardarClientes.php" method="POST">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Cliente</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="cliente">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Usuario</label>
        <div class="col-sm-10">
            
            <select class="form-select" aria-label="Default select example" name="usuario">
                <option selected>Elija el usuario</option>';
           $query="select * from usuarios";
           $fila= mysqli_query($conexion, $query) or die(mysqli_error($conexion));
           if(!empty($fila)){
               if(mysqli_num_rows($fila)>0){
                   while($resultado= mysqli_fetch_array($fila,MYSQLI_BOTH)){
                       echo '<option value="'.$resultado['id'].'">'.$resultado['nombre'].'</option>';
                   }
               }else{
                  echo'<option >Sin usuarios</option>'; 
               }
            
           }
           
                
           echo' </select>
        </div>
    </div>
   
    
    <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
  </div>
</form>'; 
           
        }
    }else{
        echo '<form action="guardarClientes.php" method="POST">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Cliente</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="cliente">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Usuario</label>
        <div class="col-sm-10">
            
            <select class="form-select" aria-label="Default select example" name="usuario">
                <option selected>Elija el usuario</option>';
           $query="select * from usuarios";
           $fila= mysqli_query($conexion, $query) or die(mysqli_error($conexion));
           if(!empty($fila)){
               if(mysqli_num_rows($fila)>0){
                   while($resultado= mysqli_fetch_array($fila,MYSQLI_BOTH)){
                       echo '<option value="'.$resultado['id'].'">'.$resultado['nombre'].'</option>';
                   }
               }else{
                  echo'<option >Sin usuarios</option>'; 
               }
            
           }
           
                
           echo' </select>
        </div>
    </div>
   
    
    <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
  </div>
</form>'; 
    }
}







?>

<span class="d-block p-2 bg-dark text-white"></span>
<div class="visible">
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Cliente</th> 
            <th scope="col">Usuario</th> 
            <th scope="col">---</th>
            <th scope="col">---</th> 
        </tr>
    </thead>
     <tbody>
        <?php
        $query="SELECT * FROM clientes, usuarios WHERE clientes.idUsuario=usuarios.id";
        ///id, Descripcion, idUsuario, <- información de los clientes, id, nombre, usuario, <- información de los usuarios
        $resultado= mysqli_query($conexion, $query)or die(mysqli_error($conexion));
        if(!empty($resultado)){
            if(mysqli_num_rows($resultado)>0){
                while($cliente= mysqli_fetch_array($resultado,MYSQLI_BOTH)){
                    $idn=$cliente[0];
                  echo '<tr><th scope="row">'.$cliente[0].'</th>'
        . '<th scope="row">'.$cliente['Descripcion'].'</th>'
                . '<th scope="row">'.$cliente['nombre'].'--'.$cliente['usuario'].'</th>'
                . '<th scope="row"><button type="submit" class="btn btn-primary"><a href="adminclientes.php?id='.$idn.'">Editar</a></button></th>'
                . '<th scope="row"><button type="submit" class="btn btn-primary"><a href="borrarcliente.php?id='.$idn.'">Borrar</a></button></th></tr>';
                }
            }else{
                echo '<tr><th scope="row"></th>'
        . '<th scope="row"></th>'
                . '<th scope="row"></th>'
                . '<th scope="row"><button type="submit" class="btn btn-primary">Editar</button></th>'
                . '<th scope="row"><button type="submit" class="btn btn-primary">Borrar</button></th></tr>';
            }
            
        }else{
        
        echo '<tr><th scope="row"></th>'
        . '<th scope="row"></th>'
                . '<th scope="row"></th>'
                . '<th scope="row"><button type="submit" class="btn btn-primary">Editar</button></th>'
                . '<th scope="row"><button type="submit" class="btn btn-primary">Borrar</button></th></tr>';
        }
        ?>
    </tbody>
</table>
   
</div>
<?php
        mysqli_close($conexion);
?>