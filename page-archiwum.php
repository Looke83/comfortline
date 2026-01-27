<?php
/*
Template Name: Strona Archiwum 
*/
get_header(); ?>
<section class="relative w-full h-[calc(100dvh-6rem)] overflow-hidden">
    <div class="absolute inset-0 z-0" style="background-image: url('<?php echo get_template_directory_uri(); ?>/grafika/hero.jpg'); background-size: cover; background-position: center;"></div>

    <div class="absolute inset-0 bg-[#001529]/60 z-10"></div>

    <div class="relative z-20 h-full px-10 md:px-32 flex flex-col justify-start pt-40 md:pt-50">
        <div class="max-w-2xl text-left"> 
            <p class="text-white text-sm md:text-base uppercase tracking-widest font-light">
                BIURO RACHUNKOWE | KSIĘGOWOŚĆ
            </p>
            <div class="w-1/5 h-[2px] bg-red-700 mt-2 mb-10"></div>
            <h1 class="text-white text-4xl md:text-6xl font-bold leading-tight">
                Z Księgowością Czuj Się <br> 
                Komfortowo
            </h1>            
        </div>
    </div>
</section>

<div class="w-full h-4 flex">
    <div class="bg-[#001529] w-1/4 h-full"></div>
    <div class="bg-[#800020] flex-1 h-full" style="clip-path: polygon(0 0, 100% 0, 98% 100%, 0% 100%);"></div>
</div>

<!-- pasek pod hero -->
<aside>

</aside>

<!-- About Section -->
<section class="mx-auto px-4 md:px-36 py-24 md:py-36 text-xl md:text-2xl text-red-800 font-medium text-justify md:text-center">
    Działamy od 2022 roku, wspierając przedsiębiorców na każdym etapie prowadzenia działalności — od rejestracji firmy, przez kompleksową 
obsługę księgową, aż po rozliczenia podatkowe i pełną obsługę kadrowo-płacową. Nasze biuro to nie tylko liczby i paragrafy — to przede 
wszystkim ludzie, którym zależy na Twoim spokoju i sukcesie
</section>
<?php get_footer();
