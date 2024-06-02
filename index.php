<?php

/*
* index.php will be the backup and standard file for all post types
* ...no Content will be shown in the frontend
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="container">
      <h1>VoidCanvas</h1>
      <p>This website is not for public access.</p>
      <p>Only available for API clients.</p>
      <p>Contact administrator if anyone wants to consume the API.</p>
    </div>
</body>
</html>
