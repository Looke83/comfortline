window.addEventListener('load', function () {
    let mainNavigation = document.getElementById('primary-navigation')
    let mainNavigationToggle = document.getElementById('primary-menu-toggle')

    if(mainNavigation && mainNavigationToggle) {
        mainNavigationToggle.addEventListener('click', function (e) {
            e.preventDefault()
            mainNavigation.classList.toggle('hidden')
        })
    }
})

window.onscroll = function() {
    const header = document.getElementById("main-header");
    const logo = document.getElementById("header-logo");

    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        // Efekt po przewinięciu
        header.classList.remove("h-24");
        header.classList.add("h-16", "shadow-md");
        logo.classList.replace("text-2xl", "text-xl");
    } else {
        // Powrót do oryginału
        header.classList.remove("h-16", "shadow-md");
        header.classList.add("h-24");
        logo.classList.replace("text-xl", "text-2xl");
    }
};