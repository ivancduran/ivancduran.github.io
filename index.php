<?php header('Content-Type: text/html; charset=UTF-8'); ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kraken Framework 0.4</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="css/kraken.css">

	<script lang="javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="js/responsiveslides.min.js"></script>
  <script src="js/jquery.scrollTo-1.4.3.1.js"></script>
  <script src="js/kraken.js"></script>


  <!--[if lt IE 9]>
  <script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <meta property="og:description" content="Framework basado en html5 para diseñar prototipos funcionales fácil y rápido. El propósito principal es que el usuario final no requiera conocimientos avanzados de jQuery o CSS. Con la integración de elementos pre diseñados. Tan simple como sea posible." /> 
</head>

<body>

<!-- MENU -->
<div id='menu'>
  <nav class="nav left">
    <ul>
      <li class="current"><a href="#">Grids</a></li>
      <li><a href="#">Slider</a></li>
      <li><a href="#">Menu</a></li>
      <li><a href="#">Fonts</a></li>
      <li><a href="#">Shadows</a></li>
      <li><a href="#">Botones</a></li>
    </ul>
  </nav>
</div>

<!--WRAP-->
<div class="wrap">

	<!--GRIDS-->
	<div class="grids">

<div class="grid-12 mL">
  <div class="grid-10">
    <h1 title="¿Que es Kraken?">
      ¿Que es Kraken?
    </h1>
  </div>
<img src="img/kraken.png" class="krakenLogo grid-4" rel="image_src" width="250" alt="">
  <div class="grid-8 box">
    <p>
      <div class="toptext">
        Framework basado en html5 para diseñar prototipos funcionales fácil y rápido.
      </div>
      <div class="midtext">
      El propósito principal es que el usuario final no requiera conocimientos avanzados de jQuery o CSS.
      Con la integración de elementos pre diseñados.
      </div>
    </p>
    <a href="https://github.com/ivancduran/kraken"><img src="img/github.png" class="center" width="100"></a>
  </div>

</div>

<div class="span" value="3.5"></div>

      <div class="bottext grid-12">
        <h2>
            <center>Tan simple como sea posible.</center>
        </h2>
      </div>

<hr>
<div class="grid-11 mL">

  <div class="grid-12">
    <h4>Grids:</h4>
    <p>
      Basado en un sistema de grids de 12 columnas usted puede modificar cualquier cosa sin temor a romper algo.
    </p>
  </div>
</div>


<!-- GRIDS EXAMPLE -->
<div class="grid-12 bgGray">Grid 12</div>

<div class="grid-11 bgGray">Grid 11</div>
<div class="grid-1 bgGray">Grid 1</div>

<div class="grid-10 bgGray">Grid 10</div>
<div class="grid-2 bgGray">Grid 2</div>

<div class="grid-9 bgGray">Grid 9</div>
<div class="grid-3 bgGray">Grid 3</div>

<div class="grid-8 bgGray">Grid 8</div>
<div class="grid-4 bgGray">Grid 4</div>

<div class="grid-7 bgGray">Grid 7</div>
<div class="grid-5 bgGray">Grid 5</div>

<div class="grid-6 bgGray">Grid 6</div>
<div class="grid-6 bgGray">Grid 6</div>

<div class="grid-5 bgGray">Grid 5</div>
<div class="grid-7 bgGray">Grid 7</div>

<div class="grid-4 bgGray">Grid 4</div>
<div class="grid-8 bgGray">Grid 8</div>

<div class="grid-3 bgGray">Grid 3</div>
<div class="grid-9 bgGray">Grid 9</div>

<div class="grid-2 bgGray">Grid 2</div>
<div class="grid-10 bgGray">Grid 10</div>

<div class="grid-1 bgGray">Grid 1</div>
<div class="grid-11 bgGray">Grid 11</div>

<div class="grid-12 bgGray">Grid 12</div>



<div class="span" value="4.5"></div>
<hr>

<!-- SLIDERS -->
<div class="grid-12 mL">
  <div class="grid-12">
    <h4>Slider:</h4>
    <p>
      Kraken cuenta con un slider completamente responsivo y configurable.
    </p>
  </div>
</div>

	<div class="slider">
    <div class="callbacks_container">
      <ul class="rslides" id="slider">
        <li>
          <img src="img/1.jpg" alt="">
          <p class="caption">Hola!</p>
        </li>
        <li>
          <img src="img/2.jpg" alt="">
          <p class="caption">Soy un Slider!</p>
        </li>
        <li>
          <img src="img/3.jpg" alt="">
          <p class="caption">Whoaaa!</p>
        </li>
      </ul>
    </div>
	</div>



<div class="span" value="4.5"></div>
<hr>

<div class="grid-11 mL">
  <div class="grid-12">
    <h4>Menu:</h4>
    <p>
      Menú responsivo y configurable. Se adapta a los automáticamente a los colores de tu diseño.
    </p>
  </div>
</div>


<div id='menu' color="333333" class="">
  <nav class="nav left">
    <ul>
      <li class="current"><a href="#">Acerca</a></li>
      <li><a href="#">Demos</a></li>
      <li><a href="#">Productos</a></li>
      <li><a href="#">Servicios</a></li>
      <li><a href="#">Contacto</a></li>
    </ul>
  </nav>
</div>


<div class="span" value="4.5"></div>
<hr>

<div class="grid-12 mL">
  <div class="grid-12">
    <h4>Fonts:</h4>
    <p>
      Todos tus textos de adapran automáticamente a tu pantalla, no tienes que programar nada, solo preocupate por escribir.
    </p>
    <div class="midText box">Helvetica, Arial, GentiumBookBasic, Lato,  OpenSans, Satellite, Ubuntu fonts.</div>
  </div>
</div>

<div class="grid-12">

  <h1>Titulo de prueba</h1>

  <h2>Subtitulo de prueba</h2>

  <h3>Texto</h3>

  <h4>Texto</h4>

  <p class="box">box</p>

<div class="span" value="2.5"></div>

  <p class="box inset">box inset</p>


<div class="span" value="2.5"></div>


  <input type="text" value="Input">
  <div class="span" value="2.5"></div>

  <textarea name="test" id="" cols="50" rows="4" class="grid-10">Text Area</textarea>
</div>

<div class="span" value="3.5"></div>
  <hr>
  <p>
  <h3 class="grid-12 mL">Shadow</h3>
  </p>

    <img src="img/1.jpg" class="shadow grid-4" alt="">

    <img src="img/2.jpg" class="shadow circle grid-4" alt="">

    <img src="img/1.jpg" class="shadow grid-4" alt="">

<div class="span" value="3.5"></div>
<hr>

<p>
<h3>Botones</h3>
</p>
<div class="span" value="3.5"></div>

<p class="mL">Botones simples:</p>

<div class="grid-2">
  <a href="#" class="button">Post comment</a>
</div>
<div class="grid-2">
  <a href="#" class="button primary">Publish post</a> 
</div>
<div class="grid-2">
  <a href="#" class="button">Save as draft</a>
</div>
<div class="grid-2">
  <a href="#" class="button pill">This is a pill button</a>
</div>
<div class="grid-2">
  <a href="#" class="button danger">Delete post</a>
</div>
<div class="grid-2">
  <a href="#" class="button big">Create Project</a>
</div>

<div class="span" value="3.5"></div>

<p class="mL">Grupo:</p>

<div class="grid-4">
  <div class="button-group">
    <a href="#" class="button primary">Dashboard</a>
    <a href="#" class="button">Inbox</a>
    <a href="#" class="button">Account</a>
    <a href="#" class="button">Logout</a>
  </div>
</div>

<div class="grid-4">
  <ul class="button-group">
      <li><a href="#" class="button primary pill">Dashboard</a></li>
      <li><a href="#" class="button pill">Inbox</a></li>
      <li><a href="#" class="button pill">Account</a></li>
      <li><a href="#" class="button pill">Logout</a></li>
  </ul>
</div>

<div class="grid-4">
  <div class="button-group minor-group">
    <a href="#" class="button primary">Dashboard</a>
    <a href="#" class="button">Inbox</a>
    <a href="#" class="button">Account</a>
    <a href="#" class="button">Logout</a>
  </div>
</div>

<div class="span" value="3.5"></div>


<!--END GRIDS-->
  </div>

<!--END WRAP-->
</div>

</body>
</html>