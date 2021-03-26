<div class="contenedor-estudiantes">

</div>
<div class="container">

  <a href="#ident" class="btn btn-sucess" data-toggle="collapse">insertar</a>
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
      <input type="hidden" name="tabla" value="estudiantes"/>
      <input type="submit" value="Enviar"/>
    </form>
  </div>
</div>

<div class="container">
  <a href="#buscar" class="btn btn-sucess" data-toggle="collapse">Buscar</a>
  <div id="buscar" class="collapse">
      <?php
      $columnas = $modelo_estudiantes->columnas_sin_llaves();
      ?>
          <input  class="buscador" type="text" name="data" id="dato" placeholder="Digite los NOMBRES"/>
          <button id="enviar" >consultar</button>
          <br>
          <br>
          <div id="respuesta"></div>

      <script>
        $('#enviar').click(function (e){
          e.preventDefault();
          var dato = document.getElementById('dato').value;
          var ruta="noms="+dato;

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

<div class="boton-volver">
  <button class="boton_para_volver" name="button">
  <a href="<?=site_url()?>">Volver</a>
  </button>
</div>
</div>
