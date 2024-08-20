<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "evabarkwende@gmail.com"; // Adresse e-mail de l'entreprise
    $subject = "Nouveau message de $name";
    $body = "Nom: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";
    
    // Envoi de l'e-mail
    if (mail($to, $subject, $body)) {
        echo "Message envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
}
?>
