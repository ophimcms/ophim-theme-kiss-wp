<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="http://gmgp.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
    <meta name="theme-color" content="#e7b53a">
    <script type='text/javascript' src='<?= get_template_directory_uri() ?>/assets/js/jquery.min.js' id='jquery-js'></script>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
            href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body data-rsssl=1 class='tsdefaultlayout' itemscope='itemscope' itemtype='http://schema.org/WebPage'">


<div id='shadow'></div>
<div class="mainholder">
    <?php include_once THEME_URL.'/templates/header.php' ?>
    <?php if(get_option('ophim_is_ads') == 'on') { ?>
        <div id=top_addd style="text-align: center"></div>
    <?php } ?>
    <div id="content">
        <div class="wrapper">
            <div class="pd-expand"></div>
            <div class="postbody">




