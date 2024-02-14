<?php

function enqueue_materialize_styles() {
   // Подключение Materialize CSS
   wp_enqueue_style( 'style-main', get_stylesheet_uri() );
   wp_enqueue_style('materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css', array(), '1.0.0', 'all');
   wp_enqueue_style( 'style-font', 'https://fonts.googleapis.com/icon?family=Material+Icons' );

   // Подключение ваших стилей
   wp_enqueue_style('my-materialize-styles', get_template_directory_uri() . '/style.css', array('materialize'), '1.0.0', 'all');
   wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array('materialize'), '1.0.0', true );
   wp_enqueue_script( 'script-m', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', array('jquery'), '1.0.0', true );
}
function custom_gtranslate_translations( $translations, $text, $from, $to ) {
   // Проверяем, является ли текст тем, который вы хотите изменить
   if ( $text === 'Главная' && $to === 'kz' ) { // Используйте нужный вам текст и код языка
       // Меняем перевод на свой вариант
       $translations = 'Басты';
   }

   return $translations;
}

add_action('wp_enqueue_scripts', 'enqueue_materialize_styles');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
// Включаем поддержку шорткодов в текстовых виджетах
add_filter('widget_text','do_shortcode');

// Включаем поддержку шорткодов в произвольных полях типа post
add_filter('acf_the_content', 'do_shortcode');

// Включаем поддержку шорткодов в описаниях терминов таксономий
add_filter('term_description','do_shortcode');

// Добавляем поддержку шорткодов для произвольных мест вывода
add_filter('the_excerpt','do_shortcode');
add_filter('the_content','do_shortcode');
add_filter( 'gtranslate_translations', 'custom_gtranslate_translations', 10, 4 );
?>

