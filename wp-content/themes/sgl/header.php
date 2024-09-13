<!-- <?php // echo get_template_directory_uri(); ?>
<?php // bloginfo('template_directory'); ?> -->

<!DOCTYPE html>
<html lang="en">
   <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
        <meta name="description" content="">
        <title>Lydiarenee</title>
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/layout.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">
   </head>
   <body>
        <header>
            <div class="main-header">
                <div class="container">
                    <div class="menu-Bar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-3 text-left">
                            <a href="<?php echo site_url(); ?>" class="logo">
                                <img src="<?php echo get_header_image(); ?>" alt="Site Logo">
                            </a>
                        </div>
                        <div class="col-md-9 text-right">
                            <div class="menuWrap">
                                <?php wp_nav_menu(array('theme_loaction'=>'primary-menu')) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>