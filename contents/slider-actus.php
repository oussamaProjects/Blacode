<?php
$args = array( 'numberposts' => 9, 'order'=> 'ASC', 'orderby' => 'date' );
$actus = get_posts( $args );
?>

<?php if($actus){  ?>
    <div id="sliderActus" class="sliderActus owl-carousel owl-theme">
        <?php foreach ($actus as $post) :  setup_postdata($post); ?> 
            <div class="sliderActus items"> 
                    <div class="actu">
                        <div class="image">
                            <a href="<?php the_permalink( ) ?>">
                                <?php the_post_thumbnail( ); ?>
                                <div class="hover"></div>
                            </a>
                        </div>
                        <div class="titre">
                            <a href="<?php the_permalink( ) ?>">
                                <?php the_title(); ?> 
                            </a>
                        </div>
                        <div class="date">
                            <?php echo get_the_date( 'j/m/Y'); ?>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
<?php } ?>