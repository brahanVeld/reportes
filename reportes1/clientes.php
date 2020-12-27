<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'usuario.php';
?>
<form>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Cliente</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" >
        </div>
    </div>
   
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Descripción</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" >
        </div>
    </div>
    
    <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
  </div>
</form>
<span class="d-block p-2 bg-dark text-white"></span>
<div class="visible">
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Cliente</th> 
           
            <th scope="col">---</th>
            <th scope="col">---</th> 
        </tr>
    </thead>
     <tbody>
        <?php
        echo '<tr><th scope="row"></th>'
        . '<th scope="row"></th>'
              
                . '<th scope="row"><button type="submit" class="btn btn-primary">Editar</button></th>'
                . '<th scope="row"><button type="submit" class="btn btn-primary">Borrar</button></th></tr>';
        ?>
    </tbody>
</table>
   
</div>