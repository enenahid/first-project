<?php
get_header();
?>
<section class="post_area">
    
        <?php 
           if(have_posts()){
              while(have_posts()){
                the_post(); ?>
                
                <div class="single_post">
                    <h3><a href="<?php the_permalink();?>"><?php the_title()?></a></h3>
                    <?php the_post_thumbnail('post-thumb'); ?>
                    <?php the_content()?>

                    <hr>
                    </div>

             <?php }

            echo 'yes have post';


           }else{
            echo 'no post hare';
           }
        ?>

    


</section>
<section class="test">
    <h2><a href="#">This is test</a></h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione laborum voluptatum consequuntur assumenda itaque! Ratione maxime deserunt praesentium blanditiis. Sapiente.</p>
    <img src="<?php echo get_template_directory_uri(); ?>/img/Untitled-1.jpg" alt="">
    
</section>

<div class="container">
    <div class="row">
        <div class="col-md-4"> </div>
        <div class="col-md-8">
        <?php the_posts_pagination( array(
    'mid_size'  => 2,
    'prev_text' => __( 'Back', 'textdomain' ),
    'next_text' => __( 'Onward', 'textdomain' ),
) ); ?>
        </div>
    </div>
</div>


<?php
get_footer();
?>