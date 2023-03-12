<html>
<head>
</head>
<body>
<FORM action="1.9.php" method="GET">
    <input type="text" placeholder="Podaj liczby naturalne oddzielone spacjami" name="numbers1">
    <input type="text" placeholder="Podaj liczby naturalne oddzielone spacjami" name="numbers2">
    <input type="submit" value="Policz iloczyn skalarny" name="submit">
</FORM>
<?php

$numbers1= $_GET['numbers1'];
$numbers2= $_GET['numbers2'];
if($numbers1 != null && $numbers2 != null){
    $array1 = array();
    $array2 = array();

    $array1 = array_map('intval', explode(' ', $numbers1));

    $array2 = array_map('intval', explode(' ', $numbers2));

    if(count($array1) == 0 || count($array2) == 0){
        echo ("BŁĄD");
        return;
    }
    if(count($array1) < count($array2)){
        $min_count = count($array1);
    }else{
        $min_count = count($array2);
    }


    $scalar = 0;
    for ($i = 0; $i < $min_count; $i++) {
        $scalar += $array1[$i] * $array2[$i];
    }

    echo "Iloczyn skalarny: " . $scalar;
}
?>
</body>
</html>

