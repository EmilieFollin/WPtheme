<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
<header>
    <h1><a href="<?php esc_url(home_url('/')); ?>"> <?php bloginfo('name') ?></a></h1>
    <h2><?php bloginfo('description') ?></h2>
</header>


<?php wp_nav_menu(array(
    'theme_location' => 'main_menu',
    'container' => 'nav',
    'container_class' => 'main-navbar'
));?>

<br> <br> <br>  <br> <br> <br>