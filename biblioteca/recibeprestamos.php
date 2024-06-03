<?php
    $Id_libro= $_POST["Id_libro"];
    $Id_usuario= $_POST["Id_usuario"];
    $Fecha_prestamo=$_POST["Fecha_prestamo"];
    $Fecha_devolucion =$_POST["Fecha_devolucion"];

    $Server="localhost";
    $Base="biblioteca";
    $User="root" ;
    $Pass="" ;

    //creo la conexion y la guardo en la variable $connect

    $Connect=mysqli_connect($Server, $User ,$Pass , $Base);
                
    if (!$Connect){
        die ("fallo la conexion ".mysqli_connect_error());
    }
    else{
        echo"conexion exitosa";
    }

 $Query="INSERT INTO `prestamos`(`Id_prestamo`, `Libro_id`, `Usuario_id`
 ,`Fecha_prestamo`, `Fecha_devolucion`) 
 VALUES (0,'$Id_libro','$Id_usuario','$Fecha_prestamo','$Fecha_devolucion')";

 echo $Query;
 $Resultado= mysqli_query($Connect,$Query);




?>