<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Sesuaikan informasi email pengirim
    // $from = "your_email@example.com";
    $subject = "New Message from $name";
    $headers = "From: $email";

    // Sesuaikan alamat email penerima
    $to = "sondangnadeak1505@gmail.com";

    // Kirim email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email has been sent successfully.";
    } else {
        echo "Failed to send email. Please try again.";
    }
} else {
    echo "Invalid request.";
}
?>
