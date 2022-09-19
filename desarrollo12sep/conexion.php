<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("host","user","password","Database name");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos   ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }