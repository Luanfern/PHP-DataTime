<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diferença entre datas</title>
</head>

<body>
    <h1><strong>CALCULAR DIFERENÇA ENTRE DATAS</strong></h1>
    <form method="Post">
        <input type="data" name="data1" placeholder="Digite a primeira data">
        </br> </br> </br>
        <input type="data" name="data2" placeholder="Digite a segunda data">
        </br> </br> </br>
        <input type="submit" name="enviar" value="Enviar">
    </form>

    <?php

/* 
$datatime1 = new DateTime('2015-04-15 00:10:00');
$datatime2 = new DateTime('2020-05-26 00:00:00');

$data1  = $datatime1->format('d/m/Y');
$data2  = $datatime2->format('d/m/Y');

$diff = $datatime1->diff($datatime2);
$horas = $diff->days;

echo "A diferença de horas entre {$data1} e {$data2} é {$horas} dias"; */

$datatime1 = strtotime(str_replace("/","-",$_POST['data1']).'00:00:00');
$datatime2 = strtotime(str_replace("/","-",$_POST['data2']).'00:00:00');

$data1  = date("d/m/Y",$datatime1);
$data2  = date("d/m/Y",$datatime2);

$diff = $datatime2 - $datatime1;

$diff = $diff / 60 / 60 /24;

echo "A diferença de horas entre {$data1} e {$data2} é " . ($diff < 0 ? $diff *-1 : $diff ) . " dias";




?>
</body>

</html>