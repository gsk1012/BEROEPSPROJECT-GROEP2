<?php
include_once('database.php');

$query = $conn->prepare("SELECT * FROM autos");
$query->execute();
$media = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <title>Document</title>
</head>
<body>
<!-- navbar -->

<!-- footer -->
</body>
</html>