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
        <label class="col-sm-2 col-form-label">Persona(s) atendidas</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" >
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Fecha</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" >
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Duración</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" >
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Descripción</label>
        <div class="col-sm-10">
            <textarea type="text" class="form-control" ></textarea>
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
            
            <th scope="col">fecha</th>
            <th scope="col">Duración</th> 
            <th scope="col">Personas</th> 
            <th scope="col">Descripción</th>
            <th scope="col">Estado</th>
            <th scope="col">Procesar</th> 
        </tr>
    </thead>
     <tbody>
        <?php
        echo '<tr><th scope="row"></th>'
        . '<th scope="row"></th>'
               
                . '<th scope="row"></th>'
                . '<th scope="row"></th>'
                . '<th scope="row"></th>'
                . '<th scope="row"></th>'
                . '<th scope="row"></th>'
                . '<th scope="row"><button type="submit" class="btn btn-primary">Procesar</button></th></tr>';
        ?>
    </tbody>
</table>
   
</div>
