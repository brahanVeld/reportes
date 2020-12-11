<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//include 'conexion.php';
include 'encabezado.php';
?>
<div>
    
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
            </button>
            
        </div>
        <div class="navbar-collapse collapse">
        
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Usuarios</a></li>
                <li><a href="#">Clientes</a></li>
                <li><a href="#">Reportes</a></li>
            </ul>
        </div>
    </nav>
</div>
<div>
    <!----sección para mostrar los usuarios y agregarlos---->
    <section>
        <form>
            <div>
                <label>Nombre</label>
                <input type="text" class="login-username" placeholder="Nombre"/>
            </div>
            <div>
                <label>Nombre de usuario</label>
                <input type="text" class="login-username" placeholder="Nombre de usuario"/>
            </div>
            <div>
                <label>Contraseña</label>
                <input type="password" class="login-password" />
            </div>
            <div>
                <label>Repetir contraseña</label>
                <input type="password" class="login-password" />
            </div>
            
        </form>
        
    </section>
</div>



<?php
include 'pie.php';
?>