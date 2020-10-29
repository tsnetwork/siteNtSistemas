<?php

namespace Source\App;

use Source\Core\Controller;
use Source\Models\Auth;
use Source\Models\Contact;
use Source\Models\User;
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

        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME_ADMIN . "/");
        if (!Auth::user()) {
            $this->message->warning("Efetue login para acessar o APP.")
                ->dismissable()
                ->flash();
            redirect("/admin/login");
        }
    }

    /**
     * @return void
     */
    public function home(): void
    {
        $activeUser = Auth::user();
        $contacts   = (new Contact())->find();
        $head       = $this->seo->render(
            CONF_SITE_NAME . " | Dahsboard",
            CONF_SITE_DESC,
            url("/admin"),
            "",
            false
        );
        echo $this->view->render("home", [
            "head"         => $head,
            "title"        => "Dashboard",
            "activeUser"   => $activeUser,
            "contactCount" => $contacts->count(),
        ]);
    }

    /**
     * @param array|null $data
     *
     * @return void
     */
    public function contacts(?array $data): void
    {
        $contacts = (new Contact())->find();

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Contatos",
            CONF_SITE_DESC,
            url("/admin"),
            "",
            false
        );
        $activeUser = Auth::user();
        $pager      = (new Pager(url("/admin/contatos/")));
        $pager->pager($contacts->count(), 9, $data['page'] ?? 1);

        echo $this->view->render("contacts", [
            "head"       => $head,
            "title"      => "Contatos",
            "activeUser" => $activeUser,
            "contacts"   => $contacts
                ->limit($pager->limit())
                ->offset($pager->offset())
                ->fetch(true),
            "paginator"  => $pager->render("pagination"),
        ]);
    }

    /**
     * @return void
     */
    public function users(): void
    {

        $users = (new User())->find();

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Usuários",
            CONF_SITE_DESC,
            url('/admin/usuarios'),
            "",
            false
        );

        $activeUser = Auth::user();

        $pager = (new Pager(url("/admin/usuarios/")));
        $pager->pager($users->count(), 9, $data['page'] ?? 1);

        echo $this->view->render("users", [
            "head"       => $head,
            "title"      => "Usuários",
            'activeUser' => $activeUser,
            'users'      => $users->fetch(true),
            "paginator"  => $pager->render("pagination"),

        ]);
    }

    /**
     * @param array|null $data
     *
     * @return void
     */
    public function register(?array $data): void
    {
        if (!empty($data['csrf'])) {

            if (isset($data['image'])) {
                unset($data['image']);
            }
            if (!csrfVerify($data)) {
                $json['message'] = $this->message
                    ->error("Formulário Inválido!")
                    ->dismissable()
                    ->render();
                echo json_encode($json);
                return;
            }
            if (in_array("", $data)) {
                $json['message'] = $this->message
                    ->info("Insira todos os dados e confirme a senha para realizar o cadastro")
                    ->dismissable()
                    ->render();
                echo json_encode($json);
                return;
            }
            if ($data['password'] != $data['passwordre']) {
                $json['message'] = $this->message
                    ->warning("As senhas não são iguais!")
                    ->dismissable()
                    ->render();
                echo json_encode($json);
                return;
            }
            $newUser = (new User())->bootstrap(
                $data['name'],
                $data['email'],
                $data['password'],
                $_FILES['image'] ?? null
            );

            $auth = new Auth();

            if ($auth->register($newUser)) {
                $this->message
                    ->success("Usuário registrado com sucesso")
                    ->dismissable()
                    ->flash();
                $json['redirect'] = url('/admin/usuarios');
            } else {
                $json['message'] = $auth->message()->dismissable()->render();
            }
            echo json_encode($json);
            return;
        }
        $head = $this->seo->render(
            CONF_SITE_NAME . " | Novo Usuário",
            CONF_SITE_DESC,
            url(),
            "",
            false
        );

        $activeUser = Auth::user();

        echo $this->view->render("register", [
            "head"       => $head,
            "title"      => "Novo Usuário",
            'activeUser' => $activeUser,
        ]);
    }

    /**
     * @param array $data
     * @return void
     */
    public function exclude(array $data): void
    {
        $id = filter_var($data['id'], FILTER_VALIDATE_INT);
        if ($id == Auth::user()->id) {
            $this->message
                ->error("Esse usuário não pode ser excluído pois está sendo usado " . Auth::user()->id)
                ->dismissable()
                ->flash();
            redirect('/admin/usuarios');
            return;
        }
        $user = (new User())->findById($id);
        if (empty($user)) {
            $this->message
                ->warning("Nenhum Usuário encontrado com esse id!")
                ->dismissable()
                ->flash();
            redirect('/admin/usuarios');
            return;
        }

        if (!$user->destroy()) {
            $this->message
                ->error($user->fail())
                ->dismissable()
                ->flash();
            redirect('/admin/usuarios');
            return;
        }
        $this->message
            ->success("Usuário excluído com sucesso!")
            ->dismissable()
            ->flash();
        redirect('/admin/usuarios');
        return;
    }

    public function edit(array $data): void
    {
        $id = filter_var($data['id'], FILTER_VALIDATE_INT);

        $user = (new User())->findById($id);

        if (!empty($data['csrf'])) {
            if (isset($data['image'])) {
                unset($data['image']);
            }
            if (!csrfVerify($data)) {
                $json['message'] = $this->message
                    ->error('Formulário Inválido!')
                    ->dismissable()
                    ->render();
                echo json_encode($json);
                return;
            }
            $user->name  = filter_var($data['name'], FILTER_SANITIZE_STRIPPED);
            $user->email = filter_var($data['email'], FILTER_SANITIZE_STRIPPED);
            $user->image = $_FILES['image'] ?? $user->image;

            if (!empty($data['password'])) {
                if (empty($data['passwordre'])) {
                    $json['message'] = $this->message
                        ->warning("Confirme sua Senha!")
                        ->dismissable()
                        ->render();
                    echo json_encode($json);
                    return;
                }
                if ($data['password'] != $data['passwordre']) {
                    $json['message'] = $this->message
                        ->warning("As senhas são diferentes!")
                        ->dismissable()
                        ->render();
                    echo json_encode($json);
                    return;
                }

                $user->password = $data['password'];

            }

            $auth = new Auth();

            if (!$auth->edit($user)) {
                $json['message'] = $auth->message()->dismissable()->render();
            } else {
                $json['message'] = $this->message
                    ->success("Usuário Atualizado com sucesso")
                    ->dismissable()
                    ->flash();
                if (Auth::user()->id === $user->id) {
                    $json['redirect'] = url('/admin/sair');
                } else {
                    $json['redirect'] = url('/admin/usuarios/');
                }
            }
            echo json_encode($json);
            return;
        }

        $activeUser = Auth::user();

        $head = $this->seo->render(
            $user->name . " | Editar",
            CONF_SITE_DESC,
            url("/admin/usuarios/{$user->id}/editar"),
            "",
            false
        );

        echo $this->view->render('edit', [
            "head"       => $head,
            'title'      => 'Usuários',
            "user"       => $user,
            "activeUser" => $activeUser,
        ]);
    }
    /**
     * @return void
     */
    public function logout(): void
    {
        $this->message->info("Você saiu com sucesso " . Auth::user()->name . ". Volte logo :)")
            ->dismissable()
            ->flash();
        Auth::logout();
        redirect("/admin/login");
    }
}
