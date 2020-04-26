<?php

include 'Model/correo.php';

// if($_POST){
//     $name = $_POST['name'];
//     $lastname = $_POST['lastname'];
//     $correo = $_POST['correo'];
//     $toaddress = 'vanems07@gmail.com';
//         $subject = "Contact Form: ";
//         $message = "$name\ 
//         ";
//         $message .= "$lastname\ 
//         ";
//         $message .= "$correo\ 
//         ";
//         $mailheaders = "From: $correo\
//         ";
//         $mailheaders .= "To: vanems07@gmail.com\
//         ";
//         $mailheaders .= "Content-Type: multipart/mixed; \
//         ";
//     $mail = new Send($toaddress, $subject, $message, $mailheaders);
    
//     if($mail->enviar()){
//         echo 'Correo enviado';
//         // $mail = new Send($_POST['name'], $_POST['lastname'], $_POST['correo'], $_POST['subject'], $_POST['message'], 'jorgewray@gmail.com');
//         // $mail->enviar();
//     }else{
//         echo 'Correo no enviado';
//     }
    include 'View/thanks.php';