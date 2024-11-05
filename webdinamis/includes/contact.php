<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // Validasi data
    if (empty($name) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($message)) {
        echo "Mohon isi semua field dengan benar.";
        exit;
    }

    // Email tujuan
    $to = "email-anda@example.com"; // Ganti dengan alamat email Anda
    $subject = "Pesan Baru dari Form Kontak";
    $email_body = "Nama: $name\nEmail: $email\n\nPesan:\n$message";
    $headers = "From: no-reply@domainanda.com";

    // Kirim email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "<script>alert('Terima kasih! Pesan Anda telah terkirim.'); window.location.href = 'index.html';</script>";
    } else {
        echo "<script>alert('Maaf, ada kesalahan. Silakan coba lagi.'); window.location.href = 'index.html';</script>";
    }
}
?>
