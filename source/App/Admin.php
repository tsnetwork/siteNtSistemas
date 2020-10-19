<?php

namespace Source\App;

use Source\Core\Connect;
use Source\Core\Controller;
use Source\Models\Contact;
use Source\Support\Pager;

/**
 * Web Controller
 * @package Source\App
 */
class Admin extends Controller
{
    /**
     * Admin constructor.
     */
    public function __construct()
    {
        Connect::getInstance();
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME_ADMIN . "/");
    }

    public function home()
    {
        $contacts = (new Contact())->find();
        $head     = $this->seo->render(
            CONF_SITE_NAME . " | Dahsboard",
            CONF_SITE_DESC,
            url("/admin"),
            "",
            false
        );
        echo $this->view->render("home", [
            "head"         => $head,
            "active"       => "dashboard",
            "contactCount" => $contacts->count(),
        ]);
    }

    public function contacts(?array $data)
    {
        $contacts = (new Contact())->find();

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Contatos",
            CONF_SITE_DESC,
            url("/admin"),
            "",
            false
        );

        $pager = (new Pager(url("/admin/contatos/")));
        $pager->pager($contacts->count(), 9, $data['page'] ?? 1);

        echo $this->view->render("contacts", [
            "head"      => $head,
            "active"    => "contatos",
            "contacts"  => $contacts
                ->limit($pager->limit())
                ->offset($pager->offset())
                ->fetch(true),
            "paginator" => $pager->render("pagination"),
        ]);
    }
}
