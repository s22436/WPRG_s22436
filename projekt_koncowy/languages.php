<?php

// Funkcja do ustawiania preferencji językowych użytkownika
function setLanguagePreference($language)
{
    $_SESSION['language'] = $language;
    setcookie('language', $language, time() + (86400 * 30), '/'); // Ciasteczko ważne przez 30 dni
}

// Sprawdzenie, czy formularz preferencji językowych został przesłany
if (isset($_POST['language_preference'])) {
    $language = $_POST['language'];
    setLanguagePreference($language);
}

// Funkcja do pobierania preferencji językowych użytkownika
function getLanguagePreference()
{
    if (isset($_SESSION['language'])) {
        return $_SESSION['language'];
    } elseif (isset($_COOKIE['language'])) {
        return $_COOKIE['language'];
    } else {
        return 'pl'; // Domyślny język - polski
    }
}
?>
