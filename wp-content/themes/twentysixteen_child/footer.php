<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer class="site-footer">
			<!-- structure html pour accueillir la zone de widget du footer -->
			<?php 
				// on appelle la zone déclarée dans functions.php via son id 
				dynamic_sidebar( 'zone_footer' );
			?>
		</footer>

		<!-- Ajouter 3 zones à widget -->
		<footer class="site-footer zone-3-blocs">
		<?php
			// Créer 3 nouvelles zones pour accueilir des widgets
			// zone-footer-gauche (width: 25%) - une image 
			// zone-footer-milieu (width: 50%) - du texte
			// zone-footer-droite (width: 25%) - google map
		?>
			<div id="footer-gauche">
				<?php dynamic_sidebar( 'footer_gauche' ); ?>
			</div>
			<div id="footer-milieu">
				<?php dynamic_sidebar( 'footer_milieu' ); ?>
			</div>
			<div id="footer-droite">
				<?php dynamic_sidebar( 'footer_droite' ); ?>
			</div>
		</footer>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'menu_class'     => 'primary-menu',
							)
						);
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>',
							)
						);
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

			<div class="site-info">
				
				<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a></span>
				Copyright &copy; <?php echo date('Y'); ?>
				
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

</body>
</html>
