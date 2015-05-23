<!DOCTYPE html>
<html>
<body>
<?php



$servername = "localhost";

$dbname = "world_";

// Create connection
$conn = new mysqli($servername,  $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Name, Continent, SurfaceArea FROM Country WHERE (Continent=='Asia' OR Continent=='South America') AND (SurfaceArea<=13000)" ;
$result = $conn->query($sql);

if ($result->num_rows($sql) > 0) {
   // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " " . $row["Name"]. "   " . $row["Continent"]. "  " . $row["SurfaceArea"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();


?>

</body>
</html>
