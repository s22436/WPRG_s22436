<html>
<head>
</head>
<body>
<FORM action="1.5.php" method="GET">
    <input type="text" placeholder="Tekst pierwszy" name="first">
    <input type="text" placeholder="Tekst drugi" name="second">
    <input type="submit" value="Połącz" name="submit">
</FORM>
<?php

$text_first = $_GET['first'];
$text_second = $_GET['second'];

if($text_first != null && $text_second != null){
    echo ("\"%" . $text_first . " " . $text_second . "%\$#\"");
//    “%napis2 napis1%$#”
}

?>
</body>
</html>

