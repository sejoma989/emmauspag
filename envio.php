
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



    $modelo_estudiantes->insertar_wpdb($args, $args['tabla']);
  }
