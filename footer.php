<?php
/**
 * Theme footer template.
 *
 * @package TailPress
 */
?>
        </main>

        <?php do_action('tailpress_content_end'); ?>
    </div>

    <?php do_action('tailpress_content_after'); ?>

    <footer id="colophon" class="bg-gray-100" role="contentinfo">
    <p class="text-center text-xl md:text-4xl text-red-800 pt-16 font-bold">Kontakt</p>
    <div class="py-12 px-4">
        
      <div class="grid grid-cols-1 md:grid-cols-3 mb-12 items-stretch">
    
    <div class="flex flex-col justify-center text-center bg-red-800 min-h-60 p-6">
        <h3 class="text-lg md:text-2xl font-bold text-white mb-4 uppercase">Godziny otwarcia biura:</h3>
        <p class="text-base md:text-lg text-white">
            ul. Fdfskjh 123<br/>
            09-300 Żuromin<br/>
            Poniedziałek - piątek 8:00-16:00
        </p>
    </div>

    <div class="flex flex-col justify-center text-center bg-neutral-400 min-h-60 p-6">
        <h3 class="font-bold text-blue-950 mb-4 uppercase">Usługi</h3>
        <p class="text-sm text-gray-800">Rejestracja spółek, kadry, płace oraz pełna księgowość.</p>
    </div>

    <div class="flex flex-col justify-center text-center bg-blue-950 min-h-60 p-6">
        <h3 class="font-bold text-white mb-4 uppercase">Kontakt</h3>
        <p class="text-sm text-gray-300">
            ul. Przykładowa 12, Warszawa<br>
            <span class="font-semibold text-white">biuro@domena.pl</span>
        </p>
    </div>

</div>
        </div>

        <div class="border-t border-gray-300 pt-10 flex flex-col items-center text-center">
            
            <div class="mb-6">
                <img src="<?php echo get_template_directory_uri(); ?>/grafika/logo.png" alt="Logo" class="h-16 w-auto mx-auto">
            </div>

            <div class="text-xs text-zinc-600 space-y-2 md:space-y-0 md:space-x-4 flex flex-col md:flex-row">
                <span>
                    &copy; <?php echo esc_html(
                        date_i18n('Y'),
                    ); ?> - <?php bloginfo('name'); ?>
                </span>
                <span class="hidden md:inline pb-4">|</span> <span>
                    Projekt i wykonanie: <a href="https://way-it.pl" target="_blank" class="text-blue-400 hover:text-red-800 font-medium transition !no-underline">way-IT Łukasz Kufel</a>
                </span>
            </div>

        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
