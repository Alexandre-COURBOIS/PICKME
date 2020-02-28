<?php require_once ('Inc/verif_connexion.php');?>
<?php require_once ('Inc/header.php');?>

<h2 class="login_title">Qui êtes-vous ?</h2>

<div class="barre"></div>

<div class="login">
    <form class="searchCV" action="#" method="post">
        <div class="login">
            <label for="mail"></label>
            <input type="text" name="login" id="login" placeholder="Votre mail" value="<?php if (!empty
            ($_POST['login'])) {echo $_POST['login'];} ?>">
            <p class="error"><?php if(!empty($errors['login'])) { echo $errors['login']; } ?></p>
        </div>
        <div class="password">
            <label for="password"></label>
            <input type="text" name="password" id="password_log" placeholder="Votre mot de passe">
        </div>
        <input id="submit_log" type="submit" name="submitted" value="Login">

        <div class="forgot">
            <a id="forgot_link" href="forgot_password.php">Mot de passe oublié ?</a>
        </div>

    </form>


</div>

<?php require_once ('Inc/footer.php'); ?>