<!Doctype html>
<html>
<head>
<?php wp_head(); ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
          <img src="http://localhost/wordpress/wp-content/uploads/2020/12/iconfinder_sport_badges-06_2064040.png" />
      </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
    <ul class="navbar-nav mr-auto"></ul>
    <?= get_search_form() ?>
  </div>
  </nav>
<div class="container">