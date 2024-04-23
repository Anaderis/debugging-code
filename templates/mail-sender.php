<?php

echo "coucou";

$messages = [];
// Send contact form to database
if (!empty($_POST)) {

$submited_items = array(
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'subject' => $_POST['subject'],
    'message' => $_POST['message']
);



// include ('/home.php');

// include "./home.php";

// if (!empty($_POST)) {

$to = "anais.kajjaj@outlook.fr";
$subject = $_POST['subject'];
$message = $_POST['message'];
echo $to;
echo $subject;
echo $message;
    
    
    mail(
            $to, $subject, $message
        );

//         header('Location:./mail-sender.php');

 }

    ?>
        