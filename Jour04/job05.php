<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Connexion</title>
</head>
<body>
  <h1>Formulaire de connexion</h1>

  <!-- Formulaire qui envoie les données à login.php en POST -->
  <form action="" method="post">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="Se connecter">
  </form>
</body>
</html>
<?php
// On récupère les données envoyées par le formulaire
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Vérification
if ($username === "John" && $password === "Rambo") {
    echo "C’est pas ma guerre";
} else {
    echo "Votre pire cauchemar";
}
?>

