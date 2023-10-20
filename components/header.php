<?php $user = DB::exists("users", ["role"], ["id" => app::getSession("id")]); ?>

<header class="bg-white fixed-top border-bottom">
<nav class="navbar navbar-expand-md container">
  <a class="navbar-brand" href="index.php">
   <img src="./assets/images/logo.jpg" height="45" alt="Logo">
 </a>
  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler  text-dark ti-menu" type="button" data-toggle="collapse" data-target="#navbar"></button>
  <!-- Navbar links -->
  <div class="collapse navbar-collapse " id="navbar">
    <ul class="navbar-nav ml-auto">

    <?php if(app::logoutValue("id")): ?>
    <li class="nav-item">
        <a class="nav-link text-dark font-weight-bold pr-4 pl-4"  href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark font-weight-bold pr-4 pl-4" onclick="window.open('index.php#benifits','_self')" href="#benifits">Benefits</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark font-weight-bold pr-4 pl-4" onclick="window.open('index.php#about','_self')" href="#about">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark font-weight-bold pr-4 pl-4" onclick="window.open('index.php#faq','_self')" href="#faq">F.A.Q</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark font-weight-bold pr-4 pl-4" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn btn-dark btn-sm font-weight-bold pr-3 pl-3 rounded" href="signup.php">Register</a>
      </li>
      <?php endif; ?>

      <?php if(app::loginValue("id")): ?>
        <li class="nav-item">
          <a class="nav-link text-dark font-weight-bold pr-4 pl-4"  href="index.php">Home</a>
        </li>
         <li class="nav-item">
        <a class="nav-link text-dark font-weight-bold pr-4 pl-4" href="payments.php">WITHDRAWAL</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark font-weight-bold pr-4 pl-4" href="payments.php">DEPOSITS</a>
      </li>
      <?php if($user["role"] == 1): ?>
      <li class="nav-item">
        <a class="nav-link text-dark font-weight-bold pr-4 pl-4" href="users.php">Users</a>
      </li>
      <?php endif; ?>


         <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link text-dark font-weight-bold pr-4 pl-4 dropdown-toggle ti-user" href="#" id="navbardrop" data-toggle="dropdown"></a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="profile.php">Profile</a>
        <a class="dropdown-item" href="change-password.php">Change password</a>
        <a class="dropdown-item" href="logout.php">Logout</a>
      </div>
    </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>
</header>


