<?php
include "MascotaModel.php";
$nuevoMascotas = new Mascotas();

if(isset($_POST['btnGuardar']))
{
    $nuevoMascotas->GuardarMascotas($_POST['nombre'],$_POST['vacuna']);
    header('Location: VistaMascotas.php');
}
else
if(isset($_POST['btnEditar']))
{
 $nuevoMascotas->EditarMascotas($_POST['idMascotas'],$_POST['txtnombre'],$_POST['txtvacuna']); 
 header('Location: VistaMascotas.php');
        
}
else
if(isset($_POST['btnEliminar']))
{
 $nuevoMascotas->EliminarMascotas($_POST['idMascotas'],$_POST['txtnombre'],$_POST['txtvacuna']); 
 header('Location: VistaMascotas.php');
        
}



