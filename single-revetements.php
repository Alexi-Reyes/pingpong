<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package my-theme
 */

$dataRevetement = get_fields();
get_header();
?>

	<main id="primary" class="site-main">

		<header class="revetement-header">
			<h1><?php the_title() ?></h1>
		</header><!-- .page-header -->

		<?php
		while ( have_posts() ) : 
			the_post();
			?>
			<div class="center">
				<section class="revetements-wrapper">
					<article class="revetements-card">
						<?php the_post_thumbnail(); ?>
						<h2><?php the_title(); ?></h2>
						<?php the_excerpt(); ?>
					</article>	

					<section class="info">
						<h2>Infomation</h2>
						<p>Rapidité : <?= $dataRevetement["rapidite"] ?></p>
						<p>Contrôle : <?= $dataRevetement["controle"] ?></p>
						<p>Adhérence : <?= $dataRevetement["adherence"] ?></p>
						<p>Epaisseur : <?= $dataRevetement["epaisseur"] ?></p>
					</section>
				</section>
			</div>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>

		<?php endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

