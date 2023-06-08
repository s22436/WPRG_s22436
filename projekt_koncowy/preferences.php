<?php
include "common.php";

?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo (getLanguagePreference() == 'en') ? 'Preferences' : 'Preferencje'; ?></title>
    <link rel="stylesheet" href="shared.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<h2><?php echo (getLanguagePreference() == 'en') ? 'Language Preferences' : 'Preferencje językowe'; ?></h2>

<form method="post" action="">
    <label>
        <?php echo (getLanguagePreference() == 'en') ? 'Select your preferred language:' : 'Wybierz preferowany język:'; ?>
        <select name="language">
            <option value="pl" <?php echo (getLanguagePreference() == 'pl') ? 'selected' : ''; ?>>Polski</option>
            <option value="en" <?php echo (getLanguagePreference() == 'en') ? 'selected' : ''; ?>>English</option>
        </select>
    </label>
    <input type="submit" name="language_preference" value="<?php echo (getLanguagePreference() == 'en') ? 'Save' : 'Zapisz'; ?>">
</form>
</body>
</html>