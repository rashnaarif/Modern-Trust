<?php
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');
     wp_title(); 
     if(is_front_page()){
        echo " | "; bloginfo('description');
     }
     ?></title>

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- font family -->
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>

    <!-- Css -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/main-css.css" rel="stylesheet" />
    <?php  wp_head(); ?>
</head>

<body>
    <!-- header -->
    <header class="main-header">
        <nav class="navbar navbar-expand-md">
            <div class="container">
                    <?php the_custom_logo(); ?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <?php
                       $menu_args = array(
                          "theme_location" => "primary_menu",
                          "menu_class" => "navbar-nav",
                          "container_class" => "me-auto",
                          "link_after" => " <i class='fa fa-angle-down'></i>"
                       );
                        wp_nav_menu($menu_args);
                    
                    ?>
                    <div class="header-buttons d-flex">
                        <!-- <a href="" class="btn-login">Login</a>
                        <a href="" class="btn-start">Start Now</a> -->
                        <?php
                           $btn_args = array(
                            "theme_location" => "Secondary_menu",
                            "menu_class" => "navbar-nav"
                           );
                           wp_nav_menu($btn_args);
                        ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>
