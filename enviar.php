<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre  = trim($_POST["nombre"]);
    $email   = trim($_POST["email"]);
    $mensaje = trim($_POST["mensaje"]);

    if (empty($nombre) || empty($email) || empty($mensaje) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: nosotros.php?estado=error_campos");
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'chiozzapedro777@gmail.com';
        $mail->Password   = 'gqhy qbvm vpan gssw';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('Administracion@fincalacaramela.com.ar', 'Formulario Web');
        $mail->addAddress('Administracion@fincalacaramela.com.ar');
        $mail->addReplyTo($email, $nombre);

        $mail->isHTML(true);
        $mail->Subject = '📬 Nuevo mensaje desde Finca La Caramela';
        $mail->Body    = "
            <div style='font-family: Arial, sans-serif; color: #333; max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #e0e0e0; border-radius: 10px; background-color: #fafafa;'>
                <div style='text-align: center; margin-bottom: 20px;'>
                    <h2 style='color: #814103;'>📩 Nuevo mensaje recibido</h2>
                    <p style='font-size: 16px;'>Has recibido un nuevo mensaje desde el sitio <strong>Finca La Caramela</strong>.</p>
                </div>
                <hr style='border: none; border-top: 1px solid #ccc; margin: 20px 0;'>
                <p><strong style='color: #CD915A;'>Nombre:</strong> $nombre</p>
                <p><strong style='color: #CD915A;'>Email:</strong> $email</p>
                <p><strong style='color: #CD915A;'>Mensaje:</strong></p>
                <div style='background-color: #fff; padding: 15px; border-radius: 8px; border: 1px solid #ddd;'>
                    <p style='margin: 0;'>$mensaje</p>
                </div>
                <hr style='border: none; border-top: 1px solid #ccc; margin: 30px 0 10px;'>
                <footer style='font-size: 13px; color: #777; text-align: center;'>
                    Este mensaje fue generado automáticamente desde el formulario de contacto de Finca La Caramela.<br>
                    Por favor, no responder directamente a este correo.
                </footer>
            </div>
        ";
        $mail->AltBody = "📬 Nuevo mensaje desde Finca La Caramela\n\nNombre: $nombre\nEmail: $email\nMensaje:\n$mensaje\n\n---\nEste mensaje fue enviado desde el formulario de contacto del sitio web.";

        $mail->send();
        header("Location: nosotros.php?estado=ok");
    } catch (Exception $e) {
        header("Location: nosotros.php?estado=error_envio");
    }
}
