<?php

namespace Source\Models;

use Source\Core\Model;
use Source\Core\View;
use Source\Support\Email;

class Contact extends Model
{
    public function __construct()
    {
        parent::__construct("contacts", ['id'], ['email', 'mensagem', 'status']);
    }

    public function contact($name, $email, $subject, $message): bool
    {
        $this->email    = $email;
        $this->mensagem = filter_var($message, FILTER_SANITIZE_STRIPPED);

        $view = new View(__DIR__ . "/../../shared/views/email/");

        $msg = $view->render("contact", [
            "name"    => $name,
            "message" => $message,
        ]);

        $contato = (new Email())->bootstrap(
            $subject,
            $msg,
            CONF_MAIL_SUPPORT,
            "Equipe NT Sistemas Web"
        );

        if ($contato->replyTo($email, $name)->send()) {
            $this->status = "delivered";
            if ($this->save()) {
                return true;
            }

            return false;
        }

        $this->status  = "error";
        $this->error   = $contato->message()->getText();
        $this->message = $contato->message();
        $this->save();
        return false;
    }

    public function save(): bool
    {
        if (!isEmail($this->email)) {
            $this->message->warning("O e-mail informado não tem um formato válido");
            return false;
        }

        if (empty($this->id)) {
            $contactId = $this->create($this->safe());
            if ($this->fail()) {
                $this->message->error("Erro ao salvar contato, verifique os dados");
                return false;
            }
        }

        $this->data = ($this->findById($contactId))->data();
        return true;
    }
}
