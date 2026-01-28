<article id="post-<?php the_ID(); ?>" <?php post_class('w-full'); ?>>
    <header class="flex flex-col text-center"> <h1 class="mt-6 text-5xl font-medium tracking-tight [text-wrap:balance] text-zinc-950 sm:text-6xl uppercase italic">
            <?php the_title(); ?>
        </h1>

    </header>

   <?php if (has_post_thumbnail()): ?>
        <div class="mt-10 sm:mt-20 flex justify-center bg-zinc-50 rounded-4xl overflow-hidden">
            <?php the_post_thumbnail('full', [
                'class' =>
                    'w-full h-auto max-h-[50vh] object-contain object-center',
            ]); ?>
        </div>
    <?php endif; ?>

    <div class="entry-content mt-10 sm:mt-20 prose prose-xl max-w-none">
        <?php the_content(); ?>
    </div>
    <div class="flex justify-center mt-10 text-right">
        <a href="<?php echo esc_url(
            get_permalink(get_page_by_path('archiwum')),
        ); ?>" class="inline-flex items-center gap-2 px-6 py-3 bg-red-800 text-white text-sm font-bold uppercase tracking-widest rounded-full hover:bg-zinc-800 hover:shadow-lg transform hover:-translate-x-2 transition-all duration-300 group">
        
        <svg xmlns="http://www.w3.org/2000/svg" 
             class="h-5 w-5 transition-transform duration-300" 
             fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>

        Powrót
    </a>
</article>