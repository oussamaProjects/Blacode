<?php if ($realisation->have_posts() ) : $i=0; ?>

    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <div class="rea_head"> 
                    <h1 class="h2">
                        <?php the_title(); ?> 
                    </h1> 
                    <div class="cats">
                        <ul>
                            <?php  $args = array( 
                                'title_li' => '',
                                'taxonomy' => 'cat_projet',
                                'hide_empty' => false,
                            );
                            wp_list_categories( $args ); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <?php while ( $realisation->have_posts() ) : $realisation->the_post(); $i++; ?>
       <div class="project-row">
        <?php 
        $rea_image_header = get_field('rea_image_header'); 
        if($rea_image_header){ ?> 
        <a href="<?php the_permalink( ) ?>">
        <div class="page_bandeau" style="background-image: url(<?php echo $rea_image_header['url'] ?>);" ></div>
        </a>
        <?php } ?>

         <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <div class="rea"> 
                        <div class="titre">
                            <a href="<?php the_permalink( ) ?>">
                                <?php the_title(); ?> 
                            </a>
                        </div> 
                        <div class="description">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="post_cats">
                            <?php the_terms( get_the_ID(), 'cat_projet', '', ' - ' ); ?>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        </div>
    <?php endwhile; ?>


    <?php if($remaining>0){ ?>
        <div class="rea" id="plus">
            <a id="plusrealisation">
                <div class="plus_realisation">
                    <div class="plus" data-ifremaining="<?php echo $if_remaining ?>" data-viewed="<?php echo $viwed ?>" data-pagination="<?php echo $pagination ?>" data-remaining="<?php echo $remaining ?>" >
                        <?php echo __('Plus de projets','blacode'); ?>
                    </div> 
                </div>
            </a>
        </div>
    <?php }else{ ?>
        <input type="hidden" class="plus" data-ifremaining="<?php echo $if_remaining ?>" data-viewed="<?php echo $viwed ?>" data-pagination="<?php echo $pagination ?>" data-remaining="<?php echo $remaining ?>" /> 
    <?php } ?>
        

<?php endif	?>	
