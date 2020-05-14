<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

//My custom print_r function
function show($arr) {

  echo '<pre>';
  print_r($arr);
  echo '</pre>';

}

// Get page from URI
$page = isset($_GET['page']) ? $_GET['page'] : 'index';
var_dump($page);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Véronique Lamrani"> 
  <title>Blog de Véronique Lamrani</title>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&family=Roboto:wght@300;400;500&family=Calligraffitti&family=Parisienne&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/icons/style.css">
  <link rel="stylesheet" href="assets/css/style.css"> 

</head>

<!-- My HTML page will be divided in 2 parts with flexbox : aside and main -->
<body>
  <div class="box-container">


 <!-- Aside part
 ----------------------------------------------------> 
  <aside  id ="#aside" class="background aside">

    <header class="p-t-1"> 
      <h2>Welcome to My blog</h2>
      <figure class="p-b-2"> 
        <img src="assets/img/Photo-id.jpg" alt="" class="img-head img-circle">
        <figcaption class="figcaption"> 
          Hello, My name is Véronique 
        </figcaption>
      </figure>
    </header>

    <hr> 
    
  
  <!-- Menu with icons 
  -------------------------------->  

    <div class="p-t-1">     
      <ul >
        <li class="li-align">
          <i class="icon-home icon"></i>
          <a href="index.html">Home</a>
        </li>
        <li class="li-align">
          <i class="icon-heart icon"></i>
          <a href="about.html">About me</a>
        </li>
        <li class="li-align">
          <i class="icon-camera icon"></i>
          <a href="posts-list.html">Posts</a>
        </li>           
      </ul>
    </div>  
      
  </aside>


<main class="main p-t-1 p-b-2" >
<header>
    <!--   Date appears only on index page and not in mobile 
  ---------------------------------------------------------->   
    <div class="mob-hidden">
    <span id="date" class="padding-left white"></span> 
    </div>

    <!-- Menu for Mobile
    -------------------------------->
    <h1 class="sidenav-title"> Veronique's Blog</h1>
    <ul class="sidenav">
      <li><a class="active" href="index.html">Home</a></li>
      <li><a href="posts-list.html">Posts</a></li>
      <li><a href="about.html">About</a></li>
    </ul>

    <!-- Fin Menu for Mobile
    -------------------------------->

  <h1>A Little bit more about me...</h1>

</header>

<div class="padding-left padding-right cite-center">
  <cite  >
  <ul > 
    <li id = "citation" >
      Appearance blinds, whereas words reveal 
    </li>
    <span id="author">Oscar Wilde </span> 
    <li>    
     <button id="btn-quote" class="button m-t-2">Another quote?</button>
    </li>
  </ul>
  </cite>
</div>


<footer class="p-t-2 p-b-2 white">
  <p>&copy; Author Véronique Lamrani - 2020 -  All Rights Reserved.</p>
 </footer>

</main>

<!-- Script to display date and list of quotes  
------------------------------------------------>  
<script 
  src="assets/js/scripts.js">
</script>

</body>
</html>
