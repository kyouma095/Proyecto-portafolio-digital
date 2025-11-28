<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bienvenido</title>
	
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
  

  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Estructuras de Datos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <!-- Dropdown de Ejercicios Java -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ejercicios Java
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="java_basicos.php">Básicos</a></li>
            <li><a class="dropdown-item" href="java_propuestas.php">Propuestos</a></li>
            <li><a class="dropdown-item" href="Java_condicionales_resueltos.php">Condicionales</a></li>
            <li><a class="dropdown-item" href="java_for.php">For</a></li>
            <li><a class="dropdown-item" href="java_while.php">While</a></li>
            <li><a class="dropdown-item" href="java_do_while.php">Do while</a></li>
            <li><a class="dropdown-item" href="java_arreglos.php">Arreglos 1</a></li>
            <li><a class="dropdown-item" href="java_arreglo_2.php">Arreglos 2</a></li>
            <li><a class="dropdown-item" href="java_listas.php">Listas</a></li>


          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ejercicios Javascript
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="javascript_basicos.php">Básicos</a></li>
            <li><a class="dropdown-item" href="javascript_propuestas.php">Propuestos</a></li>
            <li><a class="dropdown-item" href="javascript_condiciones.php">Condicionales</a></li>
            <li><a class="dropdown-item" href="javascript_for.php">For</a></li>
            <li><a class="dropdown-item" href="javascript_while.php">While</a></li>
            <li><a class="dropdown-item" href="javascript_do_while.php">Do while</a></li>
          </ul>
        </li>

        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ejercicios C++
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="ejercicios_c++_basicos.php">Básicos</a></li>
            <li><a class="dropdown-item" href="c++_propuestas.php">Propuestos</a></li>
            <li><a class="dropdown-item" href="c++_condicionales.php">Condicionales</a></li>
             <li><a class="dropdown-item" href="c++_for.php">For</a></li>
             <li><a class="dropdown-item" href="c++_while.php">While</a></li>
             <li><a class="dropdown-item" href="c++_do_while.php">Do while</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>

<header class="encabezado-index">
<h2>Bienvenido al portafolio web de evidencias de Estructuras de Datos</h2>

<h2>4A-Software</h2>

<h2>Universidad Tecnológica de Escuinapa</h2>
 
<h3>Hecho por Pedro Antonio Sanchez Sandoval y Brayan Martin Lopez Flores</h3>
</header>
<br> <br>

<!-- SECCIÓN DE TARJETAS DE LENGUAJES -->
<div class="cards-container">
    
    <!-- Tarjeta Java -->
    <div class="language-card">
        <div class="card-header">
            <div class="card-icon">
                <img src="Img_lenguajes/java-logo-png_seeklogo-158094.png">
            </div>
            <h3 class="card-title">Java</h3>
        </div>
        <p class="card-description">
            Lenguaje orientado a objetos, robusto y multiplataforma. Ampliamente utilizado en aplicaciones empresariales, desarrollo Android y sistemas distribuidos de gran escala.
        </p>
        <ul class="card-features">
            <li>Programación Orientada a Objetos</li>
            <li>Write Once, Run Anywhere (WORA)</li>
            <li>Gestión automática de memoria (Garbage Collector)</li>
            <li>Gran ecosistema de frameworks y librerías</li>
        </ul>
        <div class="card-footer">
            Ideal para aplicaciones empresariales y Android
        </div>
    </div>

    <!-- Tarjeta JavaScript -->
    <div class="language-card">
        <div class="card-header">
            <div class="card-icon">
                <img src="Img_lenguajes/javascript-logo-javascript-icon-transparent-free-png.webp" alt="JavaScript Logo">
            </div>
            <h3 class="card-title">JavaScript</h3>
        </div>
        <p class="card-description">
            Lenguaje de programación interpretado y dinámico, esencial para el desarrollo web moderno. Permite crear interfaces interactivas y aplicaciones full-stack con Node.js.
        </p>
        <ul class="card-features">
            <li>Lenguaje nativo del navegador web</li>
            <li>Programación asíncrona con Promises y Async/Await</li>
            <li>Node.js para desarrollo backend</li>
            <li>Frameworks modernos (React, Vue, Angular)</li>
        </ul>
        <div class="card-footer">
            El lenguaje más popular para desarrollo web
        </div>
    </div>

    <!-- Tarjeta C++ -->
    <div class="language-card">
        <div class="card-header">
            <div class="card-icon">
                <img src="Img_lenguajes/c-logo-png_seeklogo-249774.png" alt="C++ Logo">
            </div>
            <h3 class="card-title">C++</h3>
        </div>
        <p class="card-description">
            Lenguaje de alto rendimiento con control de bajo nivel sobre el hardware. Perfecto para desarrollo de sistemas, videojuegos AAA y aplicaciones que requieren máxima eficiencia.
        </p>
        <ul class="card-features">
            <li>Alto rendimiento y eficiencia computacional</li>
            <li>Control directo de memoria y recursos</li>
            <li>Programación de sistemas operativos</li>
            <li>Desarrollo de videojuegos (Unreal Engine)</li>
        </ul>
        <div class="card-footer">
            Potencia y control para aplicaciones críticas
        </div>
    </div>

</div>
<!-- FIN SECCIÓN DE TARJETAS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
<!--Esto no lo quites por que cuando lo elimino los menu desplegable no funcionan :O-->
<?php include ('Pie_pagina.php'); ?>
</body>
</html>