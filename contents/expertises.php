<?php 
$args = array('post_type' => 'expertise', 'orderby' => 'menu_order' , 'posts_per_page' => -1, 'post_status' => 'publish');
$expertises = new WP_Query( $args );  
if($expertises) { ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <section class="expertises"> 
                    <?php while($expertises->have_posts()) : $expertises->the_post(); ?>
                        <div class="expertise" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"> 
                            <a href="<?php echo get_permalink();?>">
                                <div class="titre"><?php the_title(); ?></div>
                                <div class="description"><? the_content(); ?></div>
                            </a> 
                        </div> 
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </section>

            </div>
        </div>
    </div>


<?php } ?>