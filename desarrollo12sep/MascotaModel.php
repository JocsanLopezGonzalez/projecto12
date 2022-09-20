<?php
include_once "conexion.php";


class Mascota
{
    private $nombre;
    private $vacuna;

    /*public function __construct($nom,$vac)
    {
        $this->nombre = $nom;
        $this->vacuna = $vac;
    }*/

    public function GuardarMascotas($nom,$vac)
    {
       /*CONEXION A LA BASE DE DATOS*/ 
       $nuevaConexion = new conexion();
       $ComandoConexion = $nuevaConexion->Conectar();
       $ComandoConexion->query("insert into Mascotas (nombre,vacuna) values ("."'".$_POST['nombre']."','".$_POST['vacuna']."')" );

       if(!$ComandoConexion)
       {
        echo "Ocurriò un error al insertar el registro....".mysqli_error($ComandoConexion);
       }
       /*echo "Registro agregado exitosamente";*/
       header("Location: VistaMascota.php");
    }
    public function ListarMascotas()
    {
      $OtraConexion = new conexion();
      $nuevoComando = $OtraConexion->Conectar();
      $resultado = $nuevoComando->query("Select * from Mascotas");
      if(!$resultado)
      {
        echo "Error Al intentar realizar Consulta de Mascotas...".mysqli_error($nuevoComando);
      } 
      return $resultado;
      
    }

    public function FiltrarMascotas($id)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $resultado = $nuevoComando->query("Select * from Mascotas where idMascotas=$id");
      return $resultado;
    }

    public function EditarMascota($id,$nom,$vac)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $nuevoComando->query("Update Mascotas set nombre="."'".$nom."',vacuna="."'".$vac."'"." where idMascota = $id");
    }

    public function EliminarMascota($id,$nom,$vac)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $nuevoComando->query("Delete From Mascotas where idMascota = $id");
    }
}
