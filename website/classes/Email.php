<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require '../vendor/autoload.php';

    class Email {
        private $mailer;
        
        public function __construct($host, $username, $password) {
            // include('../classes/PHPMailer/src/PHPMailer.php');
            // include('../classes/PHPMailer/src/SMTP.php');

            $this->mailer = new PHPMailer(true);

            // Server settings
            $this->mailer->isSMTP();
            $this->mailer->Host = $host;
            $this->mailer->SMTPAuth = true;
            $this->mailer->SMTPDebug = 0;
            $this->mailer->Username = $username;
            $this->mailer->Password = $password;
            $this->mailer->SMTPSecure = 'tls';
            $this->mailer->Port = 2525;
            $this->mailer->isHTML(true);
            $this->mailer->CharSet = 'UTF-8';
        }

        public function setFrom($email, $name) {
            $this->mailer->setFrom($email, $name);
        }

        public function addAddress($email, $name) {
            $this->mailer->addAddress($email, $name);
        }

        public function formatEmail($info) {
            $this->mailer->Subject = $info['subject'];
            $this->mailer->Body    = $info['body'];
            $this->mailer->AltBody = strip_tags($info['body']);
        }

        public function sendMail() {
            try {
                $this->mailer->send();
                return true;
            } catch(Exception $e) {
                return false;
            }
        }
    }
?>