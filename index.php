<!doctype html>
<html>
<head>
  <meta charset=utf-8>
  <title>Emmaus</title>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php wp_head(); ?>
</head>
<body>

  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">

  <img src="wp-content/themes/emmauspag/img/LOGOSOLO.png" class="logo">
  <?php

  require_once 'bakend.php';
  require_once 'envio.php';
    $url =trim($_SERVER['REQUEST_URI'],'/') ;
    $url = explode('/',$url);

    if ( array_search('estudiantes', $url) )
    {
      require_once "vistas/visEstudiante.php";
    } else if (array_search('peticion', $url))
    {
      require_once "bakend.php";
    } else if (array_search('usuarios', $url))
    {
      require_once "vistas/usuarios.php";
    }else if (array_search('cursos', $url))
    {
      require_once "vistas/cursos.php";
    }else if (array_search('factura', $url))
    {
      require_once "vistas/facturas.php";
    }else if (array_search('caja', $url))
    {
      require_once "vistas/caja.php";
    }else if (array_search('inventario', $url))
    {
      require_once "vistas/inventario.php";
    }else if (array_search('imprimir', $url))
    {
      require_once "vistas/imprimir.php";
    }else if (array_search('certificado', $url))
    {
      require_once "vistas/certificado.php";
    }else
    {
      require_once "vistas/principal.php";
    }


  ?>


  </div>

</div>
</body>
</html>
