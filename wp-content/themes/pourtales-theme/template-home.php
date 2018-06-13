<?php
/**
  * Template Name: Template home
  */

  get_header();?>



  <!-- //////////////////////////// slider //////////////////////////// -->
      <div class="container container-slider">
        <div class="row justify-content-center">
            <div class="col-12">
              <div class="slider-home">
                <?php
                $slides = get_posts( array(
                    'posts_per_page' => 4, //
                    'post_type' => 'sliderhome', // Type articles
                    'post_status' => 'publish', // statut public uniquement
                    'orderby' => 'post_date', // trier par date
                    'order' => 'ASC' // trier par date décroissante
                ));

                foreach( $slides as $slide) {
                    // contenu à afficher
                    echo '<div class="img-bg-home" style="background:url('.get_the_post_thumbnail_url($slide->ID).'); background-size:cover;width:100%;background-position-x:right;">'; // image.')">';
                        echo '<h2 class="title_slider-home">'.get_field('title_slider-home', $slide->ID).'</h2>'; // Titre slider
                        echo '<p class="subtitle_slider-home">'.get_field('subtitle_slider-home', $slide->ID).'</p>'; // Texte slider
                        echo '<a class="cta-reserver" href="'.get_permalink(12).'" title="">Réserver</a>';
                        echo '<p class="city"><span class="city-name">Strasbourg</span>, France</p>';
                      echo '</div>';
                }
                  ?>
            </div>
            </div>
          </div>
      </div>

      <!-- //////////////////////////// distractions //////////////////////////// -->

      <div class="container container-distractions">
        <div class="row justify-content-center">
           <div class="col-12">
              <div class="title-distractions">
                <img src="<?php echo get_template_directory_uri(); ?>/img/losange.svg" alt="icon losange" class="icon-losange">
                <h3>Distractions<br/><span class="bold">au château</span></h3>
              </div>
            </div>
            <div class="col-12">

              <div class="bloc-flex">
                  <!--seminaire-->
                  <div class="col-md-3 bloc-seminaire">
                    <div class="img-seminaire">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/1-distraction-seminaire.png" alt="séminaires et événéments" class="img-seminaire">
                      <h4>Séminaires<br/><span class="bold">et événements</span></h4>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/losange.svg" alt="icon losange" class="losange-small">
                    </div>
                  </div>
                  <!--parc-->
                  <div class="col-md-4 bloc-parc">
                    <div class="img-parc">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/1-distraction-parc.png" alt="séminaires et événéments" class="img-parc">
                      <h4>Séminaires<br/><span class="bold">et événements</span></h4>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/losange.svg" alt="icon losange" class="losange-small">
                    </div>
                  </div>
                  <!--give-->
                  <div class="col-md-3 bloc-give">
                    <div class="img-give">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/1-distraction-seminaire.png" alt="séminaires et événéments" class="img-give">
                      <h4>Séminaires<br/><span class="bold">et événements</span></h4>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/losange.svg" alt="icon losange" class="losange-small">
                    </div>
                  </div>
              </div>
            </div>
              <p><?php the_field('text_distractions'); ?></p>
            </div>
        </div>

        <!-- //////////////////////////// actu //////////////////////////// -->
            <div class="container container-actu">
              <div class="row justify-content-center">
                <div class="col-12">
                   <div class="title-actu">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/losange.svg" alt="icon losange" class="icon-losange">
                     <h3>Actualités<br/></h3>
                   </div>
                 </div>
                  <div class="col-lg-8 col-10">
                    <div class="slider-actu">
                      <?php
                      $slideactus = get_posts( array(
                          'posts_per_page' => 4, //
                          'post_type' => 'actualites', // Type articles
                          'post_status' => 'publish', // statut public uniquement
                          'orderby' => 'post_date', // trier par date
                          'order' => 'ASC' // trier par date décroissante
                      ));

                      foreach( $slideactus as $slideactu) {
                          // contenu à afficher
                          echo '<div class="flex-bloc">';
                              echo '<img class="img-actu" src="'.get_the_post_thumbnail_url($slideactu->ID).'"/>';
                              echo '<div class="flex-text">';
                                    echo '<p class="date-actu">'.get_field('date_actu', $slideactu->ID).'</p>';
                                    echo '<p class="title-actu">'.get_field('title_actu', $slideactu->ID).'</p>';
                                    echo '<p class="text-actu">'.get_field('text_actu', $slideactu->ID).'</p>';
                              echo '</div>';
                          echo '</div>';
                      }
                        ?>
                  </div>
                  </div>
                </div>
            </div>

            <!-- //////////////////////////// réserver votre séjour //////////////////////////// -->
            <div class="container container-sejour">
              <div class="row justify-content-center">
                 <div class="col-12">
                    <div class="title-sejour">

                      <div class="text-sejour">
                        <h3>Réserver <br class="mobile"/>votre séjour</span></h3>
                        <p>Passez des moments inoubliables</p>
                        <div class="formulaire_reservation">
                          <p class="formulaire-arrive">Arrivée &nbsp;  &nbsp;<input type="date" max="2018-10-25" min="2018-06-13" name="the_date"></p>
                          <p class="formulaire-depart">Départ &nbsp;  &nbsp;<input type="date" max="2018-10-25" min="2018-06-13" name="the_date"></p>
                          <a href="<?php echo get_permalink(14);?>" class="cta-reserver">Réserver</a>
                        </div>
                      </div>

                      <div class="img-sejour">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/1-castle-sejour.png" alt="castle" class="">
                      </div>

                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/losange.svg" alt="icon losange" class="losange-deco">
                </div>
              </div>
            </div>


<?php get_footer();?>
