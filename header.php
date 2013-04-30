<!DOCTYPE html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php
        wp_title( '|', true, 'right' );
        bloginfo( 'name' );
        ?></title>
    <link href="<?php echo get_stylesheet_directory_uri() ?>/css/template_css.css" type="text/css" rel="stylesheet" />
    <script src="/wp-includes/js/jquery/jquery.js"></script>

    <?php wp_head() ?>
</head>
<body>