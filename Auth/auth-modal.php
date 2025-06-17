<style>
.auth-modal {
  position: fixed; top: 0; left: 0; width: 100%; height: 100%;
  background-color: rgba(0,0,0,0.6);
  display: flex; align-items: center; justify-content: center;
  z-index: 9999;
}
.auth-modal-content {
  background: #fff; padding: 30px; border-radius: 8px; width: 300px; position: relative;
}
.auth-modal-close {
  position: absolute; top: 10px; right: 15px; font-size: 20px; cursor: pointer;
}
.auth-tabs {
  text-align: center; margin-bottom: 20px;
}
.auth-tabs button {
  padding: 10px 20px; margin: 0 5px; border: none;
  background: #eee; cursor: pointer;
}
.auth-tabs .active {
  background: #00bdfe; color: #fff;
}
.auth-tab-content form input {
  width: 100%; padding: 10px; margin-bottom: 10px;
}
.auth-tab-content form button {
  width: 100%; padding: 10px; background: #00bdfe; color: #fff; border: none;
}

</style>

<style>
/* Štýly ostávajú rovnaké ako si poslal predtým */
</style>

<div id="authModal" class="auth-modal" style="display: none;">
  <div class="auth-modal-content">
    <span class="auth-modal-close" onclick="closeAuthModal()">&times;</span>
    <div class="auth-tabs">
      <button onclick="showTab('loginTab')" class="active">Prihlásiť sa</button>
      <button onclick="showTab('registerTab')">Registrovať sa</button>
    </div>
    <div id="loginTab" class="auth-tab-content">
      <form action="login.php" method="post">
        <input type="text" name="login_username" placeholder="Meno alebo e-mail" required><br>
        <input type="password" name="login_password" placeholder="Heslo" required><br>
        <button type="submit">Prihlásiť sa</button>
      </form>
    </div>
    <div id="registerTab" class="auth-tab-content" style="display: none;">
      <form action="register.php" method="post">
        <input type="text" name="register_username" placeholder="Používateľské meno" required><br>
        <input type="email" name="register_email" placeholder="Email" required><br>
        <input type="password" name="register_password" placeholder="Heslo" required><br>
        <button type="submit">Registrovať sa</button>
      </form>
    </div>
  </div>
</div>

<script>
document.getElementById('modal_trigger').onclick = function(e) {
  e.preventDefault();
  document.getElementById('authModal').style.display = 'flex';
};
function closeAuthModal() {
  document.getElementById('authModal').style.display = 'none';
}
function showTab(tabId) {
  document.getElementById('loginTab').style.display = 'none';
  document.getElementById('registerTab').style.display = 'none';
  document.querySelectorAll('.auth-tabs button').forEach(btn => btn.classList.remove('active'));
  document.getElementById(tabId).style.display = 'block';
  event.target.classList.add('active');
}
</script>
