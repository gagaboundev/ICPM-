<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message_content = htmlspecialchars(trim($_POST['message']));

    if(!empty($name) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($message_content)) {

        $to = "contact@icpm-conference.com"; // Remplace par ton mail
        $subject = "=?UTF-8?B?" . base64_encode("Message depuis le formulaire Contact ICPM") . "?=";

        $message  = "Nom : $name\n";
        $message .= "Email : $email\n\n";
        $message .= "Message :\n$message_content";

        // Headers avec encodage UTF-8
        $headers  = "From: noreply@icpm-conference.com\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        if(mail($to, $subject, $message, $headers)) {
            echo json_encode(["status" => "success"]);
        } else {
            echo json_encode(["status" => "error"]);
        }

    } else {
        echo json_encode(["status" => "invalid"]);
    }

} else {
    echo json_encode(["status" => "error"]);
}
?>

