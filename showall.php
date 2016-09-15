<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "caaar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM data";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class=\"col-md-4\">";
        echo "<a href=\"description.php?cid=".$row["id"]."\">";
        echo "<img class=\"thumb\" src=\"imgs\\".$row["imgname"]."\"></a>";
        echo "<br/>Name :".$row["company"]." ".$row["name"]."<br/>";
        echo "Fuel :".$row["fuel"]."</br/>";
        echo "Budget :".$row["budget"]."</br/>";
        echo "No. of Seats :".$row["seat"]."</br/>";
        echo "Utility :".$row["utility"]."</br/><hr/>";
        echo "</div>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>