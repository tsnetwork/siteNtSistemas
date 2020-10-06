<?php

namespace Source\App;

use Source\Core\Connect;
use Source\Core\Controller;

/**
 * Web Controller
 * @package Source\App
 */
class Web extends Controller
{
    /**
     * Web constructor.
     */
    public function __construct()
    {
        Connect::getInstance();
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
    }

    /**
     * SITE HOME
     */
    public function home(): void
    {

        echo $this->view->render("views/home", []);
    }
/*
/**
 * SITE NAV ERROR
 * @param array $data
 *
public function error(array $data): void
{

switch ($data['errCode']) {
case 'problemas':
$error          = new \stdClass();
$error->code    = "OPS";
$error->title   = "Estamos enfrentando problemas!";
$error->message = "
Parece que nosso serviço não está disponível no momento.
Já estamos vendo isso mas caso precise, envie um e-mail :)
";
$error->linkTitle = "ENVIAR E-MAIL";
$error->link      = "mailto:" . CONF_MAIL_SUPPORT;
break;
case 'manutencao':
$error          = new \stdClass();
$error->code    = "OPS";
$error->title   = "Desculpe, Estamos em manutenção!";
$error->message = "
Voltammos logo! Por hora estamos trabalhando para melhorar nosso conteúdo
para você controlar melhor as suas contas :P
";
$error->linkTitle = null;
$error->link      = null;
break;
default:
$error          = new \stdClass();
$error->code    = $data['errCode'];
$error->title   = "Oops. Conteúdo indisponível :/";
$error->message = "
Sentimos muito, mas o conteúdo que você tentou acessar não existe,
está indisponível no momento ou foi removido :/
";
$error->linkTitle = "Continue Navegando";
$error->link      = urlBack();
break;
}

$head = $this->seo->render(
"{$error->code} | {$error->title}",
$error->message,
url("/ops/{$error->code}"),
theme("/assets/images/share.jpg"),
false
);
echo $this->view->render("error", [
"head"  => $head,
"error" => $error,
]);
}
 */
}
