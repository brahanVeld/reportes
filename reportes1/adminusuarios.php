<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'conexion.php';
include 'administrador.php';
session_start();

//$idUsuario=$_GET['id'];
?>
<?php
/////////muestro el formulario para agregar editar usuarios\\\\\\\
formulario();

function formulario(){
    global $conexion;
    //////valido la variable para mostrar el formiulario correspondiente
    if(!empty($_GET['id'])){
        if(isset($_GET['id'])!=0){
        $query="select * from usuarios where id='".$_GET['id']."'";
        $row= mysqli_query($conexion, $query) or die(mysqli_error($conexion));
        if(!empty($row)){
            if(mysqli_num_rows($row)>0){
                while($resultado= mysqli_fetch_array($row, MYSQLI_BOTH)){
                  echo '<form action="modificarUsuario.php" method="POST">
                      
                    <div class="form-group row">  
            <label class="col-sm-2 col-form-label" name="id">'.$_GET['id'].'</label>
            
            </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nombreCompleto" name="nombreCompleto" value="'.$resultado['nombre'].'">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nombre de usuario</label>
        <div class="col-sm-10">
            <label type="text" class="form-control">'.$resultado['usuario'].'</label>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Contraseña</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="pasw1" name="pasw1" value="'.$resultado['contrasenia'].'">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Confirmar contraseña</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="pasw2" name="pasw2" value="'.$resultado['contrasenia'].'">
        </div>
    </div>
    <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
    <div class="col-sm-10">
      <button class="btn btn-primary"><a href="adminusuarios.php?id=">Cancelar</a></button>
    </div>
  </div>
  
</form>';
                }
            }
        }
        
        }  
    } else {
        ////si la variable esta vacia, solo muestra el formulario
        echo '<form action="guardarUsuario.php" method="POST">
            
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nombreCompleto" name="nombreCompleto">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nombre de usuario</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nomUser" name="nombreUser">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Contraseña</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="pasw1" name="pasw1">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Confirmar contraseña</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="pasw2" name="pasw2">
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
            <th scope="col">Nombre</th> 
            <th scope="col">Nombre de usuario</th> 
            <th scope="col">---</th>
            <th scope="col">---</th> 
        </tr>
    </thead>
     <tbody>
        <?php
        $consulta="select * from usuarios where id>1";
        $resultado= mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
        if(!empty($resultado)){
            if(mysqli_num_rows($resultado)>0){
                while($usuarios= mysqli_fetch_array($resultado,MYSQLI_BOTH)){
                    /**
                     * id -> es el indice de la tabla de usuarios
                     * nombre-> es el nombre 'completo' del usuario, ejemplo Jorge
                     * nombreUser-> es el nombre de usuario con el que se loguean, por ejemplo avd
                     * 
                     */
                    $idn=$usuarios['id'];
                    echo '<tr><th scope="row" name="id">'.$usuarios['id'].'</th>'
                . '<th scope="row" name="nombreU">'.$usuarios['nombre'].'</th>'
                . '<th scope="row" name="nombreUser">'.$usuarios['usuario'].'</th>'
                . '<th scope="row"><button type="button" class="btn btn-outline-success"><a class="nav-link" href="adminusuarios.php?id='.$idn.'" role="button">Editar</a></button></th>'
                . '<th scope="row"><button type="button" class="btn btn-outline-danger"><a class="nav-link" href="borrarUs.php?id='.$idn.'" role="button">Borrar</a></button></th></tr>';
                }
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

<!--termina sección de usuarios---->


<?php
//include 'pie.php';
?>