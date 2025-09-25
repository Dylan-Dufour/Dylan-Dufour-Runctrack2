<?php
session_start();
// var_dump($_SESSION);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['reset'])) {
        // Réinitialiser la session
        $_SESSION['prenom'] = [];
    } elseif (isset($_POST['prenom'])) {
        $prenom = htmlspecialchars($_POST['prenom']);
            if (!isset($_SESSION['prenom']) || !is_array($_SESSION['prenom'])) {
                $_SESSION['prenom'] = [];
            }
            $_SESSION['prenom'][] = $prenom;
    }
}
?>
<form action="job03.php" method="post">
<input type="text" name="prenom" placeholder="Enter your name" >
    <button type="submit">Ajouter</button>
    <button type="submit" name="reset" value="1">Réinitialiser</button>
</form>
<ul>
    <?php
    if (isset($_SESSION['prenom'])) {
        foreach ($_SESSION['prenom'] as $prenom) {
            echo "<li>" . htmlspecialchars($prenom) . "</li>";
        }
    }
    ?>
</ul>

