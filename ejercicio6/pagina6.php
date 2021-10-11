<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selectivas</h1>
    <h3>If</h3>
    <?php
        $edad=28;
        if($edad<18)
        {
            echo 'Es menor de edad';
        }
        else
        {
            echo 'Es mayor de edad';
        }
    ?>
    <h3>elseif</h3>
    <?php
    $valor=2;
    if($valor==1)
    {
        echo 'es uno';
    }
    elseif($valor==2)
    {
        echo 'es dos';
    }
    elseif($valor==3)
    {
        echo 'es tres';
    }
    else
    {
        echo 'Es mayor a tres';
    }
    ?>
    <h3>switch</h3>
    <?php
    $letra='c';
    switch ($letra) {
        case 'a':
            echo 'la letras es a';
            break;
        case 'e':
            echo 'la letra es e';
        default:
             echo 'es otra letra';
            break;
    }
    ?>
</body>
</html>