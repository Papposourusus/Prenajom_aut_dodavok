<?php
class FlashMessage {
    public static function show() {
        if (isset($_SESSION['success_message'])) {
            echo '<div class="alert success">'.htmlspecialchars($_SESSION['success_message']).'</div>';
            unset($_SESSION['success_message']);
        } elseif (isset($_SESSION['error_message'])) {
            echo '<div class="alert error">'.htmlspecialchars($_SESSION['error_message']).'</div>';
            unset($_SESSION['error_message']);
        }
    }
}

?>


<script>
window.onload = function() {
    const alert = document.querySelector('.alert');
    if (alert) {
        setTimeout(() => {
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 500);
        }, 4000);
    }
};
</script>



<style>
.alert {
    padding: 15px 25px;
    margin: 15px auto;
    width: fit-content;
    max-width: 90%;
    border-radius: 5px;
    font-size: 16px;
    font-weight: 600;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    opacity: 1;
    transition: opacity 0.5s ease-out;
    position: fixed;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 9999;
}

.success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.error {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}
</style>


