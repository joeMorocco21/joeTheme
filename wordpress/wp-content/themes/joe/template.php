<?php
/**
* Template Name: joeTemplate
 */
?>
<?php get_header() ?>
<h1><?php the_field('title'); ?></h1>
<div class="col-lg-12 col-md-12 col-sm-12">
<?php the_field('map'); ?>
</div>
<div class="mt-5">
<?php the_content() ?>
</div>
<?php
get_footer()
?>
