<?php header('Content-Type: text/html; charset=UTF-8'); ?>

<!doctype html>
<html lang="en" img="004" color="0fa1e0">
<head>
	<meta charset="UTF-8">
	<title>Kraken Framework 0.1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="css/kraken.css">

	<script lang="javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="js/responsiveslides.min.js"></script>
  <script src="js/jquery.scrollTo-1.4.3.1.js"></script>
  <script src="js/kraken.js"></script>
</head>

<body>

<!-- MENU -->
<div id='menu' class="fixed">
<ul>
   <li><a href='#'><span>Home</span></a></li>
   <li class='has-sub '><a href='#'><span>Products</span></a>
      <ul>
         <li class='has-sub '><a href='#'><span>Product 1</span></a>
            <ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li><a href='#'><span>Sub Product</span></a></li>
            </ul>
         </li>
         <li class='has-sub '><a href='#'><span>Product 2</span></a>
            <ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li><a href='#'><span>Sub Product</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href='#'><span>About</span></a></li>
   <li><a href='#'><span>Contact</span></a></li>
</ul>
</div>

<!--WRAP-->
<div class="wrap" shadow="on">

	<!--GRIDS-->
	<div class="grids">


<div class="grid-12 mL">

  <div class="grid-10">
    <h1 title="¿Que es Kraken?">
      ¿Que es Kraken?
    </h1>
  </div>
<img src="img/kraken.png" class="krakenLogo grid-4" data-fallback="img/kraken.png" width="250" alt="">
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
  </div>

</div>

<div class="span" value="3.5"></div>

      <div class="bottext grid-12">
        <h2>
            <center>Tan simple como sea posible.</center>
        </h2>
      </div>


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
          <p class="caption">This is a caption</p>
        </li>
        <li>
          <img src="img/2.jpg" alt="">
          <p class="caption">This is another caption</p>
        </li>
        <li>
          <img src="img/3.jpg" alt="">
          <p class="caption">The third caption</p>
        </li>
      </ul>
    </div>
	</div>



<div class="span" value="4.5"></div>

<div class="grid-11 mL">

  <div class="grid-12">
    <h4>Menu:</h4>
    <p>
      Menú responsivo y configurable. Se adapta a los automáticamente a los colores de tu diseño.
    </p>
  </div>
</div>


<div id='menu'  class="grid-12">
<ul>
   <li><a href='#'><span>Home</span></a></li>
   <li class='has-sub '><a href='#'><span>Products</span></a>
      <ul>
         <li class='has-sub '><a href='#'><span>Product 1</span></a>
            <ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li><a href='#'><span>Sub Product</span></a></li>
            </ul>
         </li>
         <li class='has-sub '><a href='#'><span>Product 2</span></a>
            <ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li><a href='#'><span>Sub Product</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href='#'><span>About</span></a></li>
   <li><a href='#'><span>Contact</span></a></li>
</ul>
</div>  

<div class="span" value="4.5"></div>

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

  <p class="box">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<div class="span" value="2.5"></div>


  <input type="text" value="Input">
  <div class="span" value="2.5"></div>

  <textarea name="test" id="" cols="30" rows="5" class="grid-10">Text Area</textarea>
</div>

<div class="span" value="3.5"></div>
  <img src="img/1.jpg" class="shadow grid-12" alt="">
<div class="span" value="8"></div>


<div class="grid-12">
  <img src="img/1.jpg" class="shadow grid-12" alt="">
  <div class="span" value="2"></div>

  <img src="img/2.jpg" class="shadow circle" alt="">
  <div class="span" value="2"></div>

  <img src="img/1.jpg" class="shadow grid-12" alt="">
  <img src="img/2.jpg" class="shadow grid-3" alt="">
  <img src="img/3.jpg" class="shadow grid-3" alt="">
  <img src="img/1.jpg" class="shadow grid-3" alt="">
  <img src="img/2.jpg" class="shadow grid-3" alt="">
  <img src="img/3.jpg" class="shadow grid-3" alt="">
  <img src="img/1.jpg" class="shadow grid-3" alt="">
  <img src="img/2.jpg" class="shadow grid-3" alt="">
</div>

<div class="span" value="8"></div>


<a href="#" class="button">Post comment</a>


<a href="#" class="button primary">Publish post</a> 
<a href="#" class="button">Save as draft</a>

<a href="#" class="button pill">This is a pill button</a>

<a href="#" class="button danger">Delete post</a>

<a href="#" class="button big">Create Project</a>

<div class="button-group">
    <a href="#" class="button primary">Dashboard</a>
    <a href="#" class="button">Inbox</a>
    <a href="#" class="button">Account</a>
    <a href="#" class="button">Logout</a>
</div>

<ul class="button-group">
    <li><a href="#" class="button primary pill">Dashboard</a></li>
    <li><a href="#" class="button pill">Inbox</a></li>
    <li><a href="#" class="button pill">Account</a></li>
    <li><a href="#" class="button pill">Logout</a></li>
</ul>

<div class="button-group minor-group">
    <a href="#" class="button primary">Dashboard</a>
    <a href="#" class="button">Inbox</a>
    <a href="#" class="button">Account</a>
    <a href="#" class="button">Logout</a>
</div>

<!--END GRIDS-->
  </div>

<!--END WRAP-->
</div>

</body>
</html>