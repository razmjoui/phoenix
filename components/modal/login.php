<div x-cloak x-show = "modalLogin" @click.away = "modalLogin = false; overlayShow = false" :class = "modalLogin ? 'z-50' : ''"
     class = "transition-all flex fixed items-center justify-center inset-0">
    <section class = "relative bg-white dark:bg-dark-930 dark:shadow-lg  py-9 sm:px-[13px] px-5 rounded-2xl shadow-sm sm:w-[467px] w-full">
        <!-- Close Btn -->
        <div @click = "overlayShow = false ; modalLogin = false"
             class = "size-10 top-0 flex items-center justify-center rtl:right-0 ltr:left-0 transition-all absolute cursor-pointer dark:bg-gray-100 dark:text-gray-800  dark:hover:text-white dark:hover:bg-dark-890 hover:bg-gray-200 text-white hover:text-gray-800 bg-dark-890 rtl:rounded-tr-lg rtl:rounded-bl-lg ltr:rounded-tl-lg ltr:rounded-br-lg ">
            <div class = "w-5 h-6 "><?= razmnixIcon('fontawesome/' . 'solid', 'xmark'); ?></div>
        </div>
        <!-- /Close Btn -->

        <!-- Info Login -->
        <pre class = "sm:text-lg text-xs text-gray-400 dark:text-gray-300 font-medium text-center "><?= RazmS\RazmnixSetting::$sloganLogin ?></pre>
        <!-- /Info Login -->

        <!-- login by email -->
        <form action = "<?= RAZMNIX_ACCOUNT_URL ?>" class = "flex flex-col my-8 gap-y-2" method = "post">
            <!-- Email input -->
            <div class = "flex flex-col">
                <label for = "username" class = "text-sm text-gray-700 dark:text-gray-100 font-normal mb-1 rtl:mr-3 ltr:ml-3">ایمیل</label>
                <input id = "username" name = "username" type = "text"
                       class = " h-10 text-left px-3 bg-gray-400 dark:bg-dark-890 dark:text-white bg-opacity-10 rounded-lg border-transparent">
            </div>
            <!-- /Email input -->

            <!-- Password input -->
            <div>
                <div class = "flex justify-between items-center">
                    <label for = "password" class = "text-sm text-gray-700 dark:text-gray-100 font-normal mb-1 mr-3 ">پسورد</label>

                    <a class = "text-xs text-blue-700 font-medium dark:text-blue-200 hover:text-white hover:font-bold"
                       href = "<?= esc_url(wp_lostpassword_url()); ?>">فراموش کرده‌اید؟</a>
                </div>

                <div x-data = "{ authPasswordVisibility : false }" class = "w-full relative">
                    <input :type = "authPasswordVisibility ? 'text' : 'password'"
                           class = " h-10 text-left px-3 dark:bg-dark-890 dark:text-white bg-gray-400 w-full bg-opacity-10 rounded-lg border-transparent"
                           type = "password" name = "password" id = "password">
                    <button type = "button" @click = "authPasswordVisibility = ! authPasswordVisibility" class = "absolute right-4 top-1/2 transform -translate-y-1/2">
                                <span x-cloak x-show = "authPasswordVisibility"><svg width = "22"
                                                                                     height = "24"
                                                                                     viewBox = "0 0 25 26"
                                                                                     fill = "none"
                                                                                     xmlns = "http://www.w3.org/2000/svg">
    <g>
        <path d = "M11.9994 10.5886C10.6694 10.5886 9.58838 11.6706 9.58838 13.0006C9.58838 14.3296 10.6694 15.4106 11.9994 15.4106C13.3294 15.4106 14.4114 14.3296 14.4114 13.0006C14.4114 11.6706 13.3294 10.5886 11.9994 10.5886ZM11.9994 16.9106C9.84238 16.9106 8.08838 15.1566 8.08838 13.0006C8.08838 10.8436 9.84238 9.08862 11.9994 9.08862C14.1564 9.08862 15.9114 10.8436 15.9114 13.0006C15.9114 15.1566 14.1564 16.9106 11.9994 16.9106Z"
              fill = "#98A3B8" fill-opacity = "0.58"></path>
        <g>
            <mask maskUnits = "userSpaceOnUse" x = "2" y = "4" width = "20" height = "18">
                <path fill-rule = "evenodd" clip-rule = "evenodd" d = "M2 4.94751H21.9998V21.0525H2V4.94751Z"
                      fill = "white"></path>
            </mask>
            <g mask = "url(#mask0_33437_4760)">
                <path fill-rule = "evenodd" clip-rule = "evenodd"
                      d = "M3.56975 12.9998C5.42975 17.1088 8.56275 19.5518 11.9998 19.5528C15.4368 19.5518 18.5697 17.1088 20.4298 12.9998C18.5697 8.89177 15.4368 6.44877 11.9998 6.44777C8.56375 6.44877 5.42975 8.89177 3.56975 12.9998ZM12.0017 21.0528H11.9978H11.9967C7.86075 21.0498 4.14675 18.1508 2.06075 13.2958C1.97975 13.1068 1.97975 12.8928 2.06075 12.7038C4.14675 7.84977 7.86175 4.95077 11.9967 4.94777C11.9987 4.94677 11.9987 4.94677 11.9998 4.94777C12.0017 4.94677 12.0017 4.94677 12.0028 4.94777C16.1388 4.95077 19.8527 7.84977 21.9387 12.7038C22.0208 12.8928 22.0208 13.1068 21.9387 13.2958C19.8537 18.1508 16.1388 21.0498 12.0028 21.0528H12.0017Z"
                      fill = "#98A3B8" fill-opacity = "0.58"></path>
            </g>
        </g>
    </g>
</svg></span>
                        <span x-cloak x-show = "! authPasswordVisibility"><svg width = "20" height = "17"
                                                                               viewBox = "0 0 20 17"
                                                                               fill = "none"
                                                                               xmlns = "http://www.w3.org/2000/svg">
    <path d = "M7.94557 10.1681C7.41849 9.64191 7.09766 8.92691 7.09766 8.12482C7.09766 6.51791 8.39199 5.22266 9.99799 5.22266C10.7927 5.22266 11.5242 5.54441 12.0422 6.07057"
          stroke = "#98A3B8" stroke-opacity = "0.58" stroke-width = "1.5" stroke-linecap = "round"
          stroke-linejoin = "round"></path>
    <path d = "M12.8451 8.64062C12.6324 9.82312 11.7011 10.7563 10.5195 10.9708" stroke = "#98A3B8"
          stroke-opacity = "0.58" stroke-width = "1.5" stroke-linecap = "round" stroke-linejoin = "round"></path>
    <path d = "M5.09911 13.0145C3.64436 11.8724 2.41236 10.204 1.51953 8.1241C2.42153 6.03502 3.66178 4.35752 5.1257 3.20619C6.58045 2.05485 8.25887 1.42969 9.9987 1.42969C11.7486 1.42969 13.4261 2.06402 14.89 3.2236"
          stroke = "#98A3B8" stroke-opacity = "0.58" stroke-width = "1.5" stroke-linecap = "round"
          stroke-linejoin = "round"></path>
    <path d = "M16.8241 5.24023C17.4548 6.07807 18.0094 7.04515 18.4759 8.12407C16.6729 12.3013 13.4865 14.8176 9.99678 14.8176C9.2057 14.8176 8.42561 14.6892 7.67578 14.439"
          stroke = "#98A3B8" stroke-opacity = "0.58" stroke-width = "1.5" stroke-linecap = "round"
          stroke-linejoin = "round"></path>
    <path d = "M17.229 0.894531L2.76953 15.354" stroke = "#98A3B8" stroke-opacity = "0.58" stroke-width = "1.5"
          stroke-linecap = "round" stroke-linejoin = "round"></path>
</svg></span>
                    </button>
                </div>
            </div>
            <!-- /Password input -->

            <!-- Nonce -->
            <?php wp_nonce_field('woocommerce-login') ?>
            <!-- /Nonce -->

            <!-- Login button -->
            <input name = "login" type = "submit" value = "<?= esc_html__('ورود', 'phoenix') ?>"
                   class = "bg-blue-700 rounded-lg dark:hover:bg-transparent text-white h-11 w-full flex items-center justify-center font-medium border-2 mt-6 border-blue-700 hover:bg-white hover:text-blue-700 transition duration-200">
            <!-- /Login button -->
        </form>
        <!-- /login by email -->

        <!-- divider -->
        <div class = "relative flex justify-center mb-8">
            <h3 class = "text-xs text-gray-700 dark:text-gray-200 z-10 relative dark:bg-dark-930 bg-white px-3">
                یا ورود به حساب با
            </h3>
            <i class = "absolute top-1/2 transform -translate-y-1/2 z-0 right-0 w-full flex border-t border-gray-600 dark:border-gray-200 border-opacity-30"></i>
        </div>
        <!-- /divider -->

        <!-- login by social -->
        <div class = "grid sm:grid-cols-2 grid-cols-1 gap-4">
            <!-- login by google -->
            <a href = "/login/google"
               class = "bg-gray-200 dark:hover:bg-dark-890 border border-transparent dark:hover:border-white dark:bg-dark-890 dark:text-white hover:text-gray-700 text-gray-500 rounded-lg shadow-sm h-14 px-4 flex items-center sm:justify-start justify-center hover:bg-blue-700 group hover:bg-opacity-20 transition duration-200">
                <svg width = "25" height = "19" viewBox = "0 0 25 19" fill = "none"
                     xmlns = "http://www.w3.org/2000/svg">
                    <path d = "M2.52391 18.8209H6.34174V9.54903L0.887695 5.4585V17.1847C0.887695 18.0901 1.62126 18.8209 2.52391 18.8209Z"
                          fill = "#4285F4"></path>
                    <path d = "M19.4297 18.8209H23.2475C24.1529 18.8209 24.8837 18.0873 24.8837 17.1847V5.4585L19.4297 9.54903"
                          fill = "#34A853"></path>
                    <path d = "M19.4297 2.45921V9.54947L24.8837 5.45894V3.27732C24.8837 1.25387 22.5739 0.100341 20.9568 1.31386"
                          fill = "#FBBC04"></path>
                    <path d = "M6.34766 9.54924V2.45898L12.8925 7.36762L19.4374 2.45898V9.54924L12.8925 14.4579"
                          fill = "#EA4335"></path>
                    <path d = "M0.886719 3.27732V5.45894L6.34076 9.54947V2.45921L4.81363 1.31386C3.19378 0.100341 0.886719 1.25387 0.886719 3.27732Z"
                          fill = "#C5221F"></path>
                </svg>
                <span class = "mr-3 text-gray-700 text-15 font-semibold dark:text-gray-300 dark:group-hover:text-white group-hover:text-gray-900 transition duration-200">
                ورود با گوگل
            </span>
            </a>
            <!-- /login by google -->
            <!-- login by linkedin -->
            <a href = "/login/linkedin"
               class = "bg-gray-200 dark:hover:bg-dark-890 border border-transparent dark:hover:border-white dark:bg-dark-890 dark:text-white hover:text-gray-700 text-gray-500 rounded-lg shadow-sm h-14 px-4 flex items-center sm:justify-start justify-center hover:bg-blue-700 group hover:bg-opacity-20 transition duration-200">
                <svg class = "text-blue-700" width = "25" height = "25" viewBox = "0 0 25 25" fill = "none"
                     xmlns = "http://www.w3.org/2000/svg">
                    <path d = "M20.4676 20.9728H16.9118V15.4042C16.9118 14.0762 16.888 12.3668 15.0624 12.3668C13.2103 12.3668 12.9269 13.8136 12.9269 15.3074V20.9724H9.37112V9.52098H12.7847V11.0859H12.8326C13.5276 9.89754 14.8247 9.18511 16.2006 9.23621C19.8046 9.23621 20.4692 11.6067 20.4692 14.6908L20.4676 20.9728ZM5.35891 7.95562C4.22689 7.95562 3.29495 7.02422 3.29495 5.8922C3.29495 4.76017 4.22646 3.82867 5.35848 3.82867C6.4904 3.82867 7.4218 4.75996 7.42201 5.89177C7.42201 7.02358 6.49072 7.95552 5.35891 7.95562ZM7.1368 20.9728H3.57725V9.52098H7.1368V20.9728ZM22.2403 0.526519H1.79034C0.83039 0.515678 0.0312315 1.29626 0.0195312 2.25622V22.7911C0.0308021 23.7516 0.829853 24.533 1.79034 24.5227H22.2403C23.2031 24.5348 24.005 23.7535 24.0179 22.7911V2.25482C24.005 1.29283 23.2021 0.513853 22.2403 0.526519Z"
                          fill = "currentColor"></path>
                </svg>
                <span class = "mr-3 text-gray-700 text-15 font-semibold dark:text-gray-300 dark:group-hover:text-white group-hover:text-gray-900 transition duration-200">
                ورود با لینکدین
            </span>
            </a>
            <!-- /login by linkedin -->
        </div>
        <!-- /login by social -->

    </section>
</div>