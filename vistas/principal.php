
  <div class="principal  col-6 mx-auto">
    <?php $url = urlemma($_SERVER['REQUEST_URI']);

     ?>
    <div class="lateral">
      <button class="btn btn-primary" type="button" name="button">
        <a href="<?=site_url('/estudiantes'); ?>" class="class_a_href" >ESTUDIANTES</a>
      </button>

      <button class="btn btn-primary"  type="button" name="button">
        <a href="<?= site_url('/usuarios'); ?>" class="class_a_href">USUARIOS</a>
      </button>

      <button class="btn btn-primary"  type="button" name="button">
        <a href="<?= site_url('/cursos'); ?>" class="class_a_href">CURSOS</a>
      </button>


      <button class="btn btn-primary" type="button" name="button">
        <a href=" <?= site_url('/factura'); ?>" class="class_a_href" >FACTURA</a>
      </button>


      <button class="btn btn-primary" type="button" name="button">
        <a href="<?= site_url('/caja'); ?> " class="class_a_href">CAJA</a>
      </button>


      <button class="btn btn-primary" type="button" name="button">
        <a href="<?= site_url('/inventario'); ?>" class="class_a_href">INVENTARIO</a>
      </button>

      <button class="btn btn-primary" type="button" name="button">
        <a href="<?= site_url('/imprimir'); ?>" class="class_a_href">IMPRIMIR</a>
      </button>

      <button class="btn btn-primary"  type="button" name="button">
        <a href="<?= site_url('/certificado'); ?>" class="class_a_href">CERTIFICADO</a>
      </button>

      <button class="btn btn-primary"  type="button" name="button">
        <a href="<?= site_url('/diplomas'); ?>" class="class_a_href">DIPLOMAS Y ACTAS</a>
      </button>

      <button class="btn btn-primary"  type="button" name="button">
        <a href="<?= site_url('/validar'); ?>" class="class_a_href">VALIDACION DE DIPLOMAS</a>
      </button>

      <button class="btn btn-primary"  type="button" name="button">
        <a href="<?= site_url('/proveedores'); ?>" class="class_a_href">PROVEEDORES</a>
      </button>
    </div>

    <div class="otro-lado text-center">
      <blockquote class="blockquote text-center">
        <img src="<?=$url?>/img/activos.png"
         class="img-responsive img-rounded navbar-brand " width="150px" height="150px" >
        <footer class="blockquote-footer">Estudiantes Activos <cite title="Source Title">Emmaus-pereira</cite></footer>
      </blockquote>

      <blockquote class="blockquote text-center">
        <img src="<?=$url?>/img/activos.png"
         class="img-responsive img-rounded navbar-brand " width="150px" height="150px" >
        <footer class="blockquote-footer">Estudiantes  No Activos <cite title="Source Title">Emmaus-pereira</cite></footer>
      </blockquote>
    </div>
</div>


  <div class="iconos-activos">



  </div>
