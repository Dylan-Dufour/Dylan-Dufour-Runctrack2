<?php
session_start();
// var_dump($_POST);
if(isset ($_POST['connexion'])){
    $_SESSION['prenom'] = htmlspecialchars($_POST['prenom']);
}
else{
    if(isset($_POST['deconnexion'])){
        session_destroy();
        $_SESSION = [];
    }
}
?>
<form action="job04.php" method="post">
<input type="text" name="prenom" placeholder="Enter your name" >
<?php
if(isset($_POST['connexion']))
:?>
<button type="submit" name="deconnexion" value="deco">deconnexion</button>

<?php else : ?>
    <button type="submit" name="connexion">connexion</button>
<?php endif; ?>
</form>
<p><?php if(isset($_SESSION['prenom'])): ?>Bonjour <?php echo $_SESSION['prenom']; endif; ?></p>