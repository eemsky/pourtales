<?php
/**
  * Template Name: Template contact
  */

  get_header();?>

  <!-- //////////////////////////// Slider //////////////////////////// -->
      <div class=" container-slider-perso">
        <div class="row justify-content-center">
            <div class="col-12">
              <div class="slider-perso">
								<div class="text-single">
									<h2 class="title_slider-home  wow fadeInRight"><?php the_field('title_slider-home')?></h2>
									<p class="subtitle_slider-home  wow fadeInRight"><?php the_field('subtitle_slider-home')?></p>
									<a class="cta-reserver  wow fadeInRight" href="'.get_permalink(12).'" title="">Réserver</a>
								</div>
								<img class="img-home" src="<?php echo the_post_thumbnail_url()?>"/>
            </div>
            </div>
          </div>
      </div>

			<!-- //////////////////////////// Le forfait comprend... //////////////////////////// -->
					<div class="container container-historique">
						<div class="row justify-content-center">
							<div class="col-12">
								 <div class="title-historique">
									 <img src="<?php echo get_template_directory_uri(); ?>/img/losange.svg" alt="icon losange" class="icon-losange wow bounceInUp">
									 <h3>Nuit de noces<br/><span class="bold">inoubliable</span></h3>
								 </div>
							 </div>
							<!--valeurs-->
							<div class="col-12 text_cadre_perso">
								<img src="<?php echo get_template_directory_uri(); ?>/img/losange.svg" alt="icon losange" class="deco-losange wow bounceInUp">
								<div>
									<h4 class="title-points"><?php the_field('title_forfait')?></h4> <!-- Titre -->
									<p class="text-points"><?php the_field('text_forfait')?></p> <!-- Texte -->
								</div>
							</div>
						</div>
					</div>

					<!-- //////////////////////////// Tarif //////////////////////////// -->
							<div class="container container-historique">
								<div class="row justify-content-center tarifs-size">
									<div class="col-12 tarifs">
										<!--///// Left /////-->
										<div class="tarif-left">
											<h4 class="title-points">Notre forfait <span class="regular">comprend...</span></h4>
											<!--1 point-->
											<div class="points_price">
												<img src="<?php echo get_template_directory_uri(); ?>/img/losange.svg" alt="icon losange" class="deco-losange wow bounceInUp">
												<p class="text-price"><?php the_field('1_checklist_price')?></p> <!-- Texte -->
											</div>
											<!--2 point-->
											<div class="points_price">
												<img src="<?php echo get_template_directory_uri(); ?>/img/losange.svg" alt="icon losange" class="deco-losange wow bounceInUp">
												<p class="text-price"><?php the_field('2_checklist_price')?></p> <!-- Texte -->
											</div>
											<!--3 point-->
											<div class="points_price">
												<img src="<?php echo get_template_directory_uri(); ?>/img/losange.svg" alt="icon losange" class="deco-losange wow bounceInUp">
												<p class="text-price"><?php the_field('3_checklist_price')?></p> <!-- Texte -->
											</div>
											<!--4 point-->
											<div class="points_price">
												<img src="<?php echo get_template_directory_uri(); ?>/img/losange.svg" alt="icon losange" class="deco-losange wow bounceInUp">
												<p class="text-price"><?php the_field('4_checklist_price')?></p> <!-- Texte -->
											</div>
										</div>
										<!--///// Right /////-->
										<div class="tarif-right">
											<h4 class="title-points">Tarifs</h4> <!-- Titre -->
											<p class="text-price"><?php the_field('text_price_forfait')?></p> <!-- Texte -->
											<a class="cta-reserver" href="'.get_permalink(14).'" title="">Commander</a>
										</div>
                    <!---->
									</div>
                  <!-- Bouton -->
									<div class="col-12 btn-contact">
										<a href="<?php echo get_permalink(14);?>" class="cta-reserver">Des questions? <span class="bold">Contactez-nous !</span></a>
									</div>
								</div>
							</div>


  <?php get_footer();?>
