<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>"> <!-- 言語設定を自動的に出力する -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="l-top-wrapper">
    <div class="l-left">

        <header class="l-header">
            <div class="l-header__logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a> </div>

           <?php get_search_form(); ?> <!-- search.phpを読み込む -->

            <button class="p-hamburger p-gmenu--bt is-hamburger">
                <span>Menu</span>
            </button>
        </header>