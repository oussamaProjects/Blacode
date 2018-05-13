<?php if ($realisation->have_posts() ) : $i=0; ?>

    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <div class="rea"> 
                    <h1 class="h1">
                        <?php the_title(); ?> 
                    </h1> 
                    <div class="cats">
                        <ul>
                        <li> Dispositif Marketing2 </li> 
                        <li> Mobile5 </li> 
                        <li> E-CRM1 </li> 
                        <li> Campagne2 </li> 
                        <li> Stratégie de marque5 </li> 
                        <li> Social média9 </li> 
                        <li> Infographie1 </li> 
                        <li> Motion Design2 </li> 
                        <li> Site16 </li> 
                        <li> Événementiel72 </li> 
                        </ul>
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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="rea" id="plus">
                    <a id="plusRealisation">
                        <span class="plus_realisation">
                            <span class="plus" data-ifremaining="<?php echo $if_remaining ?>" data-viewed="<?php echo $viwed ?>" data-pagination="<?php echo $pagination ?>" data-remaining="<?php echo $remaining ?>" >
                            </span>
                            <span class="slug_plus">Plus de Réalisation</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php }else{ ?>
    <input type="hidden" class="plus" data-ifremaining="<?php echo $if_remaining ?>" data-viewed="<?php echo $viwed ?>" data-pagination="<?php echo $pagination ?>" data-remaining="<?php echo $remaining ?>" /> 
    <?php } ?>
        

<?php endif	?>	
