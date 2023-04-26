<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/test.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	
    <?php wp_head();?>
</head>
<body>

<header>
<?php wp_nav_menu( array(
	'menu' => 'home'
) );?>
    <h2><a href="<?php echo site_url();?>"><?php bloginfo('name');?></a></h2>
</header>