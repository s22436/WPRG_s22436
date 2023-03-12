<html>
<head>
</head>
<body>
<FORM action="1.10.php" method="GET">
    <input type="text" placeholder="Podaj liczbę naturalną" name="num">
    <input type="submit" value="Wypisz wzorek!" name="submit">
</FORM>
<?php

$num = $_GET['num'];
if($num != null ){
    for ($i = 1; $i <= $num; $i++) {
        echo str_repeat("*", $i) . "<br>";
    }

    for ($i = $num; $i >= 1; $i--) {
        echo str_repeat("*", $i) . "<br>";
    }

    for ($i = 1; $i <= $num; $i++) {
        // we consider "_" as an empty sign
        echo str_repeat("_", $i - 1) . str_repeat("*", $num - $i + 1) . "<br>";
    }

    for ($i = $num; $i >= 1; $i--) {
        // we consider "_" as an empty sign
        echo str_repeat("_", $i - 1) . str_repeat("*", $num - $i + 1) . "<br>";
    }
}
?>
</body>
</html>

