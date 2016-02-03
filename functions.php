<?php
remove_filter( 'the_content', 'wpautop' ); // Отключаем автоформатирование в полном посте
add_theme_support( 'post-thumbnails' );

include_once('metabox_create.php');
include_once('metabox_add.php');
?>