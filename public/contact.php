<?php
$captcha = $_POST['g-recaptcha-response'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$para = 'giancarlidamian@hotmail.com';
$titulo = 'mensaje web';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n Apellido: $apellido\n E-Mail: $email\n Tel: $telefono\n Mensaje:\n $mensaje";
  


if($captcha !=''){
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'> 
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'https://giancarli.com.ar/';
</script>";
} else {
echo 'Falló el envio';
}
}





}
else{
$secret="6LdVL0oUAAAAAAZa-WEFw_PnE72yq9DElmsO0eyI";
$ip = $_SERVER['REMOTE_ADDR'];
$var = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
$responseKeys = json_decode($var,true);
echo "<script language='javascript'> 
alert('Verifique el captcha');
window.location.href = 'https://giancarli.com.ar/';
</script>";
}

?>