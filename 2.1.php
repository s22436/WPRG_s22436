<html>
<head>
</head>
<body>
<FORM action="2.1.php" method="GET">
    <input type="text" placeholder="Liczba pierwsza" name="a">
    <input type="text" placeholder="Liczba druga" name="b">
    <input type="submit" value="Dodawanie" name="add">
    <input type="submit" value="Odejmowanie" name="sub">
    <input type="submit" value="Mnożenie" name="mul">
    <input type="submit" value="Dzielenie" name="div">
    <input type="submit" value="Modulo" name="mod">
</FORM>
<?php

$number_a = $_GET['a'];
$number_b = $_GET['b'];

if($_GET['add'] != null){
    echo ($number_a + $number_b);
} elseif($_GET['sub'] != null){
    echo ($number_a - $number_b);
} elseif($_GET['mul'] != null){
    echo ($number_a * $number_b);
} elseif($_GET['div'] != null){
    echo ($number_a / $number_b);
} elseif($_GET['mod'] != null){
    echo ($number_a % $number_b);
}


?>
</body>
</html>

