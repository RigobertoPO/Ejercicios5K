<?php
$num1=$_POST['numero1'];
$num2=$_POST['numero2'];
$suma=$num1+$num2;
$resta=$num1-$num2;
$multiplica=$num1*$num2;
$divide=$num1/$num2;
echo 'La suma es '.$suma.'<br>';
echo 'La resta es '.$resta.'<br>';
echo 'La multiplicación es '.$multiplica.'<br>';
echo 'La división es '.$divide.'<br>';
?>