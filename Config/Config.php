<?php

// Obtener la dirección base del servidor
$base_url = $_SERVER['HTTP_HOST'];

// Agregar la carpeta del proyecto si es necesario
if (strpos($_SERVER['REQUEST_URI'], '/test/') !== false) {
    $base_url .= '/test';
}

// Agregar la carpeta "conversiones"
$base_url .= '/conversiones';

// Definir la constante BASE_URL
define("BASE_URL", "http://" . $base_url);

// Zona horaria
date_default_timezone_set('America/El_Salvador');

// Datos de conexión a Base de Datos
const DB_HOST = "localhost";
const DB_NAME = "";
const DB_USER = "root";
const DB_PASSWORD = "";
const DB_CHARSET = "charset=utf8";

// Delimitadores decimal y millar Ej. 24,1989.00
const SPD = ".";
const SPM = ",";

// Símbolo de moneda
const SMONEY = "Q";

?>


