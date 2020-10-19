<?php

/**
 * DATABASE
 */
define("CONF_DB_HOST", "localhost");
define("CONF_DB_USER", "root");
define("CONF_DB_PASS", "P@ssw0rd");
define("CONF_DB_NAME", "site");

/**
 * PROJECT URLs
 */
define("CONF_URL_BASE", "http://192.168.0.251/site");
define("CONF_URL_TEST", "http://www.localhost/site");
define("CONF_URL_ADMIN", "/admin");

/**
 * SITE
 */
define("CONF_SITE_NAME", "NT Sistemas Web");
define("CONF_SITE_TITLE", "Soluções Tecnológicas para o seu Negócio");
define(
    "CONF_SITE_DESC",
    "A NT sistemas visa acompanhar as necessidades das empresas no mercado de desenvolvimento,
     aprimorando e estreitando relacionamento com seus clientes,
     acompanhando seus processos, estratégias e melhorando seus resultados."
);
define("CONF_SITE_LANG", "pt_BR");
define("CONF_SITE_DOMAIN", "192.168.0.251");
define("CONF_SITE_ADDR_STREET", "Rua Mário Juarez de Oliveira");
define("CONF_SITE_ADDR_NUMBER", "327");
define("CONF_SITE_ADDR_COMPLEMENT", "");
define("CONF_SITE_ADDR_CITY", "Porto Alegre");
define("CONF_SITE_ADDR_STATE", "RS");
define("CONF_SITE_ADDR_ZIPCODE", "91450-372");
define("CONF_SITE_PHONE", "+55 51 2500-7412");

/**
 * SOCIAL
 */
define("CONF_SOCIAL_TWITTER_CREATOR", "");
define("CONF_SOCIAL_TWITTER_PUBLISHER", "");
define("CONF_SOCIAL_FACEBOOK_APP", "");
define("CONF_SOCIAL_FACEBOOK_PAGE", "ntsistemasweb");
define("CONF_SOCIAL_FACEBOOK_AUTHOR", "ntsistemasweb");
define("CONF_SOCIAL_GOOGLE_PAGE", "");
define("CONF_SOCIAL_GOOGLE_AUTHOR", "");
define("CONF_SOCIAL_INSTAGRAM_PAGE", "");
define("CONF_SOCIAL_YOUTUBE_PAGE", "");

/**
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);

/**
 * MESSAGE
 */
define("CONF_MESSAGE_CLASS", "alert");
define("CONF_MESSAGE_INFO", "alert-info");
define("CONF_MESSAGE_SUCCESS", "alert-success");
define("CONF_MESSAGE_WARNING", "alert-warning");
define("CONF_MESSAGE_ERROR", "alert-danger");
define("CONF_MESSAGE_DISMISSIBLE", "alert-dismissible");

/**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/../../shared/views");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_THEME", "site");
define("CONF_VIEW_THEME_ADMIN", "admin");

/**
 * UPLOAD
 */
define("CONF_UPLOAD_DIR", "../storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_FILE_DIR", "files");
define("CONF_UPLOAD_MEDIA_DIR", "medias");

/**
 * IMAGES
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);

/**
 * MAIL
 */
define("CONF_MAIL_HOST", "smtp.umbler.com");
define("CONF_MAIL_PORT", "587");
define("CONF_MAIL_USER", "ntsistemasweb@ntsistemasweb.dev.br");
define("CONF_MAIL_PASS", "P@ssw0rd");
define("CONF_MAIL_SENDER", ["name" => "NT Sistemas Web", "address" => "ntsistemasweb@ntsistemasweb.dev.br"]);
define("CONF_MAIL_SUPPORT", "equipe.sistemas@ntsistemasweb.dev.br");
define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", true);
define("CONF_MAIL_OPTION_AUTH", true);
define("CONF_MAIL_OPTION_SECURE", "tls");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");
