<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        #Variable Numerica
        $numero = 5;
        echo "Esto es una variable con numero: $numero<br>";
        var_dump($numero); 
        echo "<br><br>";
        
        
        #Variable Texto
        $palabra = "palabra";
        echo "Esto es una variable texto: $palabra<br>";
        var_dump($palabra); 
        echo "<br><br>";
        
        
        #Variable Booleana
        $booleana = true;
        echo "Esta es una variable booleana: $booleana<br>";
        var_dump($booleana);
        echo "<br><br>";
        
               
        #Variable Arreglo
        $colores = array("rojo", "amarillo");
        echo "Esto es una variable arreglo: $colores[1]<br>";
        var_dump($colores);
        echo "<br><br>";
        
        
        #Variable Arreglo con propiedades
        $verduras = array("verdura1"=>"Lechuga", "verdura2"=>"Cebolla");
        echo "Esto es una variable arreglo con propiedades: $verduras[verdura2]<br>";
        var_dump($verduras);
        echo "<br><br>";
                
        
        #Variable Objeto
        $frutas = (object)["fruta1"=>"Pera", "fruta2"=>"Manzana"];
        echo "Esto es una variable objeto: $frutas->fruta2<br>";
        var_dump($frutas);
        echo "<br><br>";
        ?>
    </body>
</html>
