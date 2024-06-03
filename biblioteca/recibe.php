<?php
    $Nombre= $_POST["Nombre"];
    $Apellido= $_POST["Apellido"];
    $FecNac= $_POST["FecNac"];
    $DNI= $_POST["DNI"];
    $Barrio= $_POST["Barrio"];
    $Domicilio= $_POST["Domicilio"];
    $Telefono= $_POST["telefono"];
    $Email= $_POST["email"];
    

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

$Query="INSERT INTO `usuarios`(`Id_usuario`, `Nombre_usuario`, `Apellido_usuario`, `FecNac_usuario`, `DNI_usuario`, 
`Barrio_usuario`, `Domicilio_usuario`, `Telefono_usuario`, `Email_usuario`)
VALUES (0,'$Nombre','$Apellido','$FecNac','$DNI' ,
 '$Barrio','$Domicilio', '$Telefono', '$Email')"; 
 
echo $Query;

$Resultado= mysqli_query($Connect, $Query);

?>