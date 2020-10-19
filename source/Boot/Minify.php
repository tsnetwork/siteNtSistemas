<?php

if (strpos(url(), 'localhost')) {
    $dirPath = realpath(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/assets/");
    /**
     * CSS
     */
    $minCss = new MatthiasMullie\Minify\CSS();
    $minCss->add(__DIR__ . "/../../shared/styles/styles.css");
    $minCss->add(__DIR__ . "/../../shared/styles/boot.css");
    $minCss->add(__DIR__ . "/../../shared/styles/bootstrap.min.css");

    //theme CSS
    $cssDir = scandir($dirPath . "/css");
    foreach ($cssDir as $css) {
        $cssFile = $dirPath . "/css/{$css}";
        if (is_file($cssFile) && pathinfo($cssFile)['extension'] == "css") {
            $minCss->add($cssFile);
        }
    }

    //Minify CSS
    $minCss->minify($dirPath . "/style.css");

    /**
     * JS
     */
    $minJs = new MatthiasMullie\Minify\JS();
    $minJs->add(__DIR__ . "/../../shared/scripts/jquery.min.js");
    $minJs->add(__DIR__ . "/../../shared/scripts/jquery.form.js");
    $minJs->add(__DIR__ . "/../../shared/scripts/jquery-ui.js");
    $minJs->add(__DIR__ . "/../../shared/scripts/bootstrap.bundle.min.js");

    //theme JS
    $jsDir = scandir($dirPath . "/js");
    foreach ($jsDir as $js) {
        $jsFile = $dirPath . "/js/{$js}";
        if (is_file($jsFile) && pathinfo($jsFile)['extension'] == "js") {
            $minJs->add($jsFile);
        }
    }

    //Minify JS
    $minJs->minify($dirPath . "/scripts.js");
}
