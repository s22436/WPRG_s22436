<?php
include "common.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo (getLanguagePreference() == 'en') ? 'Delete a movie' : 'Usuń film'; ?></title>
    <link rel="stylesheet" href="shared.css">
    <link rel="stylesheet" href="delete_movie.css">
</head>
<body>

<div class="message-box">
<?php

if (isset($_POST['delete_movie']) && isLoggedIn() && isAdmin()) {
    $movieId = $_POST['movie_id'];

    deleteFromDatabase($movieId);
}

?>
</div>

<?php include 'navbar.php'; ?>

<h2><?php echo (getLanguagePreference() == 'en') ? 'Delete a movie' : 'Usuń film:'; ?></h2>

<div class="content">
    <?php

    if (isLoggedIn() && isAdmin()) {
        $conn = connectToDatabase();

        $sql = "SELECT * FROM movies";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<ul>";
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . $row['NAZWA'] . " (" . $row['KATEGORIA'] . ", " . $row['ROK'] . ") ";
                echo "<form method='post' action=''>";
                echo "<input type='hidden' name='movie_id' value='" . $row['ID'] . "'>";
                echo "<input type='submit' name='delete_movie' class='delete-button' value='Usuń'>";
                echo "</form>";
                echo "</li>";
            }
            echo "</ul>";
        } else {
            echo "Brak filmów w bibliotece.";
        }

        $conn->close();
    } else {
        echo "Brak uprawnień do usuwania filmów.";
    }
    ?>
</div>

</body>
</html>