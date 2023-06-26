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
        <a href="<?php echo site_url ('sucursales/nuevo'); ?>" class="btn btn-primary">
          <i class="glyphicon glyphicon-plus"> </i>
          Agregar Sucursal
        </a>
        <br>
        <br>
        <br>
        <br>
      </div>
    </div>

    <br>
    <?php if ($sucursales):?>
      <table class="table table-striped table-striped">
        <thead>
          <tr style="text-align:center">
            <th>ID:</th>
            <th>NOMBRE:</th>
            <th>DIRECCION:</th>
            <th>CIUDAD:</th>
            <th>PROVINCIA:</th>
            <th>PAIS:</th>
            <th>TELEFONO:</th>
            <th>EMAIL:</th>
            <th>LATITUD:</th>
            <th>LONGITUD:</th>
            <th>ACCIONES:</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($sucursales as $filaTemporal):?>
          <tr style="text-align:center">
            <td>
              <?php echo $filaTemporal->id_su;?>
            </td>

            <td>
              <?php echo $filaTemporal->nombre_su;?>
            </td>

            <td>
              <?php echo $filaTemporal->direccion_su;?>
            </td>

            <td>
              <?php echo $filaTemporal->ciudad_su;?>
            </td>

            <td>
              <?php echo $filaTemporal->provincia_su;?>

            </td>

            <td>
              <?php echo $filaTemporal->pais_su;?>
            </td>
            <td>
              <?php echo $filaTemporal->telefono_su;?>
            </td>
            <td>
              <?php echo $filaTemporal->email_su;?>
            </td>
            <td>
              <?php echo $filaTemporal->latitud_su;?>
            </td>
            <td>
              <?php echo $filaTemporal->longitud_su;?>
            </td>
            <td class="text-center">
          <a href="#" title="Editar sucursal">
            <i class="bi bi-trash" style="color:blue">editar</i>
          </a>

          <a href="<?php echo site_url(); ?>/sucursales/eliminar/<?php echo $filaTemporal->id_su; ?>" title="Eliminar sucursales" onclick="return confirm('Está seguro de eliminar el registro.');">
          &nbsp;&nbsp;
          <i class="" style="color:red">eliminar</i>
          </a>
        </td>
              </tr>
            <?php endforeach; ?>
             </tbody>
           </table>
         <?php else: ?>
         <h1 style="text-align:center">No hay ningun registro de Sucursales!</h1>
         <?php endif; ?>
    <br>
    <br>
  </body>
</html>
