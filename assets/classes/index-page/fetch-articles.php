<?php
    include 'assets/classes/connection.php';

    $sql = "SELECT * FROM Articles ORDER BY PublishDate DESC LIMIT 10";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<a href="path_to_article?article=' . $row["ArticleID"] . '" class="carousel-item news-item">';
            echo '<img src="assets/media/img/database/articles/covers/'. $row["ArticleID"] .'.jpeg" alt="'. $row["Title"] .'">';
            echo '<div class="news-content">';
            echo '<h3 class="news-title">' . $row["Title"] . '</h3>';
            echo '<p class="news-description">' . $row["Description"] . '</p>';
            echo '</div>';
            echo '</a>';
        }
    } else {
        echo "0 results";
    }
    ?>