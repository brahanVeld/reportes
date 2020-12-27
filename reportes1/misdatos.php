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
        <label class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="nombre">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Usuario</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="usuario">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Contraseña</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name="pasword">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Repetir Contraseña</label>
        <div class="col-sm-10">
            <input type="password" class="form-control"name="pasw1" >
        </div>
    </div>
    
    <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
  </div>
    <div class="alert alert-warning" role="alert">
  ¡La información se actualizará!
</div>
</form>

