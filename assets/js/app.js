function themeChanger() {
    return {
        isDark: localStorage.getItem(
            'color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
            '(prefers-color-scheme: dark)').matches),
        toggleThemes() {
            this.isDark = !this.isDark;
            document.documentElement.classList.toggle('dark', this.isDark);
            localStorage.setItem('color-theme', this.isDark ? 'dark' : 'light');
        },
        updateThemeOnLoad() {
            if (this.isDark) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        }
    }
}
const theme = themeChanger();



