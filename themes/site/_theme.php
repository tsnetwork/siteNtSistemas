<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <?=$head?>

        <!-- Favicons -->
        <link href="<?=theme(CONF_VIEW_THEME, "assets/img/theme/icon.png")?>" rel="icon">
        <link href="<?=theme(CONF_VIEW_THEME, "assets/img/apple-touch-icon.png")?>" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="<?=theme(CONF_VIEW_THEME, "assets/vendor/icofont/icofont.min.css")?>" rel="stylesheet">
        <link href="<?=theme(CONF_VIEW_THEME, "assets/vendor/boxicons/css/boxicons.min.css")?>" rel="stylesheet">
        <link href="<?=theme(CONF_VIEW_THEME, "assets/vendor/venobox/venobox.css")?>" rel="stylesheet">
        <link href="<?=theme(CONF_VIEW_THEME, "assets/vendor/aos/aos.css")?>" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="<?=theme(CONF_VIEW_THEME, "assets/style.css")?>" rel="stylesheet">

        <!-- =======================================================
        * Template Name: Techie - v2.1.0
        * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
    </head>

    <body>
        <?= $v->insert('components/navbar') ?>

        <?=$v->section('content')?>

        <?=$v->insert('components/footer') ?>

        <script src="<?=theme(CONF_VIEW_THEME, "assets/scripts.js")?>"></script>
        <!-- Vendor JS Files -->
        <script src="<?=theme(CONF_VIEW_THEME, "assets/vendor/jquery.easing/jquery.easing.min.js")?>"></script>
        <script src="<?=theme(CONF_VIEW_THEME, "assets/vendor/waypoints/jquery.waypoints.min.js")?>"></script>
        <script src="<?=theme(CONF_VIEW_THEME, "assets/vendor/venobox/venobox.min.js")?>"></script>
        <script src="<?=theme(CONF_VIEW_THEME, "assets/vendor/aos/aos.js")?>"></script>

        <!-- Template Main JS File -->


    </body>
</html>