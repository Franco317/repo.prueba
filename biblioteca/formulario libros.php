<?php

    $Server="localhost" ;
    $User="root" ;
    $Pass="" ;
    $Base="biblioteca" ;

    $Conexion=mysqli_connect($Server, $User, $Pass, $Base);
    
    $QueryB="Select * from autores order by 2";
    $ResultadoB=mysqli_query($Conexion, $QueryB);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>TE VOY A ROBAR TU DATA</title>
</head>
<body>
    <form action="recibelibros.php"method="post">
        <!--
            agregue  class="controls" y class="botons"  en cada input que distinga las funciones 
            y a la etiqueta <section> le doy una clase que tenga el registro del formulario
        -->
    <section class="form-register">    
        <h2>Data Library</h2>

        <br>
        <label>
            Titulo
        </label>
        <input class="controls" type="text" name="Titulo">
        <br>
        <label>
            Autor 
        </label>
        <select name="Autor">

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


                                ?>



                        </select>


        
        <br>
        <label>
            ISBN
        </label>
        <input class="controls" type="number" name="ISBN"> 
       
        <br>
        <label>
            Genero
        </label>
        <input class="controls" type="text" name="Genero">


        <br>
        <label >
             Editorial
        </label>
        <input  class="controls" type="text" name="Editorial"/>
        <br>
        <label >Año de publicacion  </label>
        <input  class="controls" type="number" maxlength="4" minlength="4" placeholder="1978" name="Anio_publicacion"/>
        <br>
        <label >Stock </label>
        <input  class="controls" type="number" name="Stock" placeholder="11" />

        </br>  
               
        <input class="botons"  type="submit" name="submint" value="Guardar"/>
        <input class="botons" type="reset" name="reset" value="cancelar">

    </section>    
    </form>
    
    
</body>
</html>