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
    <script>
    // 1. Funkcja przełączająca
    function toggleDarkMode() {
        const html = document.documentElement;
        if (html.classList.contains('dark')) {
            html.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        } else {
            html.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        }
    }

    // 2. Skrypt natychmiastowy (wykonuje się zanim wyrenderuje się body)
    (function() {
        const savedTheme = localStorage.getItem('theme');
        const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

        if (savedTheme === 'dark' || (!savedTheme && systemPrefersDark)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    })();
</script>
</head>
<body <?php body_class('bg-brand-bg text-zinc-900 antialiased'); ?>>
<?php do_action('tailpress_site_before'); ?>

<div id="page" class="min-h-screen flex flex-col">
    <?php do_action('tailpress_header'); ?>

    <header id="main-header" class="sticky w-full top-0 z-50 bg-brand-bg shadow-sm transition-all duration-300 h-24 flex items-center">
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
            <a href="tel:782148687" class="ml-4 text-sm font-medium text-brand-muted hover:hover:text-[var(--brand-secondary)] transition-colors !no-underline">
                782 148 687
            </a>
          <!-- <button onclick="toggleDarkMode()" class="theme-toggle-btn">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="icon-sun">
      <path d="M12 2.25a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-1.5 0V3a.75.75 0 0 1 .75-.75ZM7.5 12a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM18.894 5.106a.75.75 0 0 0-1.061 0l-1.591 1.591a.75.75 0 1 0 1.061 1.061l1.591-1.591a.75.75 0 0 0 0-1.061ZM6.167 17.833a.75.75 0 0 1 0 1.061l-1.591 1.591a.75.75 0 0 1-1.061-1.061l1.591-1.591a.75.75 0 0 1 1.061 0ZM19.5 12a.75.75 0 0 1-.75.75H16.5a.75.75 0 0 1 0-1.5h2.25a.75.75 0 0 1 .75.75ZM7.5 12a.75.75 0 0 1-.75.75H4.5a.75.75 0 0 1 0-1.5h2.25A.75.75 0 0 1 7.5 12ZM18.894 18.894a.75.75 0 0 1 0 1.061l-1.591 1.591a.75.75 0 1 1-1.061-1.061l1.591-1.591a.75.75 0 0 1 1.061 0ZM6.167 6.167a.75.75 0 0 0 0-1.061L4.576 3.515a.75.75 0 0 0-1.061 1.061l1.591 1.591a.75.75 0 0 0 1.061 0ZM12 18.75a.75.75 0 0 1 .75.75V21.75a.75.75 0 0 1-1.5 0V19.5a.75.75 0 0 1 .75-.75Z" />
    </svg>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="icon-moon">
      <path fill-rule="evenodd" d="M9.528 1.718a.75.75 0 0 1 .162.819A8.97 8.97 0 0 0 9 6a9 9 0 0 0 9 9 8.97 8.97 0 0 0 3.463-.69.75.75 0 0 1 .981.98 10.503 10.503 0 0 1-9.694 6.46c-5.799 0-10.5-4.701-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 0 1 .818.162Z" clip-rule="evenodd" />
    </svg>
</button> -->
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
