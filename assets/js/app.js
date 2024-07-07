let isDark =  localStorage.getItem('color-theme') === 'dark' || (!localStorage.getItem('color-theme') && window.matchMedia('(prefers-color-scheme: dark)').matches);
function themeChanger() {
    return {
        isDark:isDark,
        toggleThemes() {
            this.isDark = !this.isDark;
            document.documentElement.classList.toggle('dark', this.isDark);
            localStorage.setItem('color-theme', this.isDark ? 'dark' : 'light');
        },
        updateThemeOnLoad() {
            this.isDark = localStorage.getItem('color-theme') === 'dark' || (!localStorage.getItem('color-theme') && window.matchMedia('(prefers-color-scheme: dark)').matches);
            if (this.isDark) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        }
    };
}

const theme = themeChanger();
theme.updateThemeOnLoad();
