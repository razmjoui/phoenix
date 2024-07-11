function themeChanger() {
    let isDark = localStorage.getItem('color-theme') === 'dark' || (!localStorage.getItem('color-theme') && window.matchMedia('(prefers-color-scheme: dark)').matches);

    function toggleThemes() {
        isDark = !isDark;
        document.documentElement.classList.toggle('dark', isDark);
        localStorage.setItem('color-theme', isDark ? 'dark' : 'light');
    }

    function updateThemeOnLoad() {
        isDark = localStorage.getItem('color-theme') === 'dark' || (!localStorage.getItem('color-theme') && window.matchMedia('(prefers-color-scheme: dark)').matches);
        if (isDark) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    }

    return {
        isDark,
        toggleThemes,
        updateThemeOnLoad
    };
}

const theme = themeChanger();
theme.updateThemeOnLoad();



let elementorElements = document.querySelectorAll('.elementor-element');
elementorElements.forEach(function(element) {
    element.setAttribute(':class', "isDarkness ? 'razmnixDark' : 'razmnixLight'")
});


