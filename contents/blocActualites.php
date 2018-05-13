<?php if ($Actualites->have_posts() ) : $i=0; ?>

    <div class="offset-md-2 col-md-8">
       <div class="actus_header">
            <h1 class="titre"><?php the_title(); ?></h1>
            <div class="description">
            <?php 
                $my_postid = 12;//This is page id or post id
                $content_post = get_post($my_postid);
                $content = $content_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
            ?>
            </div>
       </div>
    </div>
 
    <?php while ( $Actualites->have_posts() ) : $Actualites->the_post(); $i++; ?>

        <div class="col-md-4">
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

    <?php endwhile; ?>


    <?php if($remaining>0){ ?>
    <div class="actu" id="plus">
        <a id="plusActualites">
            <div class="plus_realisation">
                <div class="plus" data-ifremaining="<?php echo $if_remaining ?>" data-viewed="<?php echo $viwed ?>" data-pagination="<?php echo $pagination ?>" data-remaining="<?php echo $remaining ?>" >
                    <span>+</span><?php echo $remaining ?>
                </div>
                <div class="slug_plus">autres Actualités</div>
            </div>
        </a>
    </div>
    <?php }else{ ?>
    <input type="hidden" class="plus" data-ifremaining="<?php echo $if_remaining ?>" data-viewed="<?php echo $viwed ?>" data-pagination="<?php echo $pagination ?>" data-remaining="<?php echo $remaining ?>" /> 
    <?php } ?>
        

<?php endif	?>	
