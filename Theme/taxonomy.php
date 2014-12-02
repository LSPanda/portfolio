<?php get_header(); ?>
		<section>
			<div class="contentWidth">
				<h4>Liste des travaux réalisés par Simon Leyder</h4>
				<div class="smartWidth">
					<?php if( have_posts() ): ?>
						<?php while(have_posts()) : the_post();?>
						<div class="works">
							<a href="<?php the_permalink(); ?>">
								<figure>
									<?php 
										if ( has_post_thumbnail() ) {
											the_post_thumbnail();
										} 
									?>
									<p><?php echo( the_content() ); ?></p>
									<?php $type = wp_get_post_terms( get_the_ID(), 'type' ); ?>
									<figcaption><?php echo( the_title() ); ?><span><?php echo( $type[0]->name ); ?></span></figcaption>
								</figure>
							</a>
						</div>
						<?php endwhile ?>	
					<?php endif ?>
				</div>
			</div>
		</section>
<?php get_footer(); ?>