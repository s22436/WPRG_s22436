<html>
<head>
</head>
<body>
<FORM action="1.11.php" method="GET">
    <input type="text" placeholder="Podaj tekst" name="text">
    <input type="submit" value="Czy jest panagramem?" name="submit">
</FORM>
<?php

$text = $_GET['text'];
if($text != null){
    $alphabet = range('a', 'z');
    $string = strtolower($text);
    $isCorrect = true;
    foreach (str_split($string) as $letter) {
        if (($key = array_search($letter, $alphabet)) !== false) {
            unset($alphabet[$key]);
        }
    }

    if(count($alphabet) == 0){
        echo "TAK";
    }else{
        echo "NIE";
    }
}



?>
</body>
</html>

