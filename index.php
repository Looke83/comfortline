<?php
/**
 * Main template file for displaying posts.
 *
 * @package TailPress
 */

get_header(); ?>

<!-- Hero Section -->
-- <section class="w-full h-[calc(100vh-2.5rem)]" style="background-image: url('<?php echo get_template_directory_uri(); ?>/grafika/hero.jpg'); background-size: cover; background-position: center;"> -->
        <div class="mx-auto h-full px-10 md:px-32 relative z-10">
            <div class="flex h-full flex-col justify-start pt-40 md:pt-50 max-w-2xl">
                <p class="text-white text-sm md:text-base uppercase tracking-widest font-light">
                    BIURO RACHUNKOWE | KSIĘGOWOŚĆ
                </p>
                <div class="w-1/5 h-[2px] bg-red-700 mt-0.3 mb-10"></div>

                <h1 class="text-white text-2xl md:text-6xl font-bold leading-tight">
                    Z Księgowością Czuj Się <br> 
                    Komfortowo
                </h1>            
            </div>
        </div> 
    </div>     
</section>

<!-- pasek pod hero -->
<aside>
<div class="absolute bottom-0 left-0 w-full h-4 flex">
    
    <div class="bg-[#001529] w-1/4 h-full"></div>

    <div class="bg-[#800020] flex-1 h-full" style="clip-path: polygon(0 0, 100% 0, 98% 100%, 0% 100%);"></div>
</div>
</aside>

<!-- About Section -->
<section class="mx-auto px-4 md:px-36 py-24 md:py-36 text-xl md:text-2xl text-red-800 font-medium text-justify md:text-center">
    Działamy od 2022 roku, wspierając przedsiębiorców na każdym etapie prowadzenia działalności — od rejestracji firmy, przez kompleksową 
obsługę księgową, aż po rozliczenia podatkowe i pełną obsługę kadrowo-płacową. Nasze biuro to nie tylko liczby i paragrafy — to przede 
wszystkim ludzie, którym zależy na Twoim spokoju i sukcesie
</section>

<!-- Oferty -->
<section class="bg-gray-200 px-4 md:px-36 py-16 md:py-20 flex flex-col md:flex-row">
    <div class="w-full md:w-1/2">
        <p class="text-xl md:text-2xl text-blue-950 pt-2 md:pt-8">
            BIURO RACHUNKOWE | KSIĘGOWOŚĆ
        </p>
        <p class="text-3xl md:text-6xl font-medium text-red-800 mt-2 md:mt-4">
            Jakie usługi oferujemy?
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-24 gap-x-0 mt-12 md:mt-24 md:-ml-20">
            <div class="justify-items-center ">
                <img src="<?php echo get_template_directory_uri(); ?>/grafika/uslugi.png" alt="Icon 1" class="w-20 h-20 mb-4">
                <h3 class="font-bold text-red-800">Rejestracja firm i spółek z o.o.</h3>
            </div>
            <div class="justify-items-center ">
                <img src="<?php echo get_template_directory_uri(); ?>/grafika/uslugi.png" alt="Icon 1" class="w-20 h-20 mb-4">
                <h3 class="font-bold text-red-800">Rejestracja firm i spółek z o.o.</h3>
            </div>
            <div class="justify-items-center ">
                <img src="<?php echo get_template_directory_uri(); ?>/grafika/uslugi.png" alt="Icon 1" class="w-20 h-20 mb-4">
                <h3 class="font-bold text-red-800">Rejestracja firm i spółek z o.o.</h3>
            </div>
            <div class="justify-items-center ">
                <img src="<?php echo get_template_directory_uri(); ?>/grafika/uslugi.png" alt="Icon 1" class="w-20 h-20 mb-4">
                <h3 class="font-bold text-red-800">Rejestracja firm i spółek z o.o.</h3>
            </div>
        </div>       
    </div>
    <div class="w-full md:w-1/2 hidden md:block">
        <img src="<?php echo get_template_directory_uri(); ?>/grafika/vat.jpg" alt="Usługi" class="w-full h-auto mt-4 md:mt-8 px-4 md:px-12">
    </div>
</section>

<!-- Zaufanie -->
<section class="bg-red-800 px-4 md:px-36 py-16 md:py-20 flex flex-col md:flex-row">
     <div class="w-full md:w-1/2 hidden md:block">
        <img src="<?php echo get_template_directory_uri(); ?>/grafika/vat.jpg" alt="Usługi" class="w-full h-auto mt-4 md:mt-8 px-4 md:px-12">
    </div>
    <div class="w-full md:w-1/2 ">
        <p class="text-xl md:text-2xl  pt-2 md:pt-8 text-white">
            BIURO RACHUNKOWE | KSIĘGOWOŚĆ
        </p>
        <p class="text-3xl md:text-6xl font-medium mt-8 md:mt-4 text-white">
            Dlaczego warto nam zaufać?
        </p>
        <p class="text-medium md:text-2xl font-light mt-16 md:mt-24 text-white leading-loose">
            Indywidualne podejście – znamy naszych klientów, ich branże i potrzeby.
Stały kontakt i dostępność – jesteśmy zawsze, gdy potrzebujesz wsparcia.
Transparentność i rzetelność – mówimy jasno, działamy uczciwie.
Bezpieczeństwo danych – Twoje dokumenty są u nas w dobrych rękach.
Zaangażowanie – traktujemy Twoją firmę jak własną.
        </p>      
    </div>   
</section>

<!-- rejestracja firm -->
<section class=" px-4 md:px-36 py-16 md:py-20">
    <p class="text-xl md:text-2xl  pt-2 md:pt-8 text-blue-800">
            BIURO RACHUNKOWE | KSIĘGOWOŚĆ
    </p>
    <p class="text-3xl md:text-6xl font-medium mt-8 md:mt-4 text-red-800">
            Rejestracja firm i <span class="whitespace-nowrap">spółek z o.o.</span>
    </p>
    <p class="text-medium md:text-2xl font-light mt-4 md:mt-8">
Rozpoczęcie własnej działalności to ekscytujący krok — ale formalności potrafią przytłoczyć. Dlatego oferujemy kompleksową 
pomoc w rejestracji firmy, tak byś mógł skupić się na tym, co najważniejsze: rozwijaniu swojego biznesu.
    <p class="text-2xl md:text-4xl font-medium mt-12 md:mt-16 text-red-800">
Co oferujemy?
    </p>
    <p class="text-medium md:text-2xl font-light mt-2 md:mt-4">
Doradztwo w wyborze formy prawnej – jednoosobowa działalność, spółka cywilna, jawna, z o.o.? Dobierzemy najlepsze rozwiązanie 
dla Twoich celów.
Przygotowanie i złożenie dokumentów – zajmiemy się wnioskami do CEIDG, KRS, ZUS, US i innych instytucji.
Pomoc w wyborze formy opodatkowania – ryczałt, zasady ogólne, podatek liniowy? Wyjaśnimy różnice i doradzimy optymalne ro
związanie.
Rejestracja VAT i VAT-UE – jeśli planujesz współpracę z kontrahentami zagranicznymi lub przekroczysz limity sprzedaży.
Zakładanie konta firmowego, pieczątki, PKD – doradzimy w kwes ach praktycznych i formalnych.
    </p>
    <p class="text-2xl md:text-4xl font-medium mt-12 md:mt-16 text-red-800">
Dlaczego warto?
    </p>
    <p class="text-medium md:text-2xl font-light mt-2 md:mt-4">    
Oszczędność czasu i nerwów – nie musisz studiować przepisów ani martwić się o błędy.
Bezpieczny start – unikniesz pomyłek, które mogą kosztować Cię pieniądze lub opóźnić rozpoczęcie działalności.
Indywidualne podejście – każda firma jest inna, dlatego dopasowujemy rozwiązania do Twojej branży i planów.
Stałe wsparcie – po rejestracji możesz liczyć na naszą pomoc w prowadzeniu księgowości, rozliczeniach i kadrach.
</p>          
</section> 

<!-- prowadzenie kompleksowej księgowości -->
<section class=" px-4 md:px-36 py-16 md:py-20 bg-red-800">
    <p class="text-xl md:text-2xl  pt-2 md:pt-8 text-blue-950">
            BIURO RACHUNKOWE | KSIĘGOWOŚĆ
    </p>
    <p class="text-3xl md:text-6xl font-medium mt-8 md:mt-4 text-white">
            Prowadzenie kompleksowej księgowości
    </p>
    <p class="text-medium md:text-2xl font-light mt-4 md:mt-8 text-white">
Założenie firmy lub spółki z ograniczoną odpowiedzialnością to ważny krok w rozwoju zawodowym. Dla wielu przedsiębiorców to 
także moment pełen formalności, wątpliwości i pytań. Nasze biuro przejmuje cały ciężar procedur, abyś mógł rozpocząć działalność 
szybko, bezpiecznie i bez stresu.
    <p class="text-2xl md:text-4xl font-medium mt-12 md:mt-16 text-blue-950 mb-8">
Co obejmuje nasza usługa?
    </p>
    <p class="font-bold text-lg md:text-2xl text-white">Analiza Twoich potrzeb biznesowych</p> 
    <p class="font-normal text-base md:text-xl mt-2 opacity-90 text-white">Doradzamy, czy lepszym rozwiązaniem będzie jednoosobowa działalność, czy spółka z o.o. — bierzemy pod uwagę ryzyko, koszty, 
    podatki i specyfikę branży.</p>
    <p class="font-bold text-lg md:text-2xl text-white mt-8 md:mt-12">Kompletowanie i przygotowanie dokumentów</p> 
    <p class="font-normal text-base md:text-xl mt-2 opacity-90 text-white">Sporządzamy umowę spółki, wnioski do KRS, CEIDG, zgłoszenia do ZUS i US. Dbamy o poprawność formalną, aby uniknąć 
            opóźnień.</p>
    <p class="font-bold text-lg md:text-2xl text-white mt-8 md:mt-12">Rejestracja spółki z o.o. w systemie S24 lub tradycyjnie</p>
    <p class="font-normal text-base md:text-xl mt-2 opacity-90 text-white">W zależności od Twoich potrzeb i rodzaju wspólników dobieramy najkorzystniejszą formę rejestracji.</p>
    <p class="font-bold text-lg md:text-2xl text-white mt-8 md:mt-12">Wsparcie w wyborze formy opodatkowania</p>
    <p class="font-normal text-base md:text-xl mt-2 opacity-90 text-white">Wyjaśniamy różnice między CIT, ryczałtem, skalą czy liniowym PIT — i wskazujemy, co będzie najbardziej opłacalne.</p>
    <p class="font-bold text-lg md:text-2xl text-white mt-8 md:mt-12">Rejestracja VAT i VAT-UE</p> 
    <p class="font-normal text-base md:text-xl mt-2 opacity-90 text-white">Przygotowujemy pełną dokumentację, a w razie potrzeby pomagamy w wyjaśnieniach z urzędem skarbowym.</p>
    <p class="font-bold text-lg md:text-2xl text-white mt-8 md:mt-12">Pomoc w organizacji pierwszych kroków</p>  
    <p class="font-normal text-base md:text-xl mt-2 opacity-90 text-white">PKD, konto firmowe, regulaminy, umowy, zgłoszenia — podpowiadamy, co jest konieczne, a co warto zrobić, by firma działała 
            sprawnie od pierwszego dnia.</p>
</section> 

<!-- tutaj ewentualnie sekcja na posty -->


<?php get_footer();
