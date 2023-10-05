<?php

$nombre_form=$_POST['nombre'];
$apellido_form=$_POST['apellido'];
$telefono_form=$_POST['telefono'];
$mensaje_form=$_POST['mensaje'];

$cuerpo="Nombre: ".$nombre_form."\r\n"."Apellido: ".$apellido_form."\r\n"."Telefono: ".$telefono_form."\r\n"."Mensaje: ".$mensaje_form;

@mail("barrientosbelen30@gmail.com", "Mensaje de mi sitio Full Color Web", $cuerpo);

include("conection.php");

mysqli_query($datos_bd, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$telefono_form', '$mensaje_form')");


header("Location: index.php?e=ok#Contacto");

?>