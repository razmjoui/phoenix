<?php get_header(); ?>
<?php do_action('razmnixHeaders'); ?>

<div class = "main-page-wraper single-page">
    <div class = "content-section">
        <div class = "container mx-auto sm:px-4">
            <article id = "post-<?php the_ID() ?>" <?php post_class() ?>>
                <?php while (have_posts()) : the_post(); ?>


                    <div class = "post-content relative">

                        <?php the_content() ?>
                    </div>


                    <?php if (comments_open() || get_comments_number()) : ?>

                        <div class = "comments-post my-5">
                            <div class = "section-title relative mb-3">
                                <div class = "title">
                                    <div class = "flex items-center">
                                        <i class = "fal fa-comment-alt-lines ms-3"></i>
                                        <span><?= __('Comments' , 'razmnix') ?>

                                        </span>
                                    </div>
                                </div>
                            </div>


                            <?php comments_template() ?>
                        </div>

                    <?php endif; ?>


                <?php endwhile; ?>
            </article>
        </div>

    </div>


</div>


<?php do_action('razmnixFooters'); ?>
<?php get_footer(); ?>