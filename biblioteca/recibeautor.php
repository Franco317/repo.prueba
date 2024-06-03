<?php
    $Nombre= $_POST["Nombre"];
    $Apellido= $_POST["Apellido"];
    $FecNac=$_POST["FecNac"];
    $Nacionalidad=$_POST["Nacionalidad"];

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

 $Query="INSERT INTO  `autores`(`Id_autor`, `Nombre_autor`, `Apellido_autor`,
`FecNac_autor`,`Nacionalidad_autor`) 
 VALUES (0,'$Nombre','$Apellido','$FecNac','$Nacionalidad' )";

 echo $Query;
 $Resultado= mysqli_query($Connect,$Query);




?>