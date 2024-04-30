<?php
echo <<<HTML
<form action="/" method="post">
    Первое число: <input type="number" name="num1" /> <br/>
    Второе число: <input type="number" name="num2" /> <br/>
    <input type="submit" name="submit" value="Умножение" />
</form>
HTML;
$NUM1 = (int)$_POST['num1'];
$NUM2 = (int)$_POST['num2'];
$res = $NUM1 * $NUM2 % 10;

for ($j = $NUM2; $j > 0; $j % 10) 
{
     $result = $i * $j;
     echo "$i * $j = $result <br/>";
}
    echo "<br/>";

echo <<<HTML
<table>
<input type="number" name="res" value="$res" /> <br/>
</table>
HTML;
?>
