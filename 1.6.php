<html>
<head>
</head>
<body>
<FORM action="1.6.php" method="GET">
    <input type="text" placeholder="Bok a" name="a">
    <input type="text" placeholder="Bok b" name="b">
    <input type="text" placeholder="Bok c" name="c">
    <input type="submit" value="Czy da się zbudować?" name="submit">
</FORM>
<?php

$a= $_GET['a'];
$b= $_GET['b'];
$c= $_GET['c'];

if(intval($a) > 0 && intval($b) > 0 && intval($c) > 0){
    if($a+$b>$c && $a+$c>$b && $b+$c>$a){
        echo ("TAK");
    }else  {
        echo ("NIE");
    }
} else{
    if($a != null || $b != null || $c != null){
        echo ("BLAD");
    }
}

?>
</body>
</html>

