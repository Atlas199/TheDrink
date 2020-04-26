<?php

class Send{
    private $to;
    public $name;
    public $lastname;
    public $correo;
    public $subject;
    public $message;

    /**
     * Constructor class Send
     * @param string $to
     * @param string $name
     * @param string $lastname
     * @param string $correo
     * @param string $subject
     * @param string $message
     */

     public function __construct($name = "", $lastname = "", $correo = "", $subject = "", $message = "", $to = 'vanems07@gmail.com'){
         $this->name = $name;
         $this->lastname = $lastname;
         $this->correo = $correo;
         $this->subject = $subject;
         $this->message = $message;
         $this->to = $to;
     }

     public function enviar(){
        $toaddress = 'vanems07@gmail.com';
        $subject = "Contact Form: ";
        $message = "$this->name\ 
        ";
        $message .= "$this->lastname\ 
        ";
        $message .= "$this->correo\ 
        ";
        $mailheaders = "From: $this->correo\
        ";
        $mailheaders .= "To: vanems07@gmail.com\
        ";
        $mailheaders .= "Content-Type: multipart/mixed; \
        ";
         return mail($toaddress, $subject, $message, $mailheaders);
     }

}
