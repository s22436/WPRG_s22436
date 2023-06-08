<?php
if(!isset($_SESSION)){
    session_start();
}

// Sprawdzenie, czy użytkownik jest zalogowany
function isLoggedIn()
{
    return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
}


// Sprawdzenie, czy użytkownik jest administratorem
function isAdmin()
{
    return isset($_SESSION['user_type']) && $_SESSION['user_type'] === "admin";
}

// Funkcja wylogowania użytkownika
function logout()
{
    // Usuń zmienne sesyjne i zakończ sesję
    $_SESSION = array();
    session_destroy();
    echo ((getLanguagePreference() == 'en') ? "Logged out successfully" : "Wylogowano pomyślnie.");
}


// Funkcja logowania
function login($username, $password)
{
    $conn = connectToDatabase();
    $username = $conn->real_escape_string($username);

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['PASSWORD'])) {
            // Zalogowano pomyślnie, ustaw zmienne sesyjne
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['user_type'] = $row['USER_TYPE'];
            $_SESSION['user_id'] = $row['ID'];
            echo ((getLanguagePreference() == 'en') ? "Logged in successfully" : "Zalogowano pomyślnie.");
        } else {
            echo ((getLanguagePreference() == 'en') ? "Wrong password" : "Błędne hasło.");
        }
    } else {
        echo ((getLanguagePreference() == 'en') ? "User does not exist" : "Użytkownik o podanej nazwie nie istnieje.");
    }

    $conn->close();
}

?>

