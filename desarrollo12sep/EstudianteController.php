<?php
include "EstudianteModel.php";
$nuevoEstudiante = new Estudiante();

if(isset($_POST['btnGuardar']))
{
    $nuevoEstudiante->GuardarEstudiante($_POST['apellidos'],$_POST['nombre'],$_POST['direccion'],$_POST['telefono']);
    header('Location: VistaEstudiante.php');
}
else
if(isset($_POST['btnEditar']))
{
 $nuevoEstudiante->EditarEstudiante($_POST['idStudent'],$_POST['txtapellidos'],$_POST['txtnombre'],$_POST['txtdireccion'],$_POST['txttelefono']); 
 header('Location: VistaEstudiante.php');
        
}
else
if(isset($_POST['btnEliminar']))
{
 $nuevoEstudiante->EliminarEstudiante($_POST['idStudent'],$_POST['txtapellidos'],$_POST['txtnombre'],$_POST['direccion'],$_POST['telefono']); 
 header('Location: VistaEstudiante.php');
        
}



