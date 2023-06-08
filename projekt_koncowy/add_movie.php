<?php
include "common.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo (getLanguagePreference() == 'en') ? 'Add a new movie' : 'Dodaj film'; ?></title>
    <link rel="stylesheet" href="shared.css">
    <link rel="stylesheet" href="add_movie.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<h2><?php echo (getLanguagePreference() == 'en') ? 'Add a new movie' : 'Dodaj nowy film:'; ?></h2>

<form class="form" method="post" action="index.php">
    <label for="title"><?php echo (getLanguagePreference() == 'en') ? 'Title' : 'Tytuł:'; ?></label>
    <input type="text" name="title" class="title" required><br>

    <label for="category"><?php echo (getLanguagePreference() == 'en') ? 'Category:' : 'Kategoria:'; ?></label>
    <input type="text" name="category" class="category" required><br>

    <label for="year"><?php echo (getLanguagePreference() == 'en') ? 'Year of production:' : 'Rok produkcji'; ?></label>
    <input type="number" name="year" class="year" required><br>

    <input type="submit" name="add_movie" class="submit-button" value="<?php echo (getLanguagePreference() == 'en') ? 'Add a movie' : 'Dodaj film'; ?>">
</form>
</body>
</html>