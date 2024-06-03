<?php

    $Server="localhost";
    $User="root";
    $Pass="";
    $Base="restaurante";

    $Conexion=mysqli_connect($Server, $User, $Pass, $Base);



    $QueryB="select * from empleados order by 2";
    $ResultadoB=mysqli_query($Conexion,$QueryB);

    $QueryC="select * from mesa order by 2";
    $ResultadoC=mysqli_query($Conexion,$QueryC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="css\style.css">
</head>
<body>
    
    <form action="recibepedido.php" method="post">
        <h1>tipo pedido</h1>

        <div class="input-group">

        <br>
             <label><input type="radio" name="opcion" value="comida" required> Comida</label>
            <label><input type="radio" name="opcion" value="bebida"> Bebida</label>
              <label><input type="radio" name="opcion" value="postre"> Postre</label>
        <input type="text" name="tipo" placeholder="nombre de tu pedido"/>
        
        
        <br>
        <label>
            cantidad
        </label>
        <input type="number" name="cantidad" placeholder="cuantos pediste" />
        <br/>
        
        
        <br>
    
        <label>
            precio total
        </label>
        
            
        <input type="number"  step="0.01" name="total" placeholder="0.00" required />
        
        <br/>
        
        <br>
             <label>
                  empleado
            </label>
            
       <select name="empleado">

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
        
        </br>
        
        <br>
            <label>
                mesa
            </label>
             
       <select name="mesa">

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
        
        <br/>  

       
        <br/>

        <br>

        <input type="submit" name="enviar" value="guardar" />
        <input type="reset" name="reset" value="cancelar" />
        
    </div>  
        
    
</form>    
</body>
</html>