<html>
<head>
</head>
<body>
<FORM action="1.8.php" method="GET">
    <input type="text" placeholder="Libcza 1" name="num1">
    <input type="text" placeholder="Liczba 2" name="num2">
    <input type="text" placeholder="Liczba 3" name="num3">
    <input type="submit" value="Wypisz!" name="submit">
</FORM>
<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];

if($num1 != null){
    if ($num1 <= $num2 && $num1 <= $num3) {
        $min = $num1;
        if ($num2 <= $num3) {
            $mid = $num2;
            $max = $num3;
        } else {
            $mid = $num3;
            $max = $num2;
        }
    } elseif ($num2 <= $num1 && $num2 <= $num3) {
        $min = $num2;
        if ($num1 <= $num3) {
            $mid = $num1;
            $max = $num3;
        } else {
            $mid = $num3;
            $max = $num1;
        }
    } else {
        $min = $num3;
        if ($num1 <= $num2) {
            $mid = $num1;
            $max = $num2;
        } else {
            $mid = $num2;
            $max = $num1;
        }
    }

    echo "Liczby w kolejności od najmniejszej do największej: $min $mid $max";

    echo "Liczby w kolejności od największej do najmniejszej: $max $mid $min";
}

?>
</body>
</html>

