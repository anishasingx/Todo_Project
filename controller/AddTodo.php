<?php

  require '../config/db.php';
  require '../model/Todo.php';

  session_start();
  if($_SERVER["REQUEST_METHOD"] === "POST" && (isset($_SESSION['username'])))
  {
    if(isset($_POST['todoname']) && isset($_POST['tododate']))
    {
      $username = $_SESSION['username'];
      $todo = new Todo(0,$_POST['todoname'], $_POST['tododate'], null);

      try
      {
        $sql = "INSERT INTO todo (todoname, tododate, username) VALUES (?,?, ?)";

        // Prepare the SQL query template
        $stmt = $conn->prepare($sql);

        // Execute with values
        $stmt->execute([$todo->getTodoname(), $todo->getTododate(), $username]);
        
        header("Location: ../index.php?result=Todo Created Successfully.");
        exit;
      } 
      catch(PDOException $e)
      { 
        header("Location: ../index.php?result=Todo Created Failed.");
        exit;
      }
      $conn=null;
    }
  }
?>
