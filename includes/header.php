
    <!-- Header / Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand fw-bold" href="/Todo_Project/">MyTodo</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php
      session_start();
      if(isset($_SESSION["username"])):  
    ?>
     <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">

      

        <li class="nav-item">
          <a class="nav-link" href="/"><?php echo $_SESSION['username']?></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/Todo_Project/Auth/LogoutController.php">Logout</a>
        </li>

      </ul>
    </div>
    <?php else : ?>


    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link" href="/Todo_Project/">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/Todo_Project/pages/register.php">Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/Todo_Project/pages/login.php">Login</a>
        </li>

      </ul>
    </div>
      <?php endif; ?>
  </div>
</nav>
   