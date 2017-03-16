<?php

$target_path = "uploads/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) { echo "El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido";
} else{
echo "Ha ocurrido un error, trate de nuevo!";
}

//if ($_FILES['archivo']["error"] > 0)
//  {
//  echo "Error: " . $_FILES['archivo']['error'] . "<br>";
//  }
//else
//  {
//  echo "Nombre: " . $_FILES['archivo']['name'] . "<br>";
//  echo "Tipo: " . $_FILES['archivo']['type'] . "<br>";
//  echo "Tamaño: " . ($_FILES["archivo"]["size"] / 1024) . " kB<br>";
//  echo "Carpeta temporal: " . $_FILES['archivo']['tmp_name'];
  /*ahora co la funcion move_uploaded_file lo guardaremos en el destino que queramos*/
//move_uploaded_file($_FILES['archivo']['tmp_name'], view source "subidas/" . $_FILES['archivo']['name']);<em id="__mceDel"> </em>

?>

