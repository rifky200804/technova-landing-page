<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        echo "<script>
                alert('Data berhasil dikirimkan. Terima kasih atas sarannya!');
                window.location.href = '../index.php'; // Redirect ke halaman utama atau formulir
              </script>";
    } else {
        echo "<script>
                alert('Harap isi semua kolom.');
                window.history.back(); // Kembali ke halaman sebelumnya
              </script>";
    }
}
?>