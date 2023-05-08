<?php
// defined('BASEPATH') OR exit('No direct script access allowed');
// require 'PHPMailer/src/PHPMailer.php';

class Phpmailer_library extends PHPMailer{


    public function __construct()
    {
        // parent::__construct();

        //SMTP & mail configuration
        $this->isSMTP();
        $this->Host = 'smtp.gmail.com';
        $this->SMTPAuth = true;
        $this->Username = 'ericonomena@gmail.com';
        $this->Password = 'ericonomena2102';
        $this->SMTPSecure = 'tls';
        $this->Port = 587;

        //Recipients
        // $this->setFrom('from@example.com', 'Name');
        $this->addReplyTo('replyto@example.com', 'Name');

        // Add a recipient
        $this->addAddress('recipient@example.com');

        // Add cc or bcc 
        $this->addCC('cc@example.com');
        $this->addBCC('bcc@example.com');

        //Email subject
        $this->Subject = 'Test Email using PHPMailer in CodeIgniter';

        // Set email format to HTML
        $this->isHTML(true);
    }


}