<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "ROCDaniel123!";
$dbname = "beroepsproject2";

try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    echo "database gevonden";
} catch (PDOException $err) {
    echo "Database connection problem. " . $err->getMessage();
    exit();
}

$sql = "SELECT id, merk, model FROM autos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["merk"]. " " . $row["model"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>



