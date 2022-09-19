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
        <form action="EstudianteController.php" method="post" class="border shadow p-3 mb-5 bg-body rounded">
            <div class="mb-4">
                <label for="apellidos" class="fw-bold">Apellidos:</label>
                <input class="form-control" type="text" name="apellidos">
            </div>
            
            <div class="mb-4">
                <label for="nombre" class="fw-bold">Nombre:</label>
            <input class="form-control" type="text" name="nombre">
            </div>
            
            <div class="mb-4">
                <label for="direccion" class="fw-bold">direccion:</label>
                <input class="form-control" type="text" name="direccion">
            </div>
            
            <div class="mb-4">
                <label for="telefono" class="fw-bold">Telefono:</label>
                <input class="form-control" type="number" name="telefono">
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
    <h3 class="text-center text-danger">LISTADO DE ESTUDIANTES</h3>
    <hr>
    <div class="container">
    <table class="table table-striped">
        <th>NOMBRE</th>
        <th>APELLIDOS</th>
        <th>DIRECCION</th>
        <th>TELEFONO</th>
        <th colspan="2">OPERACIONES</th>
    <?php
        include_once "EstudianteModel.php";
        $Estudiante = new Estudiante();
        $ListaEstudiantes = $Estudiante->ListarEstudiantes();
        while($Estudiantes = mysqli_fetch_assoc($ListaEstudiantes))
        {?>
          <tr>
                <td>  <?php echo $Estudiantes['nombre'] ?> </td>
                <td>  <?php echo $Estudiantes['apellidos'] ?> </td>
                <td>  <?php echo $Estudiantes['direccion'] ?> </td>
                <td>  <?php echo $Estudiantes['telefono'] ?> </td>
                <td><a href="VistaEditarEstudiante.php?idEst=<?php echo $Estudiantes['idEstudiante'];?>"><img src="editar.png" alt="Editar" title="Editar"></a></td>
                <td><a href="eliminar.php?idEst=<?php echo $Estudiantes['idEstudiante'];?>"><img src="eliminar.png" alt="Eliminar" title="Eliminar"></a></td>
                
          </tr>
          
       <?php } ?>
    
    </table>
    </div>
</body>
</html>