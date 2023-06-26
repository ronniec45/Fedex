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
        <a href="<?php echo site_url ('clientes/nuevo'); ?>" class="btn btn-primary">
          <i class="glyphicon glyphicon-plus"> </i>
          Agregar nuevo cliente
        </a>
        <br>
        <br>
        <br>
        <br>
      </div>
    </div>

    <br>
    <?php if ($clientes):?>
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
            <th>GENERO:</th>
            <th>LATITUD:</th>
            <th>LONGITUD:</th>
            <th>ACCIONES:</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($clientes as $filaTemporal):?>
          <tr style="text-align:center">
            <td>
              <?php echo $filaTemporal->id;?>
            </td>

            <td>
              <?php echo $filaTemporal->nombre;?>
            </td>

            <td>
              <?php echo $filaTemporal->direccion;?>
            </td>

            <td>
              <?php echo $filaTemporal->ciudad;?>
            </td>

            <td>
              <?php echo $filaTemporal->provincia;?>

            </td>

            <td>
              <?php echo $filaTemporal->pais;?>
            </td>
            <td>
              <?php echo $filaTemporal->telefono;?>
            </td>
            <td>
              <?php echo $filaTemporal->genero;?>
            </td>
            <td>
              <?php echo $filaTemporal->latitud;?>
            </td>
            <td>
              <?php echo $filaTemporal->longitud;?>
            </td>
            <td class="text-center">
          <a href="#" title="Editar cliente">
            <i class="bi bi-trash" style="color:blue">editar</i>
          </a>

          <a href="<?php echo site_url(); ?>/clientes/eliminar/<?php echo $filaTemporal->id; ?>" title="Eliminar clientes" onclick="return confirm('Está seguro de eliminar el registro.');">
          &nbsp;&nbsp;
          <i class="" style="color:red">eliminar</i>
          </a>
        </td>
              </tr>
            <?php endforeach; ?>
             </tbody>
           </table>
         <?php else: ?>
         <h1 style="text-align:center">No hay ningun registro de Clientes!</h1>
         <?php endif; ?>
    <br>
    <br>
  </body>
</html>
