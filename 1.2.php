<html>
<head>
</head>
<body>
<FORM action="1.2.php" method="GET">
    <input type="text" placeholder="Bok a" name="a">
    <input type="text" placeholder="Bok b" name="b">
    <input type="submit">
</FORM>
<?php
$a = $_GET['a'];
$b =$_GET['b'];
$wynik = $a * $b;

echo("Wynik to: ");
echo("$wynik");
?>
</body>
</html>

