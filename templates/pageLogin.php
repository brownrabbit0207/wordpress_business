<?php
/*
Template Name: The template for displaying login page
*/
global $pageLogin_custom_template;
$pageLogin_custom_template = 'pageLoginTemplate';
$language = isset($_GET['lang']) ? $_GET['lang'] : '';

add_action(
    'theme_content_styles',
    function () use ($pageLogin_custom_template) {
        theme_single_content_styles($pageLogin_custom_template);
    }
);

function theme_login_body_class_filter($classes) {
    $classes[] = 'u-body u-xl-mode';
    return $classes;
}
add_filter('body_class', 'theme_login_body_class_filter');
get_header();
$header = ob_get_clean();
if (function_exists('renderHeader')) {
    renderHeader($header, '', 'echo');
} else {
    echo $header;
}

theme_layout_before('pageLogin', '', $pageLogin_custom_template);
$translations = '';
if ($language) {
    if (file_exists(get_stylesheet_directory() . '/' . 'template-parts/'. $pageLogin_custom_template . '/translations/' . $language .'/single-content' . '.php')) {
        $translations = '/translations/' . $language;
    }
}
ob_start();
get_template_part('template-parts/' . $pageLogin_custom_template . $translations . '/single-content');
$content = ob_get_clean();
if (function_exists('renderTemplate')) {
    renderTemplate($content, '', 'echo', 'custom');
} else {
    echo $content;
}
theme_layout_after('pageLogin');

ob_start();
get_footer();
$footer = ob_get_clean();
if (function_exists('renderFooter')) {
    renderFooter($footer, '', 'echo');
} else {
    echo $footer;
}

remove_filter('body_class', 'theme_login_body_class_filter');