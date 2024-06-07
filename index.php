<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Integradora Módulo 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="Bienvenida">
   <?php 
    // Ejemplo Constante Define
    define("BIENVENIDA", "Bienvenidos a mi página web");
    echo BIENVENIDA;
    echo  "<br>"
    ?> 
    </div>
    <?php 
    
    //Ejemplo Variable

    $nombre = "Tomás";
    $edad = 23;
    $altura = "1.64cm";
    $peso = "64kg"
    ?>

   <section class="variables">
        <div class="variable1">
            <h2 class="tituloh2">Acerca de mí:</h2>
                <ul>
                    <li> Nombre: <?php echo $nombre; ?> </li>
                    <li> Edad: <?php echo $edad; ?> </li>
                    <li> Altura: <?php echo $altura; ?> </li>
                    <li> Peso: <?php echo $peso; ?> </li>
                </ul>
        </div>
    </section>


    <section class="variables">
        <div class="variable2">
            <h2 class="tituloh2"> Acerca de mi mediante variable array: </h2>
            <?php

            //Ejemplo Array asociativo

    $mi_info = array (
    "nombre" => "Tomás", 
    "edad" => 23,
    "altura" => "1.64cm",
    "peso" => "64kg",
    );

    echo "Nombre: ". $mi_info["nombre"] . "<br>";
    echo "Edad:" . $mi_info["edad"] . "<br>";
    echo "Altura:" . $mi_info["altura"] . "<br>";
    echo "Peso:" . $mi_info["peso"] . "<br>";
            ?>
        </div>

    </section>

    

    <section class="variables">
    <div class="operadores">
            <h2 class="tituloh2"> Ejemplo Operadores </h2>
            <p>Operador de asignación:</p>
    
    <?php 
    //Ejemplo Operador de asignación
    
    $texto1 = "Voy a unir ";
    
    $texto2 = "estos dos textos en uno";
    
    $texto1 .= $texto2;
    
    echo $texto1;
    ?>

    <p> <br>Ejemplo operador de Comparación: <br></p>
    
    <?php 
    //Ejemplo Operador de Comparación
    
    $a = "Perro";

    $b = "Gato";
    
    $c = "Gato";
    
    echo $b == $c,"<br>";


    ?>
    </div>
    <br>
    <footer class="footer">
    <p>Página web hecha por:</p>
    <?php
    //Ejemplo constante
        const CREADOR = "Tomás Romero";
        echo CREADOR;
    ?>

    </footer>
</body>
</html>