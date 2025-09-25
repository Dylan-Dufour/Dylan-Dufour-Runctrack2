<?php
session_start();
$_SESSION["nbvisites"] = isset($_SESSION["nbvisites"]) ? $_SESSION["nbvisites"] + 1 : 0;
($_SESSION["nbvisites"]) ? $_SESSION["nbvisites"] + 1 : 1;
echo "Vous avez visité cette page " . $_SESSION["nbvisites"] . " fois.";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_destroy();
    header("Location: job01.php");
    exit();
}

?>
<form method="post">
    <button type="submit"> reset </button>
</form>