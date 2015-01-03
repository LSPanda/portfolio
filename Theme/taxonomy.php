<?php get_header(); ?>
		<section itemscope itemtype="http://schema.org/CreativeWork">
			<div class="contentWidth">
				<h2 class="hiddenTitle" itemprop="alternativeHeadline">Liste des travaux réalisés par Simon Leyder</h2>
				<div class="smartWidth">
					<?php if( have_posts() ): ?>
						<?php while(have_posts()) : the_post();?>
						<div class="works" itemscope itemtype="http://schema.org/MediaObject">
							<h3 class="hiddenTitle" itemprop="alternativeHeadline"><?php echo( the_title() ); ?></h3>
							<a itemprop="url" href="<?php the_permalink(); ?>">
								<figure itemprop="img">
									<?php 
										if ( has_post_thumbnail() ) {
											the_post_thumbnail();
										} 
									?>
									<?php $type = wp_get_post_terms( get_the_ID(), 'type' ); ?>
									<figcaption itemprop="description"><?php echo( the_title() ); ?><span itemprop="name"><?php echo( $type[0]->name ); ?></span></figcaption>
								</figure>
							</a>
						</div>
						<?php endwhile ?>	
					<?php endif ?>
				</div>
			</div>
		</section>
<?php get_footer(); ?>