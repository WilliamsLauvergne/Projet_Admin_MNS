<?php
session_start();
?>
<link rel="stylesheet" href="../assets/css/style.css">
<div class="login_page">
    <div>
        <img src="./assets/images/LOGOv2.png" alt="logo" id="logo_login">
    </div>

    <div>
        <form action="/login-POST.php" method="POST" class="login_style">
            <label>mail</label>
            <input type="text" name="email" value="<?= isset($_SESSION['values']['email']) ? $_SESSION['values']['email'] : '' ?>">
            <br>
            <label>Mot de passe</label>
            <input type="password" name="password">
            <span>mot de passe oublié ?</span>
            <br>
            <input type="submit" name="submit" value="Se connecter" id="se_connecter">
        </form>
    </div>
</div>