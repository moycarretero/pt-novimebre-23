<?php
    $user = $_POST['usuario'];
    $password = $_POST['contraseña'];
    $file = $_FILES['fichero'];
    /*
     * var usuario = {'name': 'Alejandro', 'id': 4}
     * usuario.name
     *
     * $usuario = ['name' => 'Alejandro', 'id' => 4]
     * $usuario['name']
     *
     * array(5) {
          ["name"]=> string(7) "FRY.jpg"
          ["type"]=> string(10) "image/jpeg"
          ["tmp_name"]=> string(66) "/private/var/folders/js/p4bbn2r14plbtcfkkpyjvnk00000gn/T/phpBDh2xW"
          ["error"]=>  int(0)
          ["size"]=> int(31913)
     * */

    //echo "El usuario es $user y la contraseña $password";
    //print_r($file);

    header("Content-Type: ".$file['type']);
    echo file_get_contents($file['tmp_name']);
