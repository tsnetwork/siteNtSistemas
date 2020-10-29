<?php

if (strpos(url(), 'localhost')) {
    $dirPath      = realpath(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/assets/");
    $dirAdminPath = realpath(__DIR__ . "/../../themes/" . CONF_VIEW_THEME_ADMIN . "/assets/");
    /**
     * CSS
     */
    $minCss = new MatthiasMullie\Minify\CSS();
    $minCss->add(__DIR__ . "/../../shared/styles/bootstrap.min.css");

    $minAdminCss = new MatthiasMullie\Minify\CSS();

    //theme CSS
    $cssDir = scandir($dirPath . "/css");
    foreach ($cssDir as $css) {
        $cssFile = $dirPath . "/css/{$css}";
        if (is_file($cssFile) && pathinfo($cssFile)['extension'] == "css") {
            $minCss->add($cssFile);
        }
    }

    //theme Admin CSS
    $cssAdminDir = scandir($dirAdminPath . "/css");
    foreach ($cssAdminDir as $css) {
        $cssFile = $dirAdminPath . "/css/{$css}";
        if (is_file($cssFile) && pathinfo($cssFile)['extension'] == "css") {
            $minAdminCss->add($cssFile);
        }
    }

    //Minify CSS
    $minCss->minify($dirPath . "/style.css");
    $minAdminCss->minify($dirAdminPath . "/style.css");

    /**
     * JS
     */
    $minJs = new MatthiasMullie\Minify\JS();
    $minJs->add(__DIR__ . "/../../shared/scripts/jquery.min.js");
    $minJs->add(__DIR__ . "/../../shared/scripts/jquery.form.js");
    $minJs->add(__DIR__ . "/../../shared/scripts/jquery-ui.js");
    $minJs->add(__DIR__ . "/../../shared/scripts/bootstrap.bundle.min.js");

    $minAdminJs = new MatthiasMullie\Minify\JS();
    $minAdminJs->add(__DIR__ . "/../../shared/scripts/jquery.min.js");
    $minAdminJs->add(__DIR__ . "/../../shared/scripts/jquery-ui.js");
    $minAdminJs->add(__DIR__ . "/../../shared/scripts/bootstrap.min.js");

    //theme JS
    $jsDir = scandir($dirPath . "/js");
    foreach ($jsDir as $js) {
        $jsFile = $dirPath . "/js/{$js}";
        if (is_file($jsFile) && pathinfo($jsFile)['extension'] == "js") {
            $minJs->add($jsFile);
        }
    }

    //Admin JS
    $jsAdminDir = scandir($dirAdminPath . "/js");
    foreach ($jsAdminDir as $js) {
        $jsFile = $dirAdminPath . "/js/{$js}";
        if (is_file($jsFile) && pathinfo($jsFile)['extension'] == "js") {
            $minAdminJs->add($jsFile);
        }
    }

    //Minify JS
    $minJs->minify($dirPath . "/scripts.js");
    $minAdminJs->minify($dirAdminPath . "/scripts.js");
}
