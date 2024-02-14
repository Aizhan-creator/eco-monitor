<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Система интегрированного мониторинга и визуализации экологии города">
    <meta name="author" content="Эко-Монитор">
    <title>Система интегрированного мониторинга и визуализации экологии города</title>
	<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body class="nav-bg-white">
    <!-- Navbar -->
    <div class="navbar align-center">
        <nav class="nav-center">
            <div class="nav-wrapper">
                <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <?php
                wp_nav_menu(array(
                    'menu' => 'main', // Указывает на имя меню в административной панели
                    'menu_class' => 'hhh hide-on-med-and-down'
                ));
                ?>
            </div>
        </nav>
    </div>

    <!-- Mobile Menu -->
    <ul class="sidenav" id="mobile-menu">
        <?php
        wp_nav_menu(array(
            'menu' => 'main',
            'menu_id' => 'nav-mobile',
            'menu_class' => 'hhh'
        ));
        ?>
    </ul>

</body>
</html>
