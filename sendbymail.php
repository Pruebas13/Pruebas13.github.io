
<?php  

// Llamando a los campos
$nombre = $_POST['name'];
$correo = $_POST['email'];
$telefono = $_POST['phone'];
$mensaje = $_POST['text'];

// Datos para el correo
$destinatario = "jesuszerpaeconomia@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $name \n";
$carta .= "Correo: $email \n";
$carta .= "Telefono: $phone \n";
$carta .= "Mensaje: $text";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:menaje de envio.html');

?>