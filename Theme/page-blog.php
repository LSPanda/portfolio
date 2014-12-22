<?php get_header(); ?>
        <section>
            <div class="contentWidth">
                <h2 class="hiddenTitle">Blog de Simon Leyder</h2>
                <div class="littleThings">
                    <h3 class="hiddenTitle">Les dernières nouveautés sur le Blog</h3>
                    <div class="wrap">
                        <img src="http://portfolio.simon-leyder.be/wp-content/themes/portfolio/images/me.jpg" alt="Une photo de Simon Leyder">
                        <p>Dans la tête de <span>Simon Leyder</span></p>
                    </div>
                    <div class="lastArticles">
                        <h4 class="beta">Derniers articles</h4>
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
                        <h4 class="beta">Saine lecture</h4>
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
                <div class="articles">
                    
                    <?php 
                        $args = array(
                            'post_type' => 'post',
                            'orderby'=>'date',
                            'order'=>'DESC',
                            'posts_per_page' => '3',
                            'paged' => get_query_var('paged')
                        );
                        $the_query = new WP_Query( $args );
                    ?>
                    <?php if ($the_query->have_posts()): ?>
                            <?php while ($the_query->have_posts()):$the_query->the_post();  ?>
                    <article>
                        <div class="date">
                            <div><p><?php echo( the_date( 'j M', '<span>', '</span>') ); ?></p></div>
                        </div>
                        <div class="content">
                            <h4 class="beta"><a id="myTitleBlogGrey" href="<?php the_permalink(); ?>"><?php echo( the_title() ); ?></a></h4>
                            <div class="taxo"><?php the_category(); ?></div>
                            <?php echo( the_excerpt() ); ?>
                        </div>
                    </article>
                            <?php endwhile ?>
                        <?php endif ?>
                    <?php wp_reset_postdata(); ?>
                    <?php wp_pagenavi( array( 'query' => $the_query ) );?>
                </div>	
                <div class="smartWidth smartWidthOut"></div>
            </div>
        </section>
<?php get_footer(); ?>	