<?php
//require_once('action.php');

$servername = "localhost";
$username = "root";
$password = "";
$db = "mooddatabase";
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
//echo "Connected successfully"."<br>";
  }

  mysqli_select_db($conn,$db);
  
  /*
  $result = mysqli_query($conn, "SELECT songName, moodNumber FROM songs, mood WHERE mood = '$mood' AND moodID = moodNumber");
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "moodNumber: " . $row["moodNumber"]. " - song " . $row["songName"]. "<br>";
    }
} else {
    echo "0 results";
}
echo "<br>";
*/


?>
