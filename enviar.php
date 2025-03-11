<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Cargar PHPMailer
require 'libs/vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validar y recibir los datos del formulario
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    $telefono = isset($_POST['telefono']) ? trim($_POST['telefono']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $asunto = isset($_POST['asunto']) ? trim($_POST['asunto']) : '';
    $descripcion = isset($_POST['descripcion']) ? trim($_POST['descripcion']) : '';

    // Validar que los campos no estén vacíos
    if (empty($nombre) || empty($telefono) || empty($email) || empty($asunto) || empty($descripcion)) {
        die("Todos los campos son obligatorios.");
    }

    // Validar email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("El formato del email no es válido.");
    }

    // Crear instancia de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP
        $mail->SMTPDebug = SMTP::DEBUG_OFF; // Desactiva el modo debug para producción
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'paginaswebifcd@gmail.com';  
        $mail->Password   = 'ekheppkkfjzycjgp'; // PELIGRO: Considera usar variables de entorno para mayor seguridad
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Configuración del correo
        $mail->setFrom('paginaswebifcd@gmail.com', 'AntonioGo');
        $mail->addAddress('paginaswebifcd@gmail.com', 'Laura');

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = $asunto;
        $mail->Body = "
            <h3>Nuevo mensaje de contacto</h3>
            <p><strong>Nombre:</strong> $nombre</p>
            <p><strong>Teléfono:</strong> $telefono</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Asunto:</strong> $asunto</p>
            <p><strong>Descripción:</strong><br> $descripcion</p>
        ";

        // Enviar correo
        if ($mail->send()) {
            header("Location: index.php?mensaje=success");
            exit;
        } else {
            die("Error al enviar el correo.");
        }
    } catch (Exception $e) {
        die("Error en el envío: {$mail->ErrorInfo}");
    }
}
?>
