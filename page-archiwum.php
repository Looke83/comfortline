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

<div class="container mx-auto py-12">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <?php // Ustalamy numer aktualnej strony


        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = [
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 12,
            'paged' => $paged,
            'orderby' => 'date',
            'order' => 'DESC',
        ];
        $all_posts_query = new WP_Query($args);
        if ($all_posts_query->have_posts()):
            while ($all_posts_query->have_posts()):
                $all_posts_query->the_post(); ?>
            
            <article class="flex flex-col border border-gray-200 rounded-lg overflow-hidden bg-white shadow-sm hover:shadow-md transition-shadow">
                <a href="<?php the_permalink(); ?>" class="aspect-video block overflow-hidden bg-gray-100">
                    <?php if (has_post_thumbnail()):
                        the_post_thumbnail('medium', [
                            'class' => 'w-full h-full object-contain',
                        ]);
                    else:
                         ?>
                        <div class="w-full h-full flex items-center justify-center text-gray-400 text-xs italic">Brak zdjęcia</div>
                    <?php
                    endif; ?>
                </a>

                <div class="p-6 flex flex-col flex-grow">
                    <h2 class="text-2xl font-bold mb-1 leading-tight">
                        <a href="<?php the_permalink(); ?>" class="hover:text-blue-600 !no-underline text-blue-800"><?php the_title(); ?></a>
                    </h2>
                    <div class="text-gray-600 text-sm mb-6 flex-grow">
                        <?php echo wp_trim_words(
                            get_the_excerpt(),
                            15,
                            '...',
                        ); ?>
                    </div>
                    <div class="flex justify-end border-t pt-4">
                        <a href="<?php the_permalink(); ?>" class="text-blue-600 font-bold text-sm uppercase">Czytaj więcej &rarr;</a>
                    </div>
                </div>
            </article>

        <?php
            endwhile; ?>
    </div>

    <div class="mt-12 flex justify-center gap-4">
        <?php echo paginate_links([
            'total' => $all_posts_query->max_num_pages,
            'current' => $paged,
            'mid_size' => 2,
            'prev_text' =>
                '<span class="px-4 py-2 bg-gray-100 rounded hover:bg-gray-200 transition-colors">&laquo; Poprzednia</span>',
            'next_text' =>
                '<span class="px-4 py-2 bg-gray-100 rounded hover:bg-gray-200 transition-colors">Następna &raquo;</span>',
            'type' => 'plain',
        ]); ?>
    </div>

    <?php wp_reset_postdata();
        else:
             ?>
        <p class="col-span-full text-center py-12 text-gray-500">Brak postów do wyświetlenia.</p>
    <?php
        endif;
        ?>
</div>


<?php get_footer(); ?>
