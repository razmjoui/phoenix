<?php use Razm\RazmnixGetOptions; ?>
<style>
    :root {
        --headerLogoWidth: <?= RazmnixGetOptions::$headerLogoWidth?? '208' ?>px;
        --headerLogoWidthTablet: <?= RazmnixGetOptions::$headerLogoWidthTablet?? '160' ?>px;
        --headerLogoWidthMobile: <?= RazmnixGetOptions::$headerLogoWidthMobile?? '96' ?>px;
    }

</style>
<?= get_template_part('templates/headers/' . RazmnixGetOptions::$headerDefault);