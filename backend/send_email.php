<?php
require_once 'config.php';
require_once 'validation.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar datos
    $errors = validate_form($_POST);
    if (!empty($errors)) {
        echo json_encode(["status" => "error", "errors" => $errors]);
        exit;
    }

    // Preparar datos
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['message']);

    // Enviar correo
    $to = ADMIN_EMAIL;
    $subject = "Nueva solicitud de mudanza";
    $body = "Nombre: $name\nCorreo: $email\nTeléfono: $phone\nServicio: $service\nMensaje: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(["status" => "success", "message" => "Mensaje enviado con éxito."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Hubo un problema al enviar el mensaje."]);
    }
}
?>
