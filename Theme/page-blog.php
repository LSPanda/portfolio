<?php get_header(); ?>
        <section itemscope itemtype="http://schema.org/Blog">
            <div class="contentWidth">
                <h2 class="hiddenTitle" itemprop="alternativeHeadline">Blog de Simon Leyder</h2>
                <section class="littleThings" >
                    <h2 class="hiddenTitle" itemprop="alternativeHeadline">Nouveautés sur le Blog</h2>
                    <div class="wrap">
                        <img src="http://portfolio.simon-leyder.be/wp-content/themes/portfolio/images/me.jpg" alt="Une photo de Simon Leyder">
                        <p>Dans la tête de <span>Simon Leyder</span></p>
                    </div>
                    <section class="lastArticles">
                        <h3 class="beta" itemprop="headline">Derniers articles</h3>
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
                    </section>
                    <?php 
                        $args = array(
                            'post_type' => 'livre',
                            'posts_per_page' => '3'
                        );
                        $the_query = new WP_Query( $args );

                        if ($the_query->have_posts()):
                            while ($the_query->have_posts()):$the_query->the_post();
                    ?>
                    <section class="lastBooks">
                        <h3 class="beta" itemprop="headline">Saine lecture</h3>
                        <ul>
                            <li itemprop="blogPost"><a itemprop="url" href="<?php the_permalink(); ?>"><?php echo( the_title() ); ?></a></li>
                        </ul>
                    </section>
                    <?php
                            endwhile;
                        endif;
                        wp_reset_postdata();
                    ?>
                </section>
                <section class="articles">
                    <h2 class="hiddenTitle" itemprop="alternativeHeadline">Derniers articles posté sur le blog</h2>
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
                    <article itemprop="blogPost">
                        <div class="date" itemprop="dateCreated">
                            <div><p><?php echo( the_date( 'j M', '<span>', '</span>') ); ?></p></div>
                        </div>
                        <div class="content" itemprop="about">
                            <h3 class="beta" itemprop="headline"><a itemprop="url" href="<?php the_permalink(); ?>" class="myTitleBlogGrey"><?php echo( the_title() ); ?></a></h3>
                            <div class="taxo"><?php the_category(); ?></div>
                            <?php echo( the_excerpt() ); ?>
                        </div>
                    </article>
                            <?php endwhile ?>
                        <?php endif ?>
                    <?php wp_reset_postdata(); ?>
                    <?php wp_pagenavi( array( 'query' => $the_query ) );?>
                </section>	
                <div class="smartWidth smartWidthOut"></div>
            </div>
        </section>
<?php get_footer(); ?>	