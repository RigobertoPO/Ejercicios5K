<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>estructuras iterativas</h1>
    <h3>ciclo for</h3>
    <?php
        for ($i=0; $i <10 ; $i++) { 
           echo $i.'<br>';
        }
    ?>
    <h3>ciclo while</h3>
    <?php
    $a=0;
    while ($a < 10) {
        echo $a.'<br>';
        $a++;
    }
    ?>
    <h3>ciclo do while</h3>
    <?php
    $j=0;
    do {
        echo $j.'<br>';
        $j++;
    } while ($j < 10);
    ?>
</body>
</html>