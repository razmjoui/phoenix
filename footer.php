<?php use RazmS\RazmnixSetting; ?>



<!-- Mask -->
<?= RazmnixSetting::$backgroundMaskExtension ? '<div class = "w-full h-screen absolute top-0 right-0 bg-gradient-to-t from-transparent to-white/15 z-[-1]"></div>' :''?>
<!-- /Mask -->

<!-- Side Menu -->
<?= get_template_part('components/side/roocket')?>
<!-- /Side Menu -->


<!-- Modal  Login -->
<?= RazmnixSetting::$modalLoginExtension ? get_template_part( 'components/modal/login') :''?>
<!-- /Modal  Login -->


<!-- Overlay -->
<?= RazmnixSetting::$modalLoginExtension ? get_template_part( 'components/other/overlayShow') :''?>
<!-- /Overlay -->

<?php do_action('razmnixTopFooter'); ?>

<?php wp_footer(); ?>

<style>
    :root {
        --headerLogoWidth: <?= RazmnixSetting::$headerLogoWidth?? '208' ?>px;
        --headerLogoWidthTablet: <?= RazmnixSetting::$headerLogoWidthTablet?? '160' ?>px;
        --headerLogoWidthMobile: <?= RazmnixSetting::$headerLogoWidthMobile?? '96' ?>px;
    }

</style>
</body>
</html>