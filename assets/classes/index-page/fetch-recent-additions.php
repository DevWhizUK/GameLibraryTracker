<?php
include 'assets/classes/connection.php';

$sql = "SELECT * FROM Games ORDER BY ReleaseDate DESC LIMIT 12";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo '<div class="carousel-item game-carousel">';
    echo '<a href="path_to_game_page?game=' . $row["GameID"] . '">';
    echo '<img src="assets/media/img/database/games/covers/'.$row["Title"]. '.jpeg" alt="'. $row["Title"] .'">';
    echo '<p class="game-title">'. $row["Title"] .'</p>';
    echo '</a>';
    echo '</div>';      
  }
} else {
  echo "0 results";
}

?>