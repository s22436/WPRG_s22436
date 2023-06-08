<?php

// Funkcja łącząca się z bazą danych
function connectToDatabase()
{
    // Skonfiguruj dane dostępowe do bazy danych
    $servername = "localhost:3306";
    $username = "root";
    $password = "!234Test";
    $dbname = "movies";

    // Połącz z bazą danych
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Sprawdź połączenie
    if ($conn->connect_error) {
        echo ((getLanguagePreference() == 'en') ? "Connection interrupted" : "Połączenie nieudane: ") . $conn->connect_error;
        die("Połączenie nieudane: " . $conn->connect_error);
    }

    return $conn;
}



// Funkcja odczytująca filmy z bazy danych
function readFromDatabase()
{
    $conn = connectToDatabase();

    $sql = "SELECT * FROM movies";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<ul class='movie-list'>";
        while ($row = $result->fetch_assoc()) {
            echo "<li class='movie-item'>" . "<div class='movie-title'>" . $row['NAZWA'] . "</div>" . " (" . $row['KATEGORIA'] . ", " . $row['ROK'] . ")</li>";
        }
        echo "</ul>";
    } else {
        echo ((getLanguagePreference() == 'en') ? "No movies in the library" : "Brak filmów w bibliotece.");
    }

    $conn->close();
}

// Funkcja zapisująca film do bazy danych
function saveToDatabase($title, $category, $year)
{
    $conn = connectToDatabase();
    $title = $conn->real_escape_string($title);
    $category = $conn->real_escape_string($category);
    $userId = $_SESSION['user_id'];

    $sql = "INSERT INTO movies (NAZWA, KATEGORIA, ROK, ADDED_BY) VALUES ('$title', '$category', $year, $userId)";

    if ($conn->query($sql) === TRUE) {
        echo ((getLanguagePreference() == 'en') ? "Movie added" : "Film został dodany.");
    } else {
        echo ((getLanguagePreference() == 'en') ? "Error while adding movie" : "Błąd dodawania filmu: " ). $conn->error;
    }

    $conn->close();
}

// Funkcja usuwająca film z bazy danych
function deleteFromDatabase($movieId)
{

    if(!$movieId){
        echo "WRONG MOVIE ID";
        return;
    }
    $conn = connectToDatabase();
    $movieId = $conn->real_escape_string($movieId);

    $sql = "DELETE FROM movies WHERE ID=$movieId";

    if ($conn->query($sql) === TRUE) {
        echo ((getLanguagePreference() == 'en') ? "Movie deleted" : "Film został usunięty.");
    } else {
        echo ((getLanguagePreference() == 'en') ? "Error while deleting movie" : "Błąd usuwania filmu: " . $conn->error);
    }

    $conn->close();
}

// Funkcja rejestracji użytkownika
function register($username, $password)
{
    // Sprawdź, czy użytkownik już istnieje w bazie danych
    $conn = connectToDatabase();
    $username = $conn->real_escape_string($username);

    $sql = "SELECT * FROM USERS where USERNAME='$username'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo ((getLanguagePreference() == 'en') ? "User already exists" : "Użytkownik o podanej nazwie już istnieje.");
    } else {
        // Zapisz nowego użytkownika do bazy danych
        $password = password_hash($password, PASSWORD_DEFAULT); // Haszowanie hasła
        $userType = "standard"; // Domyślny typ użytkownika

        $sql = "INSERT INTO users (username, password, user_type) VALUES ('$username', '$password', '$userType')";

        if ($conn->query($sql) === TRUE) {
            echo ((getLanguagePreference() == 'en') ? "Registered successfully" : "Użytkownik został zarejestrowany.");
        } else {
            echo ((getLanguagePreference() == 'en') ? "Error while registering" : "Błąd rejestracji: ") . $conn->error;
        }
    }

    $conn->close();
}

?>
