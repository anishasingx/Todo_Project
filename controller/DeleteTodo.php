<?php
  require '../config/db.php';

  if((isset($_GET['id'])))
  {
    try
    {
      $id = $_GET['id'];
      // SQL to delete a record
      $sql = "DELETE FROM todo WHERE id=?";
      $stmt = $conn->prepare($sql);
      $stmt->execute([$id]);
      $stmt = null;

     header("Location: ../index.php?result=Todo deleted Successfully.");
        exit;
    }
     catch(PDOException $e)
    {
     header("Location: ../index.php?result=Todo Deletion Failed.");
        exit;
    }
  }
?>