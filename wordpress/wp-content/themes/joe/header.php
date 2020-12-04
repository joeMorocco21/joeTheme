<!Doctype html>
<html>
<head>
<?php wp_head(); ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <?php $parameterMenu = array(
      'container'=> false,
      'menu_class'=> 'nav-link active',
      'items_wrap'=> '%3$s',
      'echo' => false,
      'depth' => 0,
    ); 
    echo strip_tags(wp_nav_menu($parameterMenu), '<a>');  
      ?>
    </div>
  </div>
</nav>
<div class="container">