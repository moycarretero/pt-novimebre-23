<?php

$palabra = $_POST['palabra'];
$file = $_FILES['fichero'];

$contenidoFichero = file_get_contents($file["tmp_name"]);

echo substr_count(strtolower($contenidoFichero), strtolower($palabra));