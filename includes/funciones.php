<?php

function obtenerServicios(): array
{

    try {
        //Importar una conexión
        require 'database.php';

        //Escribir el codigo Sql
        $sql = "SELECT * FROM servicios";
        
        //Llamar a la consulta
        $consulta = mysqli_query($db, $sql);


        
        
        $i = 0;
        $servicios = [];
        while ($row = mysqli_fetch_assoc($consulta)) {
            $servicios[$i]['id'] = $row['id'];
            $servicios[$i]['nombre'] = $row['nombre'];
            $servicios[$i]['precio'] = $row['precio'];
            $i++;
        }

        

        return $servicios;
    } catch (\Throwable $th) {
        //throw $th;

        var_dump($th);
    }
}
