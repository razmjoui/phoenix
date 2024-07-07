<?php use Razm\RazmnixGetOptions; ?>



<!-- Mask -->
<?= RazmnixGetOptions::$backgroundMaskExtension ? '<div class = "w-full h-screen absolute top-0 right-0 bg-gradient-to-t from-transparent to-white/15 z-[-1]"></div>' :''?>
<!-- /Mask -->

<!-- Side Menu -->
<?= get_template_part('components/side/roocket')?>
<!-- /Side Menu -->


<!-- Modal  Login -->
<?= RazmnixGetOptions::$modalLoginExtension ? get_template_part('components/modal/login') :''?>
<!-- /Modal  Login -->


<!-- Overlay -->
<?= RazmnixGetOptions::$modalLoginExtension ? get_template_part('components/other/overlayShow') :''?>
<!-- /Overlay -->

<?php do_action('razmnixTopFooter'); ?>

<?php wp_footer(); ?>

<style>
    :root {
        --headerLogoWidth: <?= RazmnixGetOptions::$headerLogoWidth?? '208' ?>px;
        --headerLogoWidthTablet: <?= RazmnixGetOptions::$headerLogoWidthTablet?? '160' ?>px;
        --headerLogoWidthMobile: <?= RazmnixGetOptions::$headerLogoWidthMobile?? '96' ?>px;
    }

</style>
</body>
</html>