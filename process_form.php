<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Gantilah EMAIL_PEMILIK dengan alamat email pemilik
    $to = "carmudig@gmail.com";
    $subject = "message";

    // Membuat pesan email
    $email_body = "Nama: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Nomor Telepon: $phone\n\n";
    $email_body .= "Pesan:\n$message";

    // Mengirim email
    mail($to, $subject, $email_body);

    // Redirect ke halaman sukses
    header("Location: contact.html");
} else {
    // Jika bukan metode POST, redirect ke halaman error
    header("Location: error_page.html");
}
?>
