<?php
/**
 * Theme header template.
 *
 * @package TailPress
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-white text-zinc-900 antialiased'); ?>>
<?php do_action('tailpress_site_before'); ?>

<div id="page" class="min-h-screen flex flex-col">
    <?php do_action('tailpress_header'); ?>

    <header id="main-header" class="sticky w-full top-0 z-50 bg-white shadow-sm transition-all duration-300 h-24 flex items-center">
    <div class="w-full px-4 md:px-6 h-full">
        <div class="flex justify-between items-center h-full w-full">
            
            <div id="header-logo" class="flex items-center [&_img]:h-10 [&_img]:w-auto">
                <?php if (has_custom_logo()): ?>
                    <?php the_custom_logo(); ?>
                <?php else: ?>
                    <a href="<?php echo get_bloginfo(
                        'url',
                    ); ?>" class="text-xl font-bold tracking-tight text-gray-900">
                        <?php echo get_bloginfo('name'); ?>
                    </a>
                <?php endif; ?>
            </div>

            <nav class="hidden md:flex space-x-8 items-center">
                <?php wp_nav_menu([
                    'container' => false,
                    'menu_class' =>
                        'flex space-x-6 text-sm font-medium text-gray-700 hover:text-blue-600',
                    'theme_location' => 'primary',
                    'fallback_cb' => false,
                ]); ?>
            <a href="https://facebook.com">
                <img src="<?php echo get_template_directory_uri(); ?>/grafika/Facebook_Logo_Primary.png" alt="Facebook" class="h-5 w-5">
            </a>
            <a href="tel:782148687" class="ml-4 text-sm font-medium text-gray-700 hover:text-blue-600 !no-underline">
                782 148 687
            </a>
            </nav>

            

            <div class="md:hidden">
                <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>

        </div> 
    </div>
</header>

    <div id="content" class="site-content grow">
        <?php if (is_front_page()): ?>
            
        <?php endif; ?>

        <?php do_action('tailpress_content_start'); ?>
        <main>
