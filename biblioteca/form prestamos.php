<?php

    $Server="localhost" ;
    $User="root" ;
    $Pass="" ;
    $Base="biblioteca" ;

    $Conexion=mysqli_connect($Server, $User, $Pass, $Base);
    
    $QueryB="Select * from libros order by 2";
    $ResultadoB=mysqli_query($Conexion, $QueryB);

    $QueryC="Select * from usuarios order by 2";
    $ResultadoC=mysqli_query($Conexion, $QueryC);

    //utilizamos el $Query para seleccionar una tabla usando una letra en cada $Query, ejemplo usamos el $QueryB y ResultadoB para
    //seleccionar la tabla usuarios y el $QueryC y ResultadoC para seleccionar la tabla libros

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style4.css">
    <title>TE VOY A ROBAR TU DATA</title>
</head>
<body>
    <form action="recibeprestamos.php"method="post"><!---->
      <section class="form-register">
        <h2>Data prestamo</h2>

        <br>
        <label>
            Titulo Libro
        </label>
         <select name="Id_libro">

                                <?php

                                   $fila=mysqli_num_rows($ResultadoB);

                                        if ($fila>0)
                                                {
            
                                                 while($registro=mysqli_fetch_array($ResultadoB))

                                                        {
                                                                echo '<option value="'.$registro[0].'">'.$registro[1].'</option>';
                                                        }
                                                }
                                         else
                                                {
                                                        echo '<option> sin datos</option>';
                                                }

                                                //aqui lo que hacemos es que en los labels, usamos un select donde seleccionamos el $Query 
                                                //de la tabla que elejimos, aqui en titulo libro usamos el $QueryB donde seleccionamos la tabla
                                                //libros, haciendo que en el label "titulo libro" salgan los datos de la tabla libros
                                ?>



                        </select>
        <br>
        <label>
            Nombre usuario
        </label>
        <select name="Id_usuario">

                                <?php

                                   $fila=mysqli_num_rows($ResultadoC);

                                        if ($fila>0)
                                                {
            
                                                 while($registro=mysqli_fetch_array($ResultadoC))

                                                        {
                                                                echo '<option value="'.$registro[0].'">'.$registro[1].'</option>';
                                                        }
                                                }
                                         else
                                                {
                                                        echo '<option> sin datos</option>';
                                                }


                                ?>



            </select>
        
        <br>
        <label>
            Fecha prestamo  
        </label>
        <input class="controls" type="date" name="Fecha_prestamo"> 
       
        <br>
        <label>
            Fecha devolucion
        </label>
        <input class="controls" type="date" name="Fecha_devolucion">


        <br>
      

        </br>  
               
       
        <input class="botons" type="submit" name="submint" value="Guardar"/>
        <input class="botons" type="reset" name="reset" value="cancelar">

     </section> 
    </form>
    
    
</body>
</html>