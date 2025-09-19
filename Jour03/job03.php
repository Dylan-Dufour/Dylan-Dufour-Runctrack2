<?php
$str = "I'm sorry Dave I'm afraid I can't do that.";
for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];
    if (strpos("aeiouAEIOU", $char) !== false) {
        echo $char;
    }
}
?>