<div x-cloak x-data = "themeChanger()" @click = "toggleThemes();isDarkness = !isDarkness" class = "toggleTheme cursor-pointer">
    <div :class = "isDark ? 'toggleThemeDark ': 'toggleThemeLight' "
         class = " *:size-5 flex lg:w-12 lg:h-12 size-10 items-center relative justify-center rounded-full transition cursor-pointer bg-[#eceeef] dark:bg-[#1b314c] hover:bg-[#334155] dark:hover:bg-[#c2c6cc] text-[#334155] dark:text-white dark:hover:text-[#1b314c] hover:text-[#c2c6cc]">
        <span :class = "!isDarkness ? 'hidden ': '' "><?= get_svg_code( ''  ,  'moon' ); ?></span>
        <span :class = "isDarkness ? 'hidden ': '' "><?= get_svg_code( 'duotone'  ,  'sun-bright' ); ?></span>
    </div>
</div>

