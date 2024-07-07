<?php get_header(); ?>
<?php do_action('razmnixHeaders'); ?>


    <!-- Section 1 -->
    <section class = "bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-white px-5 py-10 md:py-32">
        <div class = "container">
            <div class = "group cursor-pointer grid grid-cols-1 md:grid-cols-2 gap-y-3 gap-x-20 md:gap-y-0 items-center">
                <div class = "flex flex-col gap-y-3 text-sm text-gray-900 dark:text-white">
                    <a title = "" href = "#">
                        <div class = "flex items-center text-sm">
                            <div class = "text-indigo-600">Management</div>
                            <div>&nbsp;&nbsp;.&nbsp;&nbsp;</div>
                            <div>5 min read</div>
                        </div>
                    </a>
                    <h2 class = "text-2xl md:text-4xl font-semibold">
                        Why Slack is Problematic and Ruining Deep Work For Staff
                    </h2>
                    <p class = "text-sm md:text-lg">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div>
                        <div class = "flex items-center md:justify-start">
                            <div class = "text-gray-600 dark:text-white ltr:mr-2 rtl:ml-2">Follow Us:</div>
                            <div class = "flex justify-between items-center gap-x-2">
                                <div class = "size-6 text-gray-600 dark:text-white content-center">
                                    <a title = "" class = "h-4 w-4" href = "#"
                                       target = "_blank"><?= razmnixIcon('fontawesome/' . "brands", "youtube") ?></a>
                                </div>
                                <div class = "size-5 text-gray-600 dark:text-white content-center">
                                    <a title = "" class = "h-4 w-4" href = "#"
                                       target = "_blank"><?= razmnixIcon('fontawesome/' . "brands", "x-twitter") ?></a>
                                </div>
                                <div class = "size-5 text-gray-600 dark:text-white content-center">
                                    <a title = "" class = "h-4 w-4" href = "#"
                                       target = "_blank"><?= razmnixIcon('fontawesome/' . "brands", "instagram") ?></a>
                                </div>
                                <div class = "size-5 text-gray-600 dark:text-white ">
                                    <a title = "" class = "h-4 w-4" href = "#"
                                       target = "_blank"><?= razmnixIcon('fontawesome/' . "brands", "linkedin-in") ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class = "overflow-hidden rounded-lg drop-shadow-lg">
                        <img src = "https://images.unsplash.com/photo-1606041011872-596597976b25?q=80&w=1589&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                             alt = "" class = "duration-300 ease-in group-hover:scale-110">
                        <div class = "absolute inset-0 bg-gray-900 opacity-10 group-hover:opacity-60 duration-800 transition ease-in"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /Section 1 -->


<?php do_action('razmnixFooters'); ?>
<?php get_footer(); ?>