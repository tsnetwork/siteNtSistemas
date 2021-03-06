<?php

namespace Source\Support;

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

/**
 * FSPHP | Class Email
 *
 * @author Robson V. Leite <cursos@upinside.com.br>
 * @package Source\Core
 */
class Email
{
    /** @var array */
    private $data;

    /** @var PHPMailer */
    private $mail;

    /** @var Message */
    private $message;

    /**
     * Email constructor.
     */
    public function __construct()
    {
        $this->mail    = new PHPMailer(true);
        $this->data    = new \stdClass();
        $this->message = new Message();

        //setup
        $this->mail->isSMTP();
        $this->mail->setLanguage(CONF_MAIL_OPTION_LANG);
        $this->mail->isHTML(CONF_MAIL_OPTION_HTML);
        $this->mail->SMTPAuth   = CONF_MAIL_OPTION_AUTH;
        $this->mail->SMTPSecure = CONF_MAIL_OPTION_SECURE;
        $this->mail->CharSet    = CONF_MAIL_OPTION_CHARSET;

        //auth
        $this->mail->Host     = CONF_MAIL_HOST;
        $this->mail->Port     = CONF_MAIL_PORT;
        $this->mail->Username = CONF_MAIL_USER;
        $this->mail->Password = CONF_MAIL_PASS;
    }

    /**
     * @param string $subject
     * @param string $message
     * @param string $toEmail
     * @param string $toName
     * @return Email
     */
    public function bootstrap(string $subject, string $message, string $toEmail, string $toName): Email
    {
        $this->data->subject = $subject;
        $this->data->message = $message;
        $this->data->toEmail = $toEmail;
        $this->data->toName  = $toName;
        return $this;
    }

    public function attach(string $filePath, string $fileName): Email
    {
        $this->data->attach[$filePath] = $fileName;
        return $this;
    }
    /**
     * @param string $replyToEmail
     * @param string $replyToName
     *
     * @return PHPMailer
     */
    public function replyTo(string $replyToEmail, string $replyToName): Email
    {
        $this->data->replyTo[$replyToEmail] = $replyToName;
        return $this;
    }
    /**
     * @param $fromEmail
     * @param $fromName
     * @return bool
     */
    public function send($fromEmail = CONF_MAIL_SENDER['address'], $fromName = CONF_MAIL_SENDER["name"]): bool
    {
        if (empty($this->data)) {
            $this->message->error("Erro ao enviar, favor verifique os dados");
            return false;
        }

        if (!isEmail($this->data->toEmail)) {
            $this->message->warning("O e-mail de destinat??rio n??o ?? v??lido");
            return false;
        }

        if (!isEmail($fromEmail)) {
            $this->message->warning("O e-mail de remetente n??o ?? v??lido");
            return false;
        }

        try {
            $this->mail->Subject = $this->data->subject;
            $this->mail->msgHTML($this->data->message);
            $this->mail->addAddress($this->data->toEmail, $this->data->toName);
            $this->mail->setFrom($fromEmail, $fromName);

            if (!empty($this->data->attach)) {
                foreach ($this->data->attach as $path => $name) {
                    $this->mail->addAttachment($path, $name);
                }
            }
            if (!empty($this->data->replyTo)) {
                foreach ($this->data->replyTo as $email => $name) {
                    if (isEmail($email)) {
                        $this->mail->addReplyTo($email, $name);
                    }
                }
            }

            $this->mail->send();
            return true;
        } catch (Exception $exception) {
            $this->message->error($exception->getMessage());
            return false;
        }
    }

    /**
     * @return PHPMailer
     */
    public function mail(): PHPMailer
    {
        return $this->mail;
    }

    /**
     * @return Message
     */
    public function message(): Message
    {
        return $this->message;
    }

}
