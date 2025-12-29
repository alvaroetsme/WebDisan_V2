<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: /");
    exit;
}

$nombre  = trim(filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS));
$email   = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
$empresa = trim(filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_SPECIAL_CHARS));
$mensaje = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS));

if (empty($email) || empty($mensaje)) {
    echo "<script>alert('Email y mensaje son obligatorios'); history.back();</script>";
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('Correo no válido'); history.back();</script>";
    exit;
}

$destinatario = "ventas@disansrl.com";
$asunto = "Nueva consulta desde la web - DISAN SRL";

$cuerpo = "Nueva consulta web\n\n";
$cuerpo .= "Nombre: $nombre\n";
$cuerpo .= "Empresa: $empresa\n";
$cuerpo .= "Email: $email\n\n";
$cuerpo .= "Mensaje:\n$mensaje\n";

$headers  = "From: DISAN SRL <no-reply@disansrl.com>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (mail($destinatario, $asunto, $cuerpo, $headers)) {
    echo "<script>
        alert('Mensaje enviado correctamente');
        window.location.href = '/';
    </script>";
} else {
    echo "<script>
        alert('Error al enviar el mensaje');
        history.back();
    </script>";
}
