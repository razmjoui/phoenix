<div x-cloak x-data = "themeChanger()" @click = "toggleThemes();isDarkness = !isDarkness" class = "toggleTheme cursor-pointer mb-5">
    <div class = "group flex items-center ">
        <div :class = "isDark ? 'toggleThemeDark ': 'toggleThemeLight' "
             class = "flex lg:w-12 lg:h-12 size-10 items-center relative justify-center rounded-full transition cursor-pointer bg-[#eceeef] dark:bg-[#1b314c] hover:bg-[#334155] dark:hover:bg-[#c2c6cc] text-[#334155] dark:text-white dark:hover:text-[#1b314c] hover:text-[#c2c6cc]">
            <span class = "hidden dark:flex size-5"><?= razmnixIcon( 'phoenix', 'moon' ); ?></span>
            <span class = "dark:hidden size-5"><?= razmnixIcon('fontawesome/' .  'duotone', 'sun-bright' ); ?></span>
        </div>
        <span class = "mr-2 dark:text-gray-200 text-[#334155] cursor-pointer hidden dark:flex">تم تاریک</span>
        <span class = "mr-2 dark:text-gray-200 text-[#334155] cursor-pointer dark:hidden" >تم روشن</span>
    </div>
</div>


