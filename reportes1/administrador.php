<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//include 'conexion.php';
include 'encabezado.php';
session_start();
?>
<!--div class="container">
    
    <nav class="navbar navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarNav">
        
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="#">Usuarios</a></li>
                <li class="nav-item active"><a class="nav-link" href="#">Clientes</a></li>
                <li class="nav-item active"><a class="nav-link" href="#">Reportes</a></li>
            </ul>
        </div>
    </nav>
</div-->


<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">Menú administrador (a)</h5>
      <h4 class="text-white h4"><?php echo "".$_SESSION['nombre'];?></h4>
      <span class="text-muted">
          <ul>
              <li class="nav-item active"><a class="nav-link" href="adminusuarios.php?id=0">Usuarios</a></li>
              <li class="nav-item active"><a class="nav-link" href="adminclientes.php?id=0">Clientes</a></li>
              <li class="nav-item active"><a class="nav-link" href="adminreportes.php?id=0">Reportes</a></li>
              <li class="nav-item active"><a href="cerrarsesion.php">Salir</a></li>
          </ul>
      </span>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>
