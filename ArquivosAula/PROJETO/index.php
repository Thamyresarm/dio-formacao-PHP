<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
</head>
<body>
    <?php  
        $string = "string";
        $numero = 50;
        $array = array("PHP", "CSS", "JAVA");
        date_default_timezone_set('America/Sao_Paulo');
        $data = date("d/m/Y H:i:s");
    ?>  
    <h4>Essa é uma variavel do tipo  
        <?php 
            echo $string;
        ?>
    </h4>
    <h4>Essa é uma variavel do tipo numero =>
        <?php 
            echo $numero;
        ?>
    </h4>
    <h4>
        Essa é uma variavel do tipo Array =>
        <?php 
            print_r($array);
        ?>
    </h4>
    <h4>
        Essa é uma variavel do tipo Data =>
        <?php 
            echo $data;
        ?>
    </h4>

</body>

</html>