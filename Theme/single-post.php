<?php get_header(); ?>
		<section>
			<div class="contentWidth">
				<div class="littleThings">
					<div class="wrap">
						<img src="http://portfolio.simon-leyder.be/wp-content/themes/portfolio/images/me.jpg" alt="Une photo de Simon Leyder">
						<p>Dans la tête de <span>Simon Leyder</span></p>
					</div>
					<div class="lastArticles">
						<h2>Derniers articles</h2>
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
							<li><a href="<?php the_permalink(); ?>"><?php echo( the_title() ); ?></a></li>
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
						<h2>Saine lecture</h2>
						<ul>
							<li><a href="<?php the_permalink(); ?>"><?php echo( the_title() ); ?></a></li>
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
						'post_type' => 'post',
					);
					$the_query = new WP_Query( $args );

					if ($the_query->have_posts()):
						while (have_posts()) : the_post();
				?>
				<h4><?php echo( the_title() ); ?></h4>
				<div class="articles">
					<article>
						<div class="date">
							<div><p><?php echo( the_date( 'j M', '<span>', '</span>') ); ?></p></div>
						</div>
						<div class="content">
							<h2><?php echo( the_title() ); ?></h2>
							<span class="taxo"><?php the_category(); ?></span>
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