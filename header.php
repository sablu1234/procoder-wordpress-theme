<?php 
/*
* This template for desplaying the header
*/
?>

<!DOCTYPE html>
<html lang="<?php language_attributes();?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head();?>

</head>
<body <?php body_class(); ?>>
    <header id="header_area" class="<?php echo get_theme_mod('ali_menu_position');?>">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php echo home_url();?>"><img src="<?php echo get_theme_mod('ali_logo');?>" alt=""></a>
                </div>
                <div class="col-md-9">
                <nav id="main_menu">
        <div class="inner_menu container">
            <?php wp_nav_menu( array('theme_location'=>'main_menu','menu_class'=>'inner_menu') );?>
        </div>
    </nav>
                </div>
            </div>
        </div>
    </header>