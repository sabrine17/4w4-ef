<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */

get_header();
?>
	<main id="primary" class="site-main">
	


		<?php if ( have_posts() ) : ?>

			<header class="page-header">

				<h1 class="page-title">Cours</h1>
				<?php
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<section class="cours">
			<?php
			/* Start the Loop */
            $precedent = "XXXXXX";
			$chaine_bouton_radio = '';
			//global $tProprieté;
			while ( have_posts() ) :
				the_post();
                convertirTableau($tPropriété);
				//print_r($tPropriété);
				if ($tPropriété['session'] != $precedent ): 
					if ("XXXXXX" != $precedent)	: ?>
						</section>
						<?php if (in_array($_SESSION,['Web', 'Jeu', 'Spécifique', 'Image 2d/3d'])) : ?>
                            <section class="ctrl-carrousel">
								<?php echo $chaine_bouton_radio;
								$chaine_bouton_radio = '';
								 ?>		
							</section>
						<?php endif; ?>
					<?php endif; ?>	
					<h2><?php echo $tPropriété['session'] ?></h2>
					<section <?php echo class_composant($tPropriété['session']) ?>>
				<?php endif ?>	

				<?php if (in_array($tPropriété['session'],  ['Web', 'Jeu', 'Spécifique', 'Image 2d/3d']) ) : 
						get_template_part( 'template-parts/content', 'cours-section' ); 
                        
						$chaine_bouton_radio .= '<input class="rad-carrousel"  type="radio" name="rad-'.$tPropriété['typeCours'].'">';
						
                           else :		
						get_template_part( 'template-parts/content', 'cours-article' ); 
				endif;	
        $precedent = $tPropriété['session'];
			endwhile;?>
            
			</section> <!-- fin section cours -->
		<?php endif; ?>
		

	

	</main><!-- #main -->

<?php 
//get_no-sidebar();
get_footer();

function convertirTableau(&$tPropriété)
{
	/*
	$titre = get_the_title(); 
	// 582-1W1 Mise en page Web (75h)
	$sigle = substr($titre, 0, 7);
	$nbHeure = substr($titre,-6,6);
	$titrePartiel =substr($titre,8,-6);
	$session = substr($titre, 4,1);
	// $contenu = get_the_content();
	// $resume = substr($contenu, 0, 200);
	$typeCours = get_field('type_de_cours');
*/

	$tPropriété['titre'] = get_the_title(); 
	$tPropriété['sigle'] = substr($tPropriété['titre'], 0, 7);
	$tPropriété['nbHeure'] = substr($tPropriété['titre'],-4,3);
	//$tPropriété['titrePartiel'] = substr($tPropriété['titre'],8,-6);
	$tPropriété['session'] = substr($tPropriété['titre'], 4,1);
	$tPropriété['typeCours'] = get_field('type_de_cours');
}


function class_composant($session){

	if (in_array($session,  ['Web', 'Jeu', 'Spécifique', 'Image 2d/3d'])){
		return 'class="cours"';
	}
	
	else {
		return 'class="bloc"';
	}
}
