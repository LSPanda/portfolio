<?php get_header(); ?>
<section>
    <h2 class="hiddenTitle">Les derniers travaux réalisés par Simon Leyder</h2>
    <div class="contentWidth">
        <span class="quote">,,</span>
        <blockquote>Intégrateur, designer ou même developpeur... Tant de noms pour un seul et même métier : <em>infographiste web</em>. Voici plusieurs années que je suis bercé dans ce monde, que je tente d'apprendre les bonnes pratiques et surtout, faire de beaux sites web <em>accessibles</em> pour tous. Bien sûr, je n'ai pas la science infuse et je suis continuellement en apprentissage.</blockquote>
        <div class="smartWidth">
            <?php 
            $args = array(
                'post_type' => 'creations',
                'posts_per_page' => '6'
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
                <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
</div>
</section>
<?php get_footer(); ?>		