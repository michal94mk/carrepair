<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    

    if (empty($name) || empty($email) || empty($message)) {
        echo "Proszę wypełnić wszystkie pola formularza.";
        exit;
    }

    $to = "michal94mk@o2.pl";

    $subject = "Nowa wiadomość od $name";

    $email_content = "Imię: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Wiadomość:\n$message\n";

    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";

    if (mail($to, $subject, $email_content, $headers)) {
        echo "Twoja wiadomość została pomyślnie wysłana.";
    } else {
        echo "Wystąpił błąd podczas wysyłania wiadomości. Proszę spróbować ponownie później.";
    }
} else {
    echo "Nieprawidłowe żądanie.";
}
?>
