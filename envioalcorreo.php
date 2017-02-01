<?php
if(isset($_POST['email'])) {

// Datos del destinatario 
$email_to = "fer8707@gmail.com";
$email_subject = "Nuevo inscrito";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['name']) ||
!isset($_POST['last']) ||
!isset($_POST['nivel']) ||
!isset($_POST['año']) ||
!isset($_POST['instituto']) ||
!isset($_POST['area']) ||
!isset($_POST['mail']) ||
!isset($_POST['titulo']) ||
!isset($_POST['resumen'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['first_name'] . "\n";
$email_message .= "Apellido: " . $_POST['last_name'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Teléfono: " . $_POST['telephone'] . "\n";
$email_message .= "Comentarios: " . $_POST['comments'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}
?>