<?php get_header(); ?>
		<section itemscope itemtype="http://schema.org/Blog">
			<div class="contentWidth">
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
				<?php 
					$args = array(
						'post_type' => 'livre',
					);
					$the_query = new WP_Query( $args );

					if ($the_query->have_posts()):
						while (have_posts()) : the_post();
				?>
				<div class="articles">
					<h3 class="hiddenTitle" itemprop="alternativeHeadline">Avis de Simon Leyder sur un livre du Web</h3>
					<article itemscope itemtype="http://schema.org/Book">
						<div class="date" itemprop="dateCreated">
							<div><p><?php echo( the_date( 'j M', '<span>', '</span>') ); ?></p></div>
						</div>
						<div class="content">
							<h4 class="beta" itemprop="headline"><?php echo( the_title() ); ?></h4>
							<span class="auteur" itemprop="author">De <a href="<?php echo( get_field( "auteur_url" ) ); ?>"><?php echo( get_field( "auteur" ) ); ?></a>, édité par <a  itemprop="editor" href="<?php echo( get_field( "editeur_url" ) ); ?>"><?php echo( get_field( "editeur" ) ); ?></a></span>
							<?php 
								if ( has_post_thumbnail() ) {
									$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
									echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '" class="fresco" data-fresco-group="unique_name" >';
									the_post_thumbnail();
									echo '</a>';
								}
							?>
							<?php echo( the_content() ); ?>
							<div class="share">
								<ul>
									<li><a name="fb_share" type="box_count" share_url="<?php echo( the_permalink() ); ?>"></a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script></li>
									<li><a href="http://twitter.com/share" class="twitter-share-button" data-count="vertical" data-via="InfoWebMaster">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></li>
								</ul>
							</div>	
						</div>
					</article>
					<div class="comments-template">
						<?php comments_template(); ?>
					</div>
				</div>
				<?php
						endwhile;
					endif;
					wp_reset_postdata();
				?>
				<div class="smartWidth smartWidthOut"></div>

				<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
				<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
				<script src="<?php echo get_template_directory_uri(); ?>/js/lightBox-ck.js"></script>
			</div>
		</section>
<?php get_footer(); ?>	