<?php if ($realisation->have_posts() ) : $i=0; ?>

    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <div class="rea"> 
                    <div class="titre">
                        <?php the_title(); ?> 
                    </div> 
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <?php while ( $realisation->have_posts() ) : $realisation->the_post(); $i++; ?>
       
        <?php 
        $rea_image_header = get_field('rea_image_header'); 
        if($rea_image_header){ ?> 
        <div class="page_bandeau" style="background-image: url(<?php echo $rea_image_header['url'] ?>);" ></div>
        <?php } ?>

         <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <div class="rea"> 
                        <div class="titre">
                            <?php the_title(); ?> 
                        </div> 
                        <div class="description">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="cats">
                            <?php   ?>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>


    <?php endwhile; ?>


    <?php if($remaining>0){ ?>
    <div class="rea" id="plus">
        <a id="plusrealisation">
            <div class="plus_realisation">
                <div class="plus" data-ifremaining="<?php echo $if_remaining ?>" data-viewed="<?php echo $viwed ?>" data-pagination="<?php echo $pagination ?>" data-remaining="<?php echo $remaining ?>" >
                    <span>+</span><?php echo $remaining ?>
                </div>
                <div class="slug_plus">autres Réalisation</div>
            </div>
        </a>
    </div>
    <?php }else{ ?>
    <input type="hidden" class="plus" data-ifremaining="<?php echo $if_remaining ?>" data-viewed="<?php echo $viwed ?>" data-pagination="<?php echo $pagination ?>" data-remaining="<?php echo $remaining ?>" /> 
    <?php } ?>
        

<?php endif	?>	