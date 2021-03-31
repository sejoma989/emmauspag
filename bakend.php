<?php
  require_once "modelo.php";
 #require_once 'envio.php';
  $nombre = isset($_POST['Nombres']) ? $_POST['Nombres'] : null;
  $apellido = isset($_POST['Apellidos']) ? $_POST['Apellidos'] : null;
  $modelo_buscador = new modelo( 'estudiantes');
  #print_r($_POST);
  if (isset($_POST['Nombres']) ? $_POST['Nombres'] : null)
  {

    $information = $_POST ;
    $informacion = $modelo_buscador->buscador_personas($_POST);
    echo '<pre>';
    print_r($informacion);
    echo '</pre>';
  }
  #echo $nombre." ".$apellido;
