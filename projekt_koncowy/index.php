<?php
include "common.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo (getLanguagePreference() == 'en') ? 'Movie library' : 'Biblioteka filmowa'; ?></title>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="shared.css">
</head>
<body>
<div class="message-box">
    <?php

    // Sprawdzenie, czy formularz rejestracji został przesłany
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        register($username, $password);
    }

    // Sprawdzenie, czy formularz logowania został przesłany
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        login($username, $password);
    }

    // Sprawdzenie, czy formularz dodawania filmu został przesłany
    if (isset($_POST['add_movie']) && isLoggedIn()) {
        $title = $_POST['title'];
        $category = $_POST['category'];
        $year = $_POST['year'];

        saveToDatabase($title, $category, $year);
    }

    // Sprawdzenie, czy formularz wylogowania został przesłany
    if (isset($_POST['logout'])) {
        logout();
    }

    ?>
</div>


<?php include 'navbar.php'; ?>

<h2><?php echo (getLanguagePreference() == 'en') ? 'Welcome to the Film Library' : 'Witamy w Bibliotece Filmowej'; ?></h2>

<?php readFromDatabase(); ?>
</body>
</html>