<?php
session_start();
?>
<style>
.logout-button {
  background-color: transparent;
  border: 2px solid #fff;
  color: #fff;
  padding: 8px 20px;
  border-radius: 5px;
  text-decoration: none;
  cursor: pointer;
  font-size: 14px;
  transition: all 0.3s ease;
}

.logout-button:hover {
  background-color: #fff;
  color: #000;
}
</style>

<nav class="main-nav">
  <!-- ***** Logo Start ***** -->
  <a href="index.php" class="logo_d">
    <img src="assets/images/logo.jpg" alt="Ano ej to AI niet penazi na grafika">
  </a>
  <!-- ***** Logo End ***** -->

  <!-- ***** Menu Start ***** -->
  <ul class="nav">
    <li><a href="index.php" class="active">Home</a></li>
    <li class="has-sub">
      <a href="javascript:void(0)">zatial nic</a>
      <ul class="sub-menu">
        <li><a href="contests.php">Do buducnosti</a></li>
        <li><a href="contest-details.html">Daco take</a></li>
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

  <a class='menu-trigger'>
    <span>Menu</span>
  </a>
  <!-- ***** Menu End ***** -->
</nav>
