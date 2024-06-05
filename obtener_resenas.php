<?php
include 'db.php';

$sql = "SELECT * FROM contacto";
$result = $conn->query($sql);

$resenas = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $resenas[] = $row;
    }
}

echo json_encode($resenas);

$conn->close();
?>
