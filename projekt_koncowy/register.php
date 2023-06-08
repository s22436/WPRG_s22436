<?php
include "common.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo (getLanguagePreference() == 'en') ? 'Register' : 'Zarejestruj się'; ?></title>
    <link rel="stylesheet" href="shared.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
<?php include 'navbar.php'; ?>


<h2><?php echo (getLanguagePreference() == 'en') ? 'Register' : 'Zarejestruj się'; ?></h2>

<form class="form" method="post" action="index.php">
    <label for="username"><?php echo (getLanguagePreference() == 'en') ? 'Username' : 'Nazwa użytkownika:'; ?></label>
    <input type="text" id="username" name="username" required><br>

    <label for="password"><?php echo (getLanguagePreference() == 'en') ? 'Password' : 'Hasło:'; ?></label>
    <input type="password" id="password" name="password" required><br>

    <input type="submit" name="register" class="submit-button" value="<?php echo (getLanguagePreference() == 'en') ? 'Register' : 'Zarejestruj'; ?>">
</form>
</body>
</html>