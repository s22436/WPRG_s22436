<div class="navbar">
    <link rel="stylesheet" href="navbar.css">
    <a href="index.php"><?php echo (getLanguagePreference() == 'en') ? 'All movies' : 'Wszystkie filmy'; ?></a>
    <?php if (isLoggedIn()) : ?>
        <a href="add_movie.php"><?php echo (getLanguagePreference() == 'en') ? 'Add movie' : 'Dodaj film'; ?></a>
        <?php if (isAdmin()) : ?>
            <a href="delete_movie.php"><?php echo (getLanguagePreference() == 'en') ? 'Delete movie' : 'Usuń film'; ?></a>
        <?php endif; ?>

    <?php else : ?>
        <a href="login.php"><?php echo (getLanguagePreference() == 'en') ? 'Log in' : 'Zaloguj się'; ?></a>
        <a href="register.php"><?php echo (getLanguagePreference() == 'en') ? 'Register' : 'Zarejestruj się'; ?></a>
    <?php endif; ?>
    <a href="preferences.php"><?php echo (getLanguagePreference() == 'en') ? 'Preferences' : 'Preferencje'; ?></a>

    <?php if (isLoggedIn()) : ?>
    <form method="post" action="index.php">
        <input type="submit" name="logout" value="<?php echo (getLanguagePreference() == 'en') ? 'Logout' : 'Wyloguj'; ?>">
    </form>
    <?php else : ?>
    <div style="margin-left: auto"></div>
    <?php endif; ?>
</div>