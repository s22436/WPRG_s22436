<html>
<head>
</head>
<body>
<FORM action="2.4.php" method="GET">
    <input type="text" placeholder="Liczba" name="num">
    <input type="submit" value="Modulo" name="sub">
</FORM>
<?php

$num = $_GET['num'];

if($num == null){
    return;
}

$GLOBALS["iterations"] = 0;

function isPrime($n, $i = 2)
{
    $GLOBALS["iterations"] += 1;
    // Base cases
    if ($n <= 2)
        return ($n == 2) ? true : false;
    if ($n % $i == 0)
        return false;
    if ($i * $i > $n)
        return true;

    // Check for next divisor
    return isPrime($n, $i + 1);
}

if (isPrime($num))
    echo("Tak, jest pierwszą, ");
else
    echo("Nie, nie jest pierwszą, ");

$iterations = $GLOBALS["iterations"];

echo "Liczba operacji: $iterations"

?>
</body>
</html>

