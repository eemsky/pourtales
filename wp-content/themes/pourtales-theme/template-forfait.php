<?php
/**
  * Template Name: Template forfait
  */

  get_header();?>

  <!-- //////////////////////////// slider //////////////////////////// -->
      <div class="container container-slider-forfait">
        <div class="row justify-content-center">
            <div class="col-12">
              <div class="slider-forfait">
                <?php
                $slideforfait = get_posts( array(
                    'posts_per_page' => 4, //
                    'post_type' => 'sliderforfait', // Type articles
                    'post_status' => 'publish', // statut public uniquement
                    'orderby' => 'post_date', // trier par date
                    'order' => 'ASC' // trier par date décroissante
                ));

                foreach( $slideforfait as $slideforfaits) {
                    // contenu à afficher
                    echo '<div class="img-bg-forfait" style="background:url('.get_the_post_thumbnail_url($slideforfaits->ID).'); background-size:cover;width:100%;background-position-x:right;">'; // image.')">';
                        echo '<h2 class="title_slider-forfait wow fadeInRight">'.get_field('title_slider-forfait', $slideforfaits->ID).'</h2>'; // Titre slider
                        echo '<p class="subtitle_slider-forfait wow fadeInRight">'.get_field('subtitle_slider-forfait', $slideforfaits->ID).'</p>'; // Texte slider
                        echo '<a class="cta-reserver wow fadeInRight" href="'.get_permalink(105).'" title="">Réserver</a>';

                        echo '<p class="city wow fadeInRight"><span class="city-name">Strasbourg</span>, France</p>';
                      echo '</div>';
                }
                  ?>
            </div>
            </div>
          </div>
      </div>

      <!-- //////////////////////////// Favoris //////////////////////////// -->
          <div class="container container-historique">
            <div class="row justify-content-center">
              <!--Title-->
              <div class="col-12">
                 <div class="title-historique">
                   <img src="<?php echo get_template_directory_uri(); ?>/img/losange.svg" alt="icon losange" class="icon-losange wow bounceInUp">
                   <h3>Nos favoris<br/><span class="bold">du moment</span></h3>
                 </div>
               </div>
               <!--Forfaits favoris-->
               <div class="col-12 justify-content-center favoris">
                 <!--Mariage-->
                 <a href="<?php echo get_permalink(105);?>">
                   <div class="forfait-mariage">
                     <h4>Forfait<br/><span class="bold">Mariage</span></h4>
                     <img src="<?php echo get_template_directory_uri(); ?>/img/losange.svg" alt="icon losange" class="losange-small wow bounceInUp">
                   </div>
                </a>
                 <div class="content-forfaits">
                   <!--Wellness-->
                   <a href="">
                     <div class="forfait-wellness">
                       <h4>Forfait<br/><span class="bold">Wellness</span></h4>
                       <img src="<?php echo get_template_directory_uri(); ?>/img/losange.svg" alt="icon losange" class="losange-small wow bounceInUp">
                     </div>
                   </a>
                   <!--Gourmet-->
                   <a href="">
                     <div class="forfait-gourmet">
                       <h4>Forfait<br/><span class="bold"> Gourmet</span></h4>
                       <img src="<?php echo get_template_directory_uri(); ?>/img/losange.svg" alt="icon losange" class="losange-small wow bounceInUp">
                     </div>
                   </a>
                   <!---->
                 </div>
               </div>
         </div>
       </div>
       <!-- //////////////////////////// À découvrir aussi //////////////////////////// -->
           <div class="container container-decouvrir">
             <div class="row justify-content-center">
               <!--Title-->
               <div class="col-12">
                  <div class="title-decouvrir">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/losange.svg" alt="icon losange" class="losange-small wow bounceInUp">
                    <h3>À découvrir aussi...</span></h3>
                  </div>
                </div>
                <!--Forfaits-->
                <div class="col-12 bloc-forfaits">
                  <!--Oldtimer-->
                  <div class="content-forfait">
                    <a href="">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/forfait-oldtimer.png" alt="icon losange" class="img-forfait">
                      <h4>Forfait<br/><span class="bold"> Oldtimer</span></h4>
                      <div class="center-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/losange.svg" alt="icon losange" class="losange-small wow bounceInUp">
                    </a>
                    </div>
                  </div>
                  <!--Romantique-->
                  <div class="content-forfait">
                    <a href="">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/forfait-romantique.png" alt="icon losange" class="img-forfait">
                      <h4>Forfait<br/><span class="bold"> Romantique</span></h4>
                      <div class="center-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/losange.svg" alt="icon losange" class="losange-small wow bounceInUp">
                      </div>
                    </a>
                  </div>
                  <!--Golf-->
                  <div class="content-forfait">
                    <a href="">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/forfait-golf.png" alt="icon losange" class="img-forfait">
                      <h4>Forfait<br/><span class="bold"> Golf</span></h4>
                      <div class="center-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/losange.svg" alt="icon losange" class="losange-small wow bounceInUp">
                      </div>
                    </a>
                  </div>
                  <!--Bon cadeau-->
                  <div class="content-forfait">
                    <a href="">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/forfait-cadeau.png" alt="icon losange" class="img-forfait">
                      <h4>Bon<br/><span class="bold"> Cadeau</span></h4>
                      <div class="center-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/losange.svg" alt="icon losange" class="losange-small wow bounceInUp">
                      </div>
                    </a>
                  </div>
                </div>
                <!-- Bouton -->
                <div class="col-12 btn-contact">
                  <a href="<?php echo get_permalink(14);?>" class="cta-reserver">Des questions? <span class="bold">Contactez-nous</span></a>
                </div>
          </div>
        </div>


  <?php get_footer();?>
