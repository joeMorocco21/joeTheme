<?php
/**
* Template Name: joeTemplateAccueil
 */
?>
<?php get_header() ?>
<div class="col-lg-12 col-md-12 col-sm-12 fluid mt-5">
    <hr class="hr1">
    <h3 class="title1 mt-2">Bienvenue sur Sports Klub</h3>
    <p class="p1">Le Professionnelle de la presse sportive France</p>
    <div class="row mt-5">
        <div class="col-lg-4 col-md-4 col-sm-12 ptxs">
            <div class="col-lg-12 col-md-12 col-sm-12 ptx">
                <?php the_field('image1') ?>
                <h5 class="mt-4"><?php the_field('title1') ?></h5>
                <a href="">
                    <div class="btn_plus">EN SAVOIRE PLUS <i class='fas fa-arrow-right'></i></div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12  ptxs">
            <div class="col-lg-12 col-md-12 col-sm-12 ptx">
                <?php the_field('image2') ?>
                <h5 class="mt-4"><?php the_field('title2') ?></h5>
                <a href="">
                    <div class="btn_plus">EN SAVOIRE PLUS <i class='fas fa-arrow-right'></i></div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 ptxs">
            <div class="col-lg-12 col-md-12 col-sm-12 ptx">
                <?php the_field('image3') ?>
                <h5 class="mt-4"><?php the_field('title3') ?></h5>
                <a href="">
                    <div class="btn_plus">EN SAVOIRE PLUS <i class='fas fa-arrow-right'></i></div>
                </a>
            </div>
        </div>
    </div>
    <div class="">
        <div class="row">
            <div class="col-lg-6 col-md-6 mgx">
                <div class="register">
                    <p class="mt-3"><?php the_field('p1') ?></p>
                    <h3><?php the_field('title4') ?></h3>
                    <a href="">
                        <div class="btn_register">S'ENREGISTRER <i class='fas fa-arrow-right'></i></div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mgx">
                <div class="connect">
                    <p class="mt-3"><?php the_field('p2') ?></p>
                    <h3><?php the_field('title5') ?></h3>
                    <a href="">
                        <div class="btn_connect">SE CONNECTER <i class='fas fa-arrow-right'></i></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 information_section mt-5">
    <hr class="hr1">
    <h3 class="title2">Vidéo</h3>
    <p>Découvrez les dernier vidéos sportives</p>
    <div class="vid1 mt-5">
        <?php the_field('video1') ?>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 mt-5 apropos_section">
    <hr class="hr1">
    <h3 class="title2">A propos de Sports Klub</h3>
    <p>Qui sommes-nous ?</p>
    <div class="row mt-5">
        <div class="col-lg-6 col-md-6 ntx">
            <p><?php the_field('video2') ?></p>
        </div>
        <div class="col-lg-6 col-md-6 ntx">
            <div class="row">
                <h3><?php the_field('title6') ?></h3>
                <p><?php the_field('p3') ?></p>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <a href="">
                        <div class="btn_plus">EN SAVOIRE PLUS <i class='fas fa-arrow-right'></i></div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <a href="">
                        <div class="btn_f">FONCTIONNEMENT <i class='fas fa-arrow-right'></i></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 mt-5 slide_section">
<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
    <?php 
$image = get_field('images_slide_1');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
    </div>
    <div class="carousel-item">
    <?php 
$image = get_field('images_slide_2');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
    </div>
    <div class="carousel-item">
    <?php 
$image = get_field('images_slide_3');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 mt-5 contact_section">
    <div class="row">
<div class="col-lg-4 col-md-4 col-sm-12 pts">
<?php 
$image = get_field('logo_menu');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
</div>
<div class="col-lg-3 col-md-3 col-sm-12 pts">
    <div>
    <a href="">ACCUEIL</a>
    </div>
    <div>
    <a href="#">NOUS CONTACTER</a>
    </div>
</div>
<div class="col-lg-5 col-md-5 col-sm-12 ptsV">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 ptsC">
<h5>Bureau Permanent</h5>
<p>Du Lundi au Vendredi</p>
<p>– de 9h00 à 12h00</p>
<p>– de 14h00 à 18h00</p>
<p>01.42.97.59.05</p>
<a href="#">secretariat@mag3.org</a>
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
<div class="btn_plus">CONTACTER-NOUS <i class='fas fa-arrow-right'></i></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php get_footer() ?>