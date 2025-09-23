<?php
// Vérifier si l'utilisateur a choisi un style
$style = isset($_GET['style']) ? $_GET['style'] : "style1"; // par défaut style1

// On sécurise : si l'utilisateur tape un mauvais nom dans l'URL
$styles_valides = ["style1", "style2", "style3"];
if (!in_array($style, $styles_valides)) {
    $style = "style1";
}
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Changer de style</title>
  <!-- On inclut dynamiquement le fichier CSS -->
  <link rel="stylesheet" href="<?php echo $style; ?>.css">
</head>
<body>
  <h1>Choisissez un style</h1>

  <form action="" method="get">
    <label for="style">Style :</label>
    <select id="style" name="style">
      <option value="style1" <?php if ($style=="style1") echo "selected"; ?>>Style 1</option>
      <option value="style2" <?php if ($style=="style2") echo "selected"; ?>>Style 2</option>
      <option value="style3" <?php if ($style=="style3") echo "selected"; ?>>Style 3</option>
    </select>
    <input type="submit" value="Appliquer">
  </form>

  <p>Style actuel : <strong><?php echo $style; ?></strong></p>
</body>
</html>
<?php