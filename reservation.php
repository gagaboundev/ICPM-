<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = htmlspecialchars(trim($_POST['nom']));
    $email = htmlspecialchars(trim($_POST['email']));
    $telephone = htmlspecialchars(trim($_POST['telephone']));
    $place = htmlspecialchars(trim($_POST['place']));
    $nombre = intval($_POST['nombre']);

    if(!empty($nom) && !empty($email) && !empty($telephone) && !empty($place) && $nombre > 0) {
        $to = "contact@icpm-conference.com"; // mets ton mail ici
        $subject = "=?UTF-8?B?" . base64_encode("Nouvelle réservation ICPM") . "?=";
        
        $message = "Nom : $nom\n";
        $message .= "Email : $email\n";
        $message .= "Téléphone : $telephone\n";
        $message .= "Type de place : $place\n";
        $message .= "Nombre de places : $nombre";
        
        $headers  = "From: noreply@icpm-conference.com\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        if(mail($to, $subject, $message, $headers)) {
            echo "success"; // succès
        } else {
            echo "error"; // erreur serveur
        }
    } else {
        echo "invalid"; // champs manquants
    }

} else {
    echo "error";
}
?>

