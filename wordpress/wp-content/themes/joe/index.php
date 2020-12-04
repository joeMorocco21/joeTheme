
<?php get_header();?>

<?php if (have_posts()): ?>
<ul>
<?php while(have_posts()): the_post(); ?>
<div class="row mt-5">
<div class="col-lg-6 col-md-6 col-sm-6">
<?php the_post_thumbnail() ?>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
<h3><?php the_title() ?></h3>
<p><?php the_excerpt() ?></p>
<a href="<?php the_permalink() ?>"><button class="btn btn-primary">Lire la suite</button></a>
</div>
</div>
<?php endwhile ?>
</ul>
<?php else: ?>
<h1>Pas d'articles</h1>
<?php endif; ?>
<?php get_footer(); ?>
 