<nav class="main-nav">
  <!-- ***** Logo Start ***** -->
  <a href="index.html" class="logo">
    <img src="assets/images/logo.png" alt="SnapX Photography Template">
  </a>
  <!-- ***** Logo End ***** -->
  <!-- ***** Menu Start ***** -->
  <ul class="nav">
    <li><a href="index.php" class="active">Home</a></li>
    <li class="has-sub">
      <a href="javascript:void(0)">Photos &amp; Videos</a>
      <ul class="sub-menu">
        <li><a href="contests.php">Contests</a></li>
        <li><a href="contest-details.html">Single Contest</a></li>
      </ul>
    </li>
    <li><a href="categories.php">Categories</a></li>
    <li><a href="users.php">Users</a></li>
  </ul>   
  <div class="border-button">
    <a id="modal_trigger" href="#modal" class="sign-in-up"><i class="fa fa-user"></i> Sign In/Up</a>
  </div>
  <button onclick="toggleBackground()">Zmeniť farbu pozadia</button>
  <a class='menu-trigger'>
    <span>Menu</span>
  </a>
  <!-- ***** Menu End ***** -->
</nav>

<!-- Add your JavaScript here -->
<script>
    function toggleBackground() {
        const body = document.body;
        const header = document.querySelector('.main-nav');
        const newColor = body.style.backgroundColor === 'black' ? 'white' : 'black';
        body.style.backgroundColor = newColor;
        header.style.backgroundColor = newColor;
    }
</script>