<!DOCTYPE html>
<!-- Nastavení jazyka dokumentu podle lokalizace WordPressu -->
<html <?php language_attributes(); ?>>
<head>
    <!-- Charse dokumentu, klasicky jde o utf -->
    <meta charset='<?php bloginfo('charset'); ?>'>

    <!-- Title dokumentu, bývá přepsáno SEO pluginem -->
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <!-- Pomocí pingbacku mohou jiné stránky WordPress upozorňovat, že na ně někdo odkazuje -->
    <link rel='pingback' href='<?php bloginfo('pingback_url'); ?>'>

    <!-- Přiřazení RSS kanálu -->
    <link rel='alternate' type='application/rss+xml' title='<?php bloginfo('name'); ?> RSS2 Feed' href='<?php bloginfo('rss2_url'); ?>' />

    <!-- Provedení všech akcí hlavičky -->
    <?php wp_head(); ?>
</head>

<!-- Přiřazení kaskádových tříd k body -->
<body <?php body_class(); ?>>
    <h1>
        <!-- Odkaz na homepage -->
        <a href='<?php echo home_url( '/' ); ?>'>
            <?php bloginfo('name'); ?>
        </a>
    </h1>
