<div x-cloak x-data = "themeChanger()" @click = "toggleThemes()" class = "flex mb-5"
     xmlns:x-bind = "http://www.w3.org/1999/xhtml">
    <div class = "group flex items-center ">
        <button class = "flex lg:w-12 lg:h-12 size-10 items-center relative justify-center rounded-full transition cursor-pointer bg-[#eceeef] dark:bg-[#1b314c] hover:bg-[#334155] dark:hover:bg-[#c2c6cc] text-[#334155] dark:text-white dark:hover:text-[#1b314c] hover:text-[#c2c6cc]">
                    <span x-bind:class = "!isDark ? 'hidden ': '' " class = "size-5">
                    <svg viewBox = "0 0 20 21" fill = "currentColor" xmlns = "http://www.w3.org/2000/svg">
                        <path fill-rule = "evenodd" clip-rule = "evenodd"
                              d = "M19.9358 14.3652C20.0691 14.0415 19.9906 13.6679 19.7389 13.4276C19.4872 13.1873 19.115 13.1308 18.8051 13.2857C17.7584 13.8091 16.5801 14.1034 15.3317 14.1034C10.9835 14.1034 7.45846 10.5246 7.45846 6.1098C7.45846 4.32254 8.0352 2.67449 9.01033 1.34372C9.21644 1.06244 9.22917 0.680892 9.04229 0.386091C8.85541 0.0912907 8.50809 -0.054977 8.17055 0.0189828C3.50017 1.04235 2.17361e-07 5.25905 0 10.3077C-2.50276e-07 16.1208 4.64155 20.8333 10.3672 20.8333C14.6778 20.8333 18.372 18.1625 19.9358 14.3652Z"
                              fill = "currentColor"></path>
                        <path fill-rule = "evenodd" clip-rule = "evenodd"
                              d = "M13.0928 3.67116L13.7596 1.84183C13.9751 1.25035 14.4797 0.939795 14.9987 0.910156C15.5177 0.939795 16.0222 1.25035 16.2378 1.84183L16.9045 3.67116L18.7063 4.34807C19.9329 4.8089 19.9329 6.57032 18.7063 7.03114L16.9045 7.70806L16.2378 9.53738C16.0222 10.1289 15.5177 10.4394 14.9987 10.4691C14.4797 10.4394 13.9751 10.1289 13.7596 9.53738L13.0928 7.70806L11.2911 7.03114C10.0644 6.57032 10.0644 4.8089 11.2911 4.34807L13.0928 3.67116Z"
                              fill = "currentColor" fill-opacity = "0.4"></path>
                    </svg>
                    </span>
            <span x-bind:class = "isDark ? 'hidden ': '' " class = "size-6">
        <?= get_svg_code('duotone' , 'sun-bright'); ?>
    </span>
        </button>
        <span class = "mr-2 dark:text-gray-200 text-[#334155] cursor-pointer" x-show="isDark">تم تاریک</span>
        <span class = "mr-2 dark:text-gray-200 text-[#334155] cursor-pointer" x-show="!isDark">تم روشن</span>
    </div>
</div>