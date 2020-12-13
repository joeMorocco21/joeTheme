<?php get_header();?>
<?php if (have_posts()): ?>
<ul>
<?php while(have_posts()): the_post(); ?>
<div class="mt-5">
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="col-lg-9 col-md-9 col-sm-9">
    <h2><?php the_title() ?></h2>
</div>
    <div class="col-lg-9 col-md-9 col-sm-9 mt-5 post_image">
    <?php the_post_thumbnail() ?>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 mt-4">
    <?= get_the_date('j F Y') ?> 
    <div class="content">
    <?php the_content() ?>
    </div> 
    </div>   
</div>
</div>
<?php endwhile ?>
</ul>
<?php else: ?>
<h1>Pas d'articles</h1>
<?php endif; ?>
<?php get_footer(); ?>