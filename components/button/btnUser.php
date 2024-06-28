<div class = "relative">
    <!-- icon user -->
    <div @click = "overlayShow = true; <?php if (is_user_logged_in()): ?> userDropDown = true; <?php else: ?> modalLogin = true; <?php endif; ?>"
         class = "group flex w-10 h-10 lg:w-12 lg:h-12 items-center relative justify-center rounded-full transition cursor-pointer
                            bg-[#eceeef] dark:bg-[#1b314c] hover:bg-[#334155] dark:hover:bg-[#c2c6cc]
                            text-[#334155] dark:text-white dark:hover:text-[#1b314c] hover:text-[#c2c6cc]">

            <span class = "lg:size-6 size-5"><?= get_svg_code('duotone' , 'user'); ?></span>

    </div>
    <!-- /icon user -->

    <!-- user DropDown -->
    <?= get_template_part('components/other/userDropDown') ?>
    <!-- /user DropDown -->
</div>
