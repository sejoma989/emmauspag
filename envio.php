
<?php
require_once "modelo.php";

$modelo_estudiantes = new modelo('estudiantes');
$modelo_promotores = new modelo('promotores');


  $args = array();

  if ( isset($_POST) && isset($_POST['tabla']) )
  {
    $args['tabla'] = $_POST['tabla'];
    unset($_POST['tabla']);

    if ( $_POST['selecionador'] == 1 )
    {
      unset($_POST['selecionador']);
    }
    $args['datos'] = $_POST;


    if ($args['datos']['Nombres'] != '') {
        $modelo_estudiantes->insertar_wpdb($args, $args['tabla']);
    }

  }



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
