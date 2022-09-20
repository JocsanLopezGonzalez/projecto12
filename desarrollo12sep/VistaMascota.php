<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
    img{
        width:20px;
    }
</style>
</head>
<body>
    <div class="container-fluid  text-white text-center">
        <p>
            <h2 class="bg-danger">INGRESO DE DATOS</h2>
        </p>
    </div>
    <div class="container">
       <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
        <form action="MascotasController.php" method="post" class="border shadow p-3 mb-5 bg-body rounded">
           
            <div class="mb-4">
                <label for="nombre" class="fw-bold">Nombre:</label>
            <input class="form-control" type="text" name="nombre">
            </div>
            
            
            <div class="mb-4">
                <label for="vacuna" class="fw-bold">Vacuna:</label>
                <input class="form-control" type="number" name="vacuna">
            </div>
            
            <div>
                <input class="btn bg-danger text-white" type="submit" value="Guardar Registro" name="btnGuardar">
            </div>
        </form>
        </div>
        <div class="col-3"></div>
       </div>
    </div>
    <hr>
    <h3 class="text-center text-danger">LISTADO DE MASCOTAS</h3>
    <hr>
    <div class="container">
    <table class="table table-striped">
        <th>NOMBRE</th>
        <th>VACUNAS</th>
        <th colspan="2">OPERACIONES</th>
    <?php
        include_once "MascotaModel.php";
        $Mascotas = new Mascotas();
        $ListaMascotas = $Mascotas->ListarMascotas();
        while($Mascotas = mysqli_fetch_assoc($ListaMascotas))
        {?>
          <tr>
                <td>  <?php echo $Mascotas['nombre'] ?> </td>
                <td>  <?php echo $Mascotas['vacuna'] ?> </td>
                <td><a href="VistaEditarMascota.php?idEst=<?php echo $Mascotas['idMascotas'];?>"><img src="editar.png" alt="Editar" title="Editar"></a></td>
                <td><a href="eliminar.php?idEst=<?php echo $Mascotas['idMascotas'];?>"><img src="eliminar.png" alt="Eliminar" title="Eliminar"></a></td>
                
          </tr>
          
       <?php } ?>
    
    </table>
    </div>
</body>
</html>