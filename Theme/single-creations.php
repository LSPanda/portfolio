<?php get_header(); ?>
		<section>
			<div class="contentWidth">
					<?php 
						$args = array(
							'post_type' => 'post',
						);
						$the_query = new WP_Query( $args );

						if ($the_query->have_posts()):
							while (have_posts()) : the_post();
					?>
					<div class="galleryWork">
					<?php $tableauChamps=array('creation1','creation2','creation3','creation4'); ?>
					<?php for ($i=0; $i < count($tableauChamps) ; $i++): ?> 
						<?php if ( get_field($tableauChamps[$i]) ): ?>
							<a href="<?php echo( get_field( $tableauChamps[$i]) ); ?>" class="fresco" data-fresco-group="unique_name"><img src="<?php echo( get_field( $tableauChamps[$i] ) ); ?>" title="<?php echo( the_title() ); ?>" alt="<?php echo( the_title() ); ?>" class="showMe"></a>
						<?php endif ?>
					<?php endfor ?>
					</div>
					<div class="presentationWork">
						<h2 class="beta"><?php echo( the_title() ); ?></h2>
						<span><?php the_terms(get_the_id(),'outils'); ?></span>
						<?php echo( the_content() ); ?>
					<?php if (get_field( "url" )): ?>
						<a href="<?php echo( get_field( "url" ) ) ?>" class="visit">Site web</a>
					<?php endif ?>
						<div class="share">
							<ul>
								<li><a name="fb_share" type="box_count" share_url="<?php echo( the_permalink() ); ?>"></a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script></li>
								<li><a href="http://twitter.com/share" class="twitter-share-button" data-count="vertical" data-via="InfoWebMaster">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></li>
							</ul>
						</div>					
					</div>
					
					<?php
							endwhile;
						endif;
						wp_reset_postdata();
					?>
				</div>
			</div>
			<div class="smartWidth smartWidthOut"></div>

			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
			<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
			<script src="<?php echo get_template_directory_uri(); ?>/js/lightBox-ck.js"></script>
		</section>
<?php get_footer(); ?>