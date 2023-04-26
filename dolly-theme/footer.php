<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                &copy; LWHH - All Rights Reserved

                <?php 
                 wp_nav_menu(
                    array(
                      'theme_location'=>'footermenu',
                      'menu_id'       =>'footermenucontainer',
                      'menu_class'    =>'list-inline text-right',

                    ));

                ?>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>