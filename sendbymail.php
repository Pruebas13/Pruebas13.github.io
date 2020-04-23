
<?php 
    if(isset($_POST['buttoml'])){
        if($_POST['name'] == ''){
            $errors[1] = '<span class="error">Ingrese su nombre</span>';
        }else if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email'])){
            $errors[2] = '<span class="error">Ingrese un email correcto</span>';
        }else if($_POST['text'] == ''){
            $errors[3] = '<span class="error">Ingrese un mensaje</span>';
        }else{
            $dest = "jesuszerpaeconomia@gmail.com"; //Email de destino
            $nombre = $_POST['name'];
            $email = $_POST['email'];
            $asunto = $_POST['text']; //Cuerpo del mensaje
            //Cabeceras del correo
            $headers = "From: $nombre <$email>\r\n"; //Quien envia?
            $headers .= "X-Mailer: PHP5\n";
            $headers .= 'MIME-Version: 1.0' . "\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //
 
            if(mail($dest,$asunto,,$headers)){
                $result = '<div class="result_ok">Email enviado correctamente </div>';
                // si el envio fue exitoso reseteamos lo que el usuario escribio:
                $_POST['name'] = '';
                $_POST['email'] = '';
                $_POST['text'] = '';
            }else{
                $result = '<div class="result_fail">Hubo un error al enviar el mensaje </div>';
            }
        }
    }
?>