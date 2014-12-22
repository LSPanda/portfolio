<?php get_header(); ?>
		<section>
			<div class="contentWidth">
				<h2 class="hiddenTitle">Liste des travaux réalisés par Simon Leyder</h2>
				<div class="smartWidth">
					<?php 
						$args = array(
							'post_type' => 'creations',
							'orderby'=>'date',
							'order'=>'DESC',
							'posts_per_page' => '6',
							'paged' => get_query_var('paged')
						);
						$the_query = new WP_Query( $args );

						if ($the_query->have_posts()):
							while ($the_query->have_posts()):$the_query->the_post();
					?>
					<div class="works">
						<h3 class="hiddenTitle"><?php echo( the_title() ); ?></h3>
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
					<?php wp_reset_postdata(); ?>
					<?php wp_pagenavi( array( 'query' => $the_query ) );?>
				</div>
			</div>
		</section>
<?php get_footer(); ?>	