<?php
/**
 * Jediná zodpovednosť: vrátiť HTML kód modálneho okna.
 * Všetky „magické“ reťazce (ID, action, texty) sú parametrami.
 */
class AuthModalRenderer
{
    private string $loginAction;
    private string $registerAction;

    public function __construct(
        string $loginAction = 'login.php',
        string $registerAction = 'register.php'
    ) {
        $this->loginAction    = $loginAction;
        $this->registerAction = $registerAction;
    }

    public function render(): string
    {
        // Výstup cez output-buffer sa ľahšie píše ako gigantický echo-reťazec
        ob_start(); ?>
        <div id="authModal" class="auth-modal" hidden>
            <div class="auth-modal-content">
                <!-- X pre zavretie -->
                <button type="button" class="auth-modal-close" data-auth-action="close">&times;</button>

                <!-- Prepínače kariet -->
                <div class="auth-tabs">
                    <button type="button" data-auth-action="switch" data-target="#loginTab"  class="active">
                        Prihlásiť sa
                    </button>
                    <button type="button" data-auth-action="switch" data-target="#registerTab">
                        Registrovať sa
                    </button>
                </div>

                <!-- TAB 1 -->
                <div id="loginTab" class="auth-tab-content">
                    <form action="<?= htmlspecialchars($this->loginAction) ?>" method="post">
                        <input type="text"     name="login_username"  placeholder="Meno alebo e-mail" required>
                        <input type="password" name="login_password"  placeholder="Heslo"            required>
                        <button type="submit">Prihlásiť sa</button>
                    </form>
                </div>

                <!-- TAB 2 -->
                <div id="registerTab" class="auth-tab-content" hidden>
                    <form action="<?= htmlspecialchars($this->registerAction) ?>" method="post">
                        <input type="text"     name="register_username" placeholder="Používateľské meno" required>
                        <input type="email"    name="register_email"    placeholder="E-mail"            required>
                        <input type="password" name="register_password" placeholder="Heslo"             required>
                        <button type="submit">Registrovať sa</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }
}
