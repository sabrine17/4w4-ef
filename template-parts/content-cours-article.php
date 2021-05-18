<?php
/**
 * Template part l'affichage des bloc de cours dans front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */
global $tPropriété;
?>

<article>
	<section class="ctrl-cours">				
	<p><?php echo $tPropriété['typeCours']  ?></p>
	</section>
	<a href="<?php echo get_permalink() ?>"><?php echo $tPropriété['sigle']  ; ?></a>
	<p><?php echo $tPropriété['nbHeure'] ; ?></p>
</article>
