<?php
function validate_form($data) {
    $errors = [];
    if (empty($data['name'])) $errors[] = "El nombre es obligatorio.";
    if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Correo inválido.";
    }
    if (empty($data['phone']) || !preg_match("/^[0-9]{7,15}$/", $data['phone'])) {
        $errors[] = "Número de teléfono inválido.";
    }
    if (empty($data['service'])) $errors[] = "Debes seleccionar un servicio.";

    return $errors;
}
?>
