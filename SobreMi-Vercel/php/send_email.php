<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validar que los campos no estén vacíos
    if (!empty($name) && !empty($email) && !empty($message)) {
        $to = "hectoriescosanz@gmail.com";
        $subject = "Nuevo mensaje desde tu página web";
        $body = "Nombre: $name\nCorreo electrónico: $email\nMensaje: $message";
        $headers = "From: no-reply@tusitio.com";

        if (mail($to, $subject, $body, $headers)) {
            echo "¡Mensaje enviado con éxito!";
        } else {
            echo "Hubo un error al enviar el mensaje. Por favor, intenta nuevamente.";
        }
    } else {
        echo "Por favor, completa todos los campos del formulario.";
    }
}
?>
