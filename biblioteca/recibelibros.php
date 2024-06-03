<?php 
     $Titulo= $_POST["Titulo"];
     $Autor=$_POST["Autor"];
     $ISBN=$_POST["ISBN"];
     $Genero=$_POST["Genero"];
     $Editorial=$_POST["Editorial"];
     $ADP=$_POST["Anio_publicacion"];
     $Stock=$_POST["Stock"];

     

     
     $Server="localhost";
     $Base="biblioteca";
     $User="root" ;
     $Pass="" ;

     $Connect=mysqli_connect($Server, $User ,$Pass , $Base);
                
    if (!$Connect){
        die ("fallo la conexion ".mysqli_connect_error());
    }
    else{
        echo"conexion exitosa";
    }

    $Query="INSERT INTO `libros`(`Id_libro`, `Titulo_libro`, `Autor_libro`, 
    `ISBN`, `Genero`, `Editorial`, `Año_publicacion`, `Stock`)
    VALUES (0 ,'$Titulo','$Autor','$ISBN','$Genero','$Editorial','$ADP','$Stock')";

    echo $Query;

    $Resultado= mysqli_query($Connect,$Query);
?>