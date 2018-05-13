<?php
$args = array( 'numberposts' => 9, 'order'=> 'ASC', 'orderby' => 'date' );
$actus = get_posts( $args );
?>

<?php if($actus){  ?>
    <div id="sliderActus" class="sliderActus owl-carousel owl-theme">
        <?php foreach ($actus as $post) :  setup_postdata($post); ?> 
            <div class="sliderActus items">
               <a href="<?php the_permalink( ) ?>">
                    <div class="actu">
                        <div class="image">
                            <?php the_post_thumbnail( ); ?>
                        </div>
                        <div class="titre">
                            <?php the_title(); ?> 
                        </div>
                        <div class="date">
                            <?php echo get_the_date( ); ?>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
<?php } ?>