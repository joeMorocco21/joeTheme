<?php get_header();?>
<div class="col-lg-12 col-md-12 col-sm-12 main">
<h2 class="mt-5">______Actualités______</h2>
<p>Toutes les informations des sports Française</p>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 mt-5">
<?php if (have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
<div class="row mt-5">
<div class="col-lg-1 col-md-1 col-sm-1"></div>
<div class="col-lg-5 col-md-5 col-sm-5 art colm">
<?php the_post_thumbnail() ?>
<div class="overlay">
    <div class="text"><a href="<?php the_permalink() ?>">Lire la suite</a></div>
  </div>
</div>
<div class="col-lg-5 col-md-5 col-sm-5 art">
<h3><?php the_title() ?></h3>
<p><?php the_excerpt() ?></p>
<a href="<?php the_permalink() ?>"><button class="btn btn-primary">Lire la suite</button></a>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 mt-5"></div>

</div>
<?php endwhile ?>
<?php else: ?>
<h1>Pas d'articles</h1>
<?php endif; ?>
<div class="row mt-5">
<div class="col-lg-1 col-md-1 col-sm-1"></div>
<div class="col-lg-11 col-md-11 col-sm-11">
<?php joeTheme_pagination(); ?>
</div>
</div>
</div>
<?php get_footer(); ?>