<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<nav class="main-nav">
  <!-- ***** Logo Start ***** -->
  <a href="index.html" class="logo_d">
    <img src="assets/images/logo.jpg" alt="Ano ej to AI niet penazi na grafika">
  </a>
  <!-- ***** Logo End ***** -->
  <!-- ***** Menu Start ***** -->
  <ul class="nav">
    <li><a href="index.php" class="active">Home</a></li>
    <li class="has-sub">
      <a href="javascript:void(0)">zatial nic</a>
      <ul class="sub-menu">
        <li><a href="admin_add_car.php">Admin Page 1</a></li>
        <li><a href="admin_manage.php">Admin Page 2</a></li>
      </ul>
    </li>
    <li><a href="lokalizacia.php">Naše miesta</a></li>
    <li><a href="users.php">Users</a></li>
  </ul>   

  <div class="border-button">
  <?php if (isset($_SESSION['username'])): ?>
    <form action="logout.php" method="post" style="display:inline;">
  <button type="submit" class="logout-button"><i class="fa fa-sign-out-alt"></i> Logout</button>
</form>

  <?php else: ?>
    <a id="modal_trigger" href="#modal" class="sign-in-up"><i class="fa fa-user"></i> Sign In/Up</a>
  <?php endif; ?>
</div>






 
  <!-- ***** Menu End ***** -->
</nav>

<style>
.logo_d {
  position: relative;
  left:-5%;
  width: 16%;
  height:auto;
  border-radius: 20%;
}
.logo_d img {
    border-top-right-radius: 20%; /* Aplikuje zaoblenie na obrázok */
    border-bottom-right-radius: 20%;
}


.logout-button {
  background-color: #00bdfe; /* oranžová farba */
  border: none;
  color: white;
  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;
  cursor: pointer;
  font-size: 14px;
  transition: background-color 0.3s ease;
}

.logout-button:hover {
  background-color: ##00bdfe;
  }

</style>