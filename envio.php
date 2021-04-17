
<?php
require_once "modelo.php";

$modelo_estudiantes = new modelo('estudiantes');
$modelo_promotores = new modelo('promotores');






function buscar_datos()
{
  if (isset($_POST['Nombres']) ? $_POST['Nombres'] : null)
  {

    $information = $_POST ;
    print_r($_POST);
    $modelo_estudiantes = new modelo('estudiantes');
    $informacion=$modelo_estudiantes->buscador_nombre($information);
    print_r($informacion);
  }
}
