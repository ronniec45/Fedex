<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="row">
      <div class="col-md-8 text-center">
        <h1>LISTA DE SUCURSALES</h1>
      </div>
      <div class="col-md-4">
        <br>
        <br>
        <a href="<?php echo site_url ('productos/nuevo'); ?>" class="btn btn-primary">
          <i class="glyphicon glyphicon-plus"> </i>
          Agregar Producto
        </a>
        <br>
        <br>
        <br>
        <br>
      </div>
    </div>

    <br>
    <?php if ($productos):?>
      <table class="table table-striped table-success">
        <thead>
          <tr style="text-align:center">
            <th>ID:</th>
            <th>NOMBRE:</th>
            <th>DESCRIPCION:</th>
            <th>PRECIO:</th>
            <th>PROVEEDOR:</th>
            <th>UM:</th>
            <th>FECHA DE INGRESO:</th>
            <th>LATITUD:</th>
            <th>LONGITUD:</th>
            <th>ACCIONES:</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($productos as $filaTemporal):?>
          <tr style="text-align:center">
            <td>
              <?php echo $filaTemporal->id_pro;?>
            </td>

            <td>
              <?php echo $filaTemporal->nombre_pro;?>
            </td>

            <td>
              <?php echo $filaTemporal->descripcion_pro;?>
            </td>

            <td>
              <?php echo $filaTemporal->precio_pro;?>
            </td>

            <td>
              <?php echo $filaTemporal->proveedor_pro;?>

            </td>

            <td>
              <?php echo $filaTemporal->um_pro;?>
            </td>
            <td>
              <?php echo $filaTemporal->fecha_ingreso_pro;?>
            </td>
            <td>
              <?php echo $filaTemporal->latitud_pro;?>
            </td>
            <td>
              <?php echo $filaTemporal->longitud_pro;?>
            </td>
            <td class="text-center">
          <a href="#" title="Editar producto">
            <i class="bi bi-trash" style="color:blue">editar</i>
          </a>

          <a href="<?php echo site_url(); ?>/productos/eliminar/<?php echo $filaTemporal->id_pro; ?>" title="Eliminar productos" onclick="return confirm('Está seguro de eliminar el registro.');">
          &nbsp;&nbsp;
          <i class="" style="color:red">eliminar</i>
          </a>
        </td>
              </tr>
            <?php endforeach; ?>
             </tbody>
           </table>
         <?php else: ?>
         <h1 style="text-align:center">No hay ningun registro de Productos!</h1>
         <?php endif; ?>
    <br>
    <br>
  </body>
</html>
