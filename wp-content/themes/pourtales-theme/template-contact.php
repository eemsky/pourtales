<?php
/**
  * Template Name: Template contact
  */

  get_header();?>

  <!-- //////////////////////////// Slider //////////////////////////// -->
      <div class="container container-slider-contact">
        <div class="row justify-content-center">
            <div class="col-12">
              <div class="slider-contact">
                <?php
                $slidecontact = get_posts( array(
                    'posts_per_page' => 2, //
                    'post_type' => 'slidercontact', // Type articles
                    'post_status' => 'publish', // statut public uniquement
                    'orderby' => 'post_date', // trier par date
                    'order' => 'ASC' // trier par date décroissante
                ));

                foreach( $slidecontact as $slidecontacts) {
                    // contenu à afficher
                    echo '<div class="img-bg-contact" style="background:url('.get_the_post_thumbnail_url($slidecontacts->ID).'); background-size:cover;width:100%;background-position-x:right;">'; // image.')">';
                        echo '<h2 class="title_slider-contact">'.get_field('title_slider-contact', $slidecontacts->ID).'</h2>'; // Titre slider
                        echo '<p class="subtitle_slider-contact">'.get_field('subtitle_slider-contact', $slidecontacts->ID).'</p>'; // Texte slider
                        echo '<a class="cta-reserver" href="#formulairecontact" title="">Remplissez le formulaire</a>';
                        echo '<p class="city"><span class="city-name">Une question ?</span> Nous sommes là pour y répondre</p>';
                      echo '</div>';
                }
                  ?>
            </div>
            </div>
          </div>
      </div>

      <!-- //////////////////////////// Contactez-nous //////////////////////////// -->
          <div class="container container-historique">
            <div class="row justify-content-center">
              <!--Title-->
              <div class="col-12">
                 <div id="formulairecontact" class="title-historique">
                   <img src="<?php echo get_template_directory_uri(); ?>/img/losange.svg" alt="icon losange" class="icon-losange">
                   <h3>Contactez-nous<br/><span class="bold">Remplissez le formulaire ci-dessous.</span></h3>
                 </div>
               </div>
               <!--Formulaire-->
               <div class="col-12 justify-content-center favoris">
                 <div class="formulaire-contact">
                   <?php echo do_shortcode( '[contact-form-7 id="97" title="Formulaire de contact"]' ); ?>
                 </div>
               </div>
               <!---->
         </div>
       </div>



  <?php get_footer();?>
