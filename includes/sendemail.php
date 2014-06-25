<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "altopolimero.ger@gmail.com";
    $email_subject = "Email de Altopolimero.com";
     
     
    function died($error) {
        // your error code can go here
        echo "Lo sentimos, encontramos un error en su mensaje.
         ";
        echo "Los errores aparecen abajo.<br /><br />";
        echo $error."<br /><br />";
        echo "Regrese e intente de nuevo.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['author']) ||
        !isset($_POST['email']) ||
        !isset($_POST['url']) ||
        !isset($_POST['text'])) {
        died('Disculpenos, encontramos un error en el mensaje.');       
    }
     
    $first_name = $_POST['author']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['url']; // not required
    $comments = $_POST['text']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'El correo electronico no es correcto o no apacere.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'El nombre que ud. ingreso no es valido.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'El mensaje que envio no parece valido.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Detalles del mensaje:\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Nombre: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telefono: ".clean_string($telephone)."\n";
    $email_message .= "Mensaje: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
<?php

   header( 'Location: ../index.php' ) ;

?>
<?php
}
?>
