<?php get_header(); ?>
		<section itemscope itemtype="http://schema.org/Blog">
			<div class="contentWidth">
				<h2 class="hiddenTitle" itemprop="alternativeHeadline">Catégorie spécifique du blog de Simon Leyder</h2>
				<div class="littleThings">
					<h3 class="hiddenTitle" itemprop="alternativeHeadline">Les dernières nouveautés sur le Blog</h3>	
					<div class="wrap">
						<img src="http://portfolio.simon-leyder.be/wp-content/themes/portfolio/images/me.jpg" alt="Une photo de Simon Leyder">
						<p>Dans la tête de <span>Simon Leyder</span></p>
					</div>
					<div class="lastArticles">
						<h4 class="beta" itemprop="headline">Derniers articles</h4>
						<ul>
							<?php 
								$args = array(
									'post_type' => 'post',
									'posts_per_page' => '5'
								);
								$the_query = new WP_Query( $args );

								if ($the_query->have_posts()):
									while ($the_query->have_posts()):$the_query->the_post();
							?>
							<li itemprop="blogPost"><a itemprop="url" href="<?php the_permalink(); ?>"><?php echo( the_title() ); ?></a></li>
							<?php
									endwhile;
								endif;
								wp_reset_postdata();
							?>
						</ul>
					</div>
					<?php 
						$args = array(
							'post_type' => 'livre',
							'posts_per_page' => '3'
						);
						$the_query = new WP_Query( $args );

						if ($the_query->have_posts()):
							while ($the_query->have_posts()):$the_query->the_post();
					?>
					<div class="lastBooks">
						<h4 class="beta" itemprop="headline">Saine lecture</h4>
						<ul>
							<li itemprop="blogPost"><a itemprop="url" href="<?php the_permalink(); ?>"><?php echo( the_title() ); ?></a></li>
						</ul>
					</div>
					<?php
							endwhile;
						endif;
						wp_reset_postdata();
					?>
				</div>
				<div class="articles">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
					<article itemprop="blogPost">
						<div class="date" itemprop="dateCreated">
							<div><p><?php echo( the_date( 'j M', '<span>', '</span>') ); ?></p></div>
						</div>
						<div class="content" itemprop="about">
							<h4 class="beta" itemprop="headline"><a id="myTitleBlogGrey"href="<?php the_permalink(); ?>"><?php echo( the_title() ); ?></a></h4>
							<div class="taxo"><?php the_category(); ?></div>
							<?php echo( the_excerpt() ); ?>
						</div>
					</article>
						<?php endwhile ?>
					<?php endif ?>
				</div>
				<div class="smartWidth smartWidthOut"></div>
			</div>
		</section>
<?php get_footer(); ?>	