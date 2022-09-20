<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("bpiucaqxf7yxk7ez58do-mysql.services.clever-cloud.com","utg7yk2shpbt6qpc","i716NPs6b4azf8n3JeYS","bpiucaqxf7yxk7ez58do");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos   ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }