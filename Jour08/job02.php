<?php
session_start();
$_COOKIE["nbvisites"] = isset($_COOKIE["nbvisites"]) ? $_COOKIE["nbvisites"] + 1 : 0;
setcookie("nbvisites", $_COOKIE["nbvisites"], time() + 3600);
echo "Vous avez visité cette page " . $_COOKIE["nbvisites"] . " fois.";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    setcookie("nbvisites", "", time() - 3600);
    header("Location: job02.php");
    exit();
}
?>
<form method="post">
    <button type="submit"> reset </button>
</form>