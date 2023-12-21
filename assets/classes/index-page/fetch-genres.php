<?php
include 'assets/classes/connection.php';

$sql = "SELECT * FROM Genres";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      echo '<div class="carousel-item">';
      echo '<img src="assets/media/icons/genres/'. $row["GenreName"] .'.png" alt="'. $row["GenreName"] .'">';
      echo '<p class="genre-title">'. $row["GenreName"] .'</p>';
      echo "</div>";
  }
} else {
  echo "0 results";
}
?>