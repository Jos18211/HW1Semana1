<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?php
        $fecha = date("d/m/y");
        echo "La fecha de hoy es:" . $fecha . "<br/>";
        echo "La fecha de hoy es:" . $fecha . "<br/>";
        $nombre = "Joseph Quesada Salas";

        if (isset($nombre)) {
            echo " El nombre existe!<br/";
        }

        unset($nombre);

        if (isset($nombre)) {
            echo " El nombre existe!<br/";
        } else {
            echo " El nombre no  existe!<br/";
        }

        $mi_array = array(
            "cer" => 23,
            "uno" => 45,
            2 => 76,
        );
        #=> asiganar valore a los array
        # -> POO, en lugar del punto 


        
        echo "<h4>print_r</h4>";
        print_r($mi_array);

        echo "<h4>var_dump</h4>";
        var_dump($mi_array);

        require_once("clase.php");
        $instacia = new Persona("Jose", "Granado");
        echo "<br/>";
        print_r($instacia);
        echo "<br/>";
        $json=json_encode($instacia,JSON_UNESCAPED_UNICODE);
        echo $json;

        ?>
    </p>
</body>

</html>