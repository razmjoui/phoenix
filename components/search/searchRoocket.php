<form action = "<?php echo esc_url(home_url('/')) ?>"
      x-data = "{ searchBox : false }"
      x-bind:class = "searchBox ? 'z-50 ': ''"
      class = "items-center relative w-6/12 mx-auto lg:flex hidden "
      @click.away = "searchBox = false" xmlns:x-bind = "http://www.w3.org/1999/xhtml">

    <input x-data = "" @click = "overlayShow = true; searchBox = true" name = "s"
           type = "text"
           placeholder = "<?= Razm\RazmnixGetOptions::$headerSearchPlace ?>"
           class = "w-full py-4 bg-[#eceeef] rounded-xl rtl:pr-12 ltr:pl-12 dark:text-white dark:bg-[#1b314c] placeholder-[#64748b] dark:placeholder-white text-xs border-none">
    <input autocomplete="off" type = "hidden" name = "post_type" value = "product"/>
    <button title="Submit" type = "submit"
            class = "absolute rtl:right-5 ltr:left-5 ltr:rotate-90 text-[#64748b] dark:text-white size-4">
        <?= get_svg_code('duotone' , 'magnifying-glass'); ?>
    </button>

    <div x-cloak x-show = "searchBox" class = "absolute rtl:left-5 ltr:right-5 size-5 animate-spin">
        <?= get_svg_code('duotone' , 'spinner'); ?>
    </div>
</form>


