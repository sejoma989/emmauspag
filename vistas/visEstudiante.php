<div class="contenedor-estudiantes">
  <div class="titulo text-center">
    <h1>ADMINISTRACIÓN DE ESTUDIANTES</h1>
  </div>
  <form class="d-md-flex">
        <input class="form-control me-2" type="search" placeholder="DIGITE EL NOMBRE " aria-label="Search">
        <button class="btn btn-outline-success" type="submit">BUSCAR</button>
  </form>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Cursos Terminados</th>
      <th scope="col">Ultimo Curso</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">0</th>
      <td>Jose Mario</td>
      <td>Dosquebradas</td>
      <td>5</td>
      <td>el hombre perfecto</td>
      <td>05/05/2020</td>
    </tr>
  </tbody>
</table>




</div>

<div class="crudd">
  <button class="btn btn-primary" type="button" name="button">


  <div class="container">

    <a href="#ident" class="btn-crudd btn-sucess" data-toggle="collapse">Insertar Estudiante Nuevo</a>
    <div id="ident" class="collapse">
      <form action="" class="form-inline" method="post">
        <input type="hidden" name="tabla" value="estudiantes"/>
        <?php


        $primary_Key = $modelo_estudiantes->primary_key();
        $llaves_foranes = $modelo_estudiantes->get_key_foreaneas();
        $colum_name = $modelo_estudiantes->columnas_sin_llaves();



        foreach($llaves_foranes as $noimporta)
          {
                $n=0;
                $opciones_select = $modelo_estudiantes->get_field_key_foreanea_select('Nombres', $noimporta['REFERENCED_TABLE_NAME']);
                ?>
                <label for="campo1"><?php echo $noimporta['REFERENCED_TABLE_NAME']; ?> </label>
                <select class="selection" name="selecionador">
                    <?php foreach ($opciones_select as $nombres) { ?>
                      <option value="<?php echo 1 ?>"><?php echo $nombres['Nombres'] ?></option>
                      <?php  } ?>
                </select>
          <?php
          }
        foreach ($colum_name as  $value)
                {
                      ?><p>
                        <label for="campo1"><?php echo $value['COLUMN_NAME']; ?> </label>
                        <input type="text" id="campo1" name="<?php  echo $value['COLUMN_NAME'] ?>" placeholder="Inserta un dato"/>
                       </p>
                      <?php
                    }
          ?>
        <input type="submit" value="Enviar"/>
      </form>
    </div>
  </div>
</button>
<button class="btn btn-primary" type="button" name="button">
  <div class="container">
    <a href="#buscar" class="btn-crudd btn-sucess" data-toggle="collapse">Actualizar Estudiante</a>
    <div id="buscar" class="collapse">
        <?php
        $columnas = $modelo_estudiantes->columnas_sin_llaves();
        ?>
          <form class="formulario_busqueda" method="post">
            <input  type="hidden" name="tabla" value="estudiantes"/>
            <input   type="text" name="Nombres"  placeholder="Digite los NOMBRES"/>
            <input   type="text" name="Apellidos"  placeholder="Digite los APELLIDOS"/>
            <input  id="Enviar" type="submit" value="consultar"/>
          </form>
            <div id="respuesta"></div>
        <script>
          $('#enviar').click(function (e){
            e.preventDefault();
            //var dato = document.getElementById('dato').value;
            var ruta= $(this).serialize();
            console.log(ruta)

            $.ajax(
              {
                "url": 'wp-content/themes/emmauspag/bakend.php',
                "method":'POST',
                "data" : ruta

            })
            .done(function(res)
            {
              //muestro la respuesta del servidor
              $('#respuesta').html(res)
            })
            .fail(function(){
              console.log("error");
            })
            .always(function()
            {
              console.log("complete");
            });
          });
        </script>

    </div>
  </div>
</div>
</button>

<div class="boton-volver">
  <button class="boton_para_volver" name="button">
  <a href="<?=site_url()?>">Volver</a>
  </button>
</div>
</div>
