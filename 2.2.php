<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<FORM action="2.2.php" method="GET">

    <h1>Formularz hotelu</h1>
    Liczba osób:
    <select name="numOfPpl">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
    </select>
    <br>
    Dane osoby rezerwującej:
    <br>
    Imię*: <input type="text" required placeholder="Imię" name="name">
    <br>
    Nazwisko*: <input type="text" required placeholder="Nazwisko" name="surname">
    <br>
    Numer karty kredytowej*: <input type="text" minlength="16" maxlength="16" required placeholder="Numer karty kredytowej" name="credit">
    <br>
    Email*: <input type="email" required placeholder="Email" name="email">
    <br>
    Data przyjazdu*: <input type="date" required name="date">
    <br>
    Godzina Pzzyjazdu*:  <input type="time" required name="time">
    <br>
    <input type="checkbox" name="baby"> Czy dostawić łóżeczko dla dziecka?
    <br>
    Udogodnienia:
    <ul>
        <li><input type="checkbox" name="smoke"> Popoelniczka</li>
        <li><input type="checkbox" name="ac"> Klimatyzacja</li>
        <li><input type="checkbox" name="breakfast"> Śniadanie</li>
    </ul>
    <input type="submit" value="Zarezerwuj" name="submit">
</FORM>


<?php

$name = $_GET['name'];
$surname = $_GET['surname'];
$numOfPpl = $_GET['numOfPpl'];
$credit = $_GET['credit'];
$email = $_GET['email'];
$date = $_GET['date'];
$time = $_GET['time'];
$baby = $_GET['baby'];
$smoke = $_GET['smoke'];
$ac = $_GET['ac'];
$breakfast = $_GET['breakfast'];

$html_content = file_get_contents('2.2_template.html');

if($name != null){
    $html_content = file_get_contents('2.2_template.html');
    $html_content = str_replace('{NAME}', $name, $html_content);
    $html_content = str_replace('{SURNAME}', $surname, $html_content);
    $html_content = str_replace('{NR_OF_PPL}', $numOfPpl, $html_content);
    $html_content = str_replace('{CARD_NUM}', $credit, $html_content);
    $html_content = str_replace('{EMAIL}', $email, $html_content);
    $html_content = str_replace('{DATE}', $date, $html_content);
    $html_content = str_replace('{TIME}', $time, $html_content);
    $html_content = str_replace('{BABY}', $baby ? "TAK" : "NIE", $html_content);
    $html_content = str_replace('{SMOKE}', $smoke ? "TAK" : "NIE", $html_content);
    $html_content = str_replace('{AC}', $ac ? "TAK" : "NIE", $html_content);
    $html_content = str_replace('{BREAKFAST}', $breakfast ? "TAK" : "NIE", $html_content);


    echo $html_content;
}



?>
</body>
</html>

