<?php

namespace Source\Models;

use Source\Core\Model;
use Source\Core\Session;
use Source\Support\Email;
use Source\Support\Upload;

/**
 * Class Auth
 * @package Source\Models
 */
class Auth extends Model
{
    /**
     * Auth constructor.
     */
    public function __construct()
    {
        parent::__construct("users", ["id"], ["email", "password"]);
    }

    /**
     * @return null|User
     */
    public static function user(): ?User
    {
        $session = new Session();
        if (!$session->has("authUser")) {
            return null;
        }
        return (new User())->findById($session->authUser);
    }

    /**
     * log-out
     */
    public static function logout(): void
    {
        $session = new Session();
        $session->unset("authUser");
    }

    /**
     * @param User $user
     * @return bool
     */
    public function register(User $user): bool
    {
        if (!empty($user->image)) {
            $upload    = new Upload();
            $imagePath = $upload->image($user->image, strSlug(time() . " profile image"));
            if (!$imagePath) {
                $this->message = $upload->message;
                return false;
            }
            $user->image = $imagePath;
        }
        if (!$user->save()) {
            $this->message = $user->message;
            return false;
        }
        return true;
    }

    public function edit(User $user): bool
    {
        $oldImage = (new User())->findById($user->id, 'image')->image;
        $upload   = new Upload();
        if ($user->image != $oldImage) {
            if ($oldImage) {
                $upload->remove($oldImage);
            }
            $imagePath = $upload->image($user->image, strSlug(time() . " profile image"));
            if (!$imagePath) {
                $this->message = $upload->message;
                return false;
            }
            $user->image = $imagePath;
        }
        if (!$user->save()) {
            $this->message = $user->message;
            return false;
        }
        return true;
    }
    /**
     * @param string $email
     * @param string $password
     * @param bool $save
     * @return bool
     */
    public function login(string $email, string $password, bool $save = false): bool
    {
        if (!isEmail($email)) {
            $this->message->warning("O e-mail informado não é válido")->dismissable();
            return false;
        }

        if (!isPasswd($password)) {
            $this->message->warning("A senha informada não é válida")->dismissable();
            return false;
        }

        $user = (new User())->findByEmail($email);
        if (!$user) {
            $this->message->error("O e-mail informado não está cadastrado")
                ->dismissable();
            return false;
        }

        if (!passwdVerify($password, $user->password)) {
            $this->message->error("A senha informada não confere")
                ->dismissable();
            return false;
        }
        if ($save) {
            setcookie("authEmail", $user->email, time() + 604800, "/");
        } else {
            setcookie("authEmail", null, time() - 3600, "/");
        }
        if (passwdRehash($user->password)) {
            $user->password = $password;
            $user->save();
        }

        //LOGIN
        (new Session())->set("authUser", $user->id);
        $this->message->success("Login efetuado com sucesso")
            ->dismissable()
            ->flash();
        return true;
    }
}
