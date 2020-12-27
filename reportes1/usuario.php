<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'encabezado.php';
?>
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">Menú</h5>
      <span class="text-muted">
          <ul>
              <li class="nav-item active"><a class="nav-link" href="misdatos.php">Mis datos</a></li>
              <li class="nav-item active"><a class="nav-link" href="clientes.php">Clientes</a></li>
              <li class="nav-item active"><a class="nav-link" href="reportes.php">Reportes</a></li>
              <li class="nav-item active">Salir</li>
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

