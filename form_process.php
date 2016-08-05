<?php

$from = "noreply@jabibazar.com"
$name = $_POST['name'];
$email = $POST['email'];
$message = $POST['message'];

$to = "lg.brian@outlook.com";
$subject = "Nuevo Mensaje desde Pagina Web";

mail ($to, $subject, $message, "From: ".$from . $name);

echo "Gracias por escribirnos! Apreciamos tu interes.";

// if($_POST){
//   mail ($to, $subject, $message, "From: ".$from . $name);
//   $feedback = 'Gracias por escribirnos! Apreciamos tu interes.';
// };

 ?>
