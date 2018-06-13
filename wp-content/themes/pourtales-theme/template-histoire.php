<?php
/**
  * Template Name: Template histoire
  */

  get_header();?>

  <!-- //////////////////////////// slider //////////////////////////// -->
      <div class="container container-slider-histoire">
        <div class="row justify-content-center">
            <div class="col-12">
              <div class="slider-histoire">
                <?php
                $slidehistoire = get_posts( array(
                    'posts_per_page' => 4, //
                    'post_type' => 'sliderhistoire', // Type articles
                    'post_status' => 'publish', // statut public uniquement
                    'orderby' => 'post_date', // trier par date
                    'order' => 'ASC' // trier par date décroissante
                ));

                foreach( $slidehistoire as $slidehistoires) {
                    // contenu à afficher
                    echo '<div class="img-bg-histoire" style="background:url('.get_the_post_thumbnail_url($slidehistoires->ID).'); background-size:cover;width:100%;background-position-x:right;">'; // image.')">';
                        echo '<h2 class="title_slider-histoire">'.get_field('title_slider-histoire', $slidehistoires->ID).'</h2>'; // Titre slider
                        echo '<p class="subtitle_slider-histoire">'.get_field('subtitle_slider-histoire', $slidehistoires->ID).'</p>'; // Texte slider
                        echo '<a class="cta-reserver" href="'.get_permalink(14).'" title="">Réserver</a>';
                        echo '<p class="city"><span class="city-name">Strasbourg</span>, France</p>';
                      echo '</div>';
                }
                  ?>
            </div>
            </div>
          </div>
      </div>



      <!-- //////////////////////////// slider //////////////////////////// -->
          <div class="container container-historique">
            <div class="row justify-content-center">

              <div class="col-12">
                 <div class="title-historique">
                   <img src="<?php echo get_template_directory_uri(); ?>/img/losange.svg" alt="icon losange" class="icon-losange">
                   <h3>Historique<br/><span class="bold">à savoir</span></h3>
                 </div>
               </div>
              <!--historique-->
              <div class="col-12">
                  <div class="historique">
                    <img src="<?php echo the_post_thumbnail_url()?>"/>
                    <p class="text-historique"><?php the_field('champ_de_texte')?></p> <!-- Titre -->
                  </div>
              </div>
              <!--château de pourtalès-->
              <div class="col-12 content-points">
                <img src="<?php echo get_template_directory_uri(); ?>/img/losange.svg" alt="icon losange" class="deco-losange">
                <div>
                  <h4 class="title-points"><?php the_field('1_point-titre')?></h4> <!-- Titre -->
                  <p class="text-points"><?php the_field('1_point-text')?></p> <!-- Titre -->
                </div>
              </div>
              <!--valeurs-->
              <div class="col-12 content-points">
                <img src="<?php echo get_template_directory_uri(); ?>/img/losange.svg" alt="icon losange" class="deco-losange">
                <div>
                  <h4 class="title-points"><?php the_field('2_point-titre')?></h4> <!-- Titre -->
                  <p class="text-points"><?php the_field('2_point-text')?></p> <!-- Titre -->
                </div>
              </div>
              <!--missions-->
              <div class="col-12 content-points">
                <img src="<?php echo get_template_directory_uri(); ?>/img/losange.svg" alt="icon losange" class="deco-losange">
                <div class="col-12">
                  <h4 class="title-points"><?php the_field('3_point-titre')?></h4> <!-- Titre -->
                  <!--slider missions-->
                  <div class="slider-missions">
                    <div>
                      <h5><?php the_field('3_a-point-title-mission')?></h5>
                      <p class="text-points"><?php the_field('3_a-point-text')?></p> <!-- Titre -->
                    </div>
                    <div>
                      <h5><?php the_field('3_c-point-title-mission')?></h5>
                      <p class="text-points"><?php the_field('3_c-point-text')?></p> <!-- Titre -->
                    </div>

                  </div>

                </div>
              </div>
            </div>
          </div>


  <?php get_footer();?>
