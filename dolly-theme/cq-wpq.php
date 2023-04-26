<?php
/**
 * Template Name: Custome Query WPQuery
 */

?>
<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php get_template_part("hero"); ?>
<div class="posts">
    <?php
    $paged= get_query_var("paged") ?get_query_var("paged"):1;
    $_p = new WP_Query(array(
           'posts_per_page' => 1,
           //'post__in' => array(17,8,50,),
           //'orderby' => 'post__in',
           'paged'   => $paged,
           

           //'monthnum'=>3,
           //'year'    =>2023
           //'post_status'=>'future'
            'post_type' => 'post',
           'meta_key' => 'featured',
           'meta_value' => '1',

    ));
    while($_p->have_posts()){
        $_p->the_post();

        
        
     ?>

     <div class="post" <?php post_class( ); ?>>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slider">
                        <?php
                         $attachments =new Attachments ('slider');
                         if ($attachments->exist()){
                            while ($attachment =$attachments->get()){ ?>
                            <div>
                                <?php echo $attachments->image('large');?>
                            </div>
                            <?php
                            }
                         }
                        ?>
                    </div>
                    <h2 class="post-title">
                       <a href="<?php the_permalink( );?>"> <?php the_title(); ?></a>
                    </h2>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong><?php the_author();?></strong><br/>
                        <?php the_date(); ?>
                        
                    </p>
                    <?php echo get_the_tag_list("<ul class=\"list-unstyled\"><li>","</li><li>","</li></ul>");?>
                    
                </div>
                <div class="col-md-8">
                    <p>
                        <?php
                        if(has_post_thumbnail( )){
                            $thumbnail_url = get_the_post_thumbnail_url(null, "large");
                            //echo '<a href="myimage.png" data-featherlight="image">';
                            printf( '<a href="%s" data-featherlight="image">',$thumbnail_url );
                            the_post_thumbnail('large',array('class'=>'img_fluid'));
                            echo '</a>';
                        }

                         the_content( );
                    ?>
                    </p>
                    
                </div>
                <div class="col-md-10 offset-md-1">
                    <?php comments_template(); ?>
                    
                </div>

            </div>

        </div>
    </div>
     <?php   
    }
    
    ?>

    <div class="container post-pagination">
        <div class="row">
            <div class="col-md-4"> </div>
            <div class="col-md-8"> 
                <?php
               echo paginate_links(array(
                 'total' => $_p->max_num_pages

               ) ); 
                ?>
            </div>  
           
        </div>
    </div>
    <?php wp_reset_query(); ?>
</div>
    
<?php get_footer(); ?>