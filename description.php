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
$cid=$_GET['cid'];
$sql = "SELECT * FROM data inner join description on data.id=description.id where data.id=$cid";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class=\"\">";
        echo "<img class=\"\" src=\"imgs\\".$row["imgname"]."\">";
        echo "<br/>Name :".$row["company"]." ".$row["name"]."<br/>";
        echo "About :".$row["description"]."</br/>";
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