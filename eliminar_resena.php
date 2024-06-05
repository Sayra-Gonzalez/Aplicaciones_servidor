<?php
require_once 'db.php';

if (isset($_POST['id'])) {
  $id = $_POST['id'];

  $sql = "DELETE FROM contacto WHERE id = $id";
  if (mysqli_query($conn, $sql)){
        echo "Reseña eliminada correctamente.";
  } else {
    echo "Error al eliminar la reseña: " . mysqli_error($conn);
  }
} else {
  echo "No se recibió el ID de la reseña a eliminar.";
}
?>
