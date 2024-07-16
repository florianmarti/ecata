<?php

// Procesar solo solicitudes POST.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obteniendo los campos del formulario y eliminando los espacios en blanco.
    $name = strip_tags(trim($_POST["inputName"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["inputEmail"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["inputMessage"]);

    // Comprueba que los datos se enviaron correctamente.
    if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Establece un código de respuesta 400 (solicitud incorrecta) y sal.
        http_response_code(400);
        echo "Oops! There was a problem. Please complete the form and try again.";
        exit;
    }

    // Configuración para Mailtrap
    $smtp_host = 'sandbox.smtp.mailtrap.io';
    $smtp_port = 2525;
    $smtp_username = 'b8e9b7c783d0f8'; // Reemplaza con tu nombre de usuario SMTP de Mailtrap
    $smtp_password = 'bb1aa3e9434d29'; // Reemplaza con tu contraseña SMTP de Mailtrap

    // Establecer la dirección de correo electrónico del destinatario.
    $recipient = "florianmarti@gmail.com"; // Dirección de correo electrónico deseada

    // Establecer el asunto del correo electrónico.
    $subject = "Nuevo mensaje de $name";

    // Crear contenido de correo electrónico.
    $email_content = "Nombre: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Mensaje:\n$message\n";

    // Establecer encabezados del correo electrónico.
    $email_headers = "From: $name <$email>";

    // Configurar los parámetros adicionales para la función mail
    $smtp_params = "-f $email -r $recipient";

    // Configurar la opción ini_set para el servidor SMTP de Mailtrap
    ini_set("SMTP", $smtp_host);
    ini_set("smtp_port", $smtp_port);
    ini_set("sendmail_from", $smtp_username);

    // Enviar email usando Mailtrap.
    if (mail($recipient, $subject, $email_content, $email_headers, $smtp_params)) {
        // Establecer un código de respuesta 200 (OK).
        http_response_code(200);
        echo "¡Excelente! ¡Su mensaje fue enviado!";
    } else {
        // Establecer un código de respuesta 500 (error interno del servidor).
        http_response_code(500);
        echo "Oops! Algo salió mal tratando de enviar el mensaje.";
    }

} else {
    // No es una solicitud POST, establecer un código de respuesta 403 (prohibido).
    http_response_code(403);
    echo "Hubo un problema con tu entrada, por favor intenta nuevamente.";
}

?>
