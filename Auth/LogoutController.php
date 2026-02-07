<?php
  

  session_start();
  session_unset();
  session_destroy();
  header("Location: ../pages/login.php?success=you have been logged out");
  exit;
?>