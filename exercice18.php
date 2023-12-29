<?php
$rows = 10;

for ($i = $rows; $i >= 1; $i--) {
    for ($j = $rows - $i; $j >= 0; $j--) {
        echo "&nbsp;&nbsp;";
    }

    for ($k = 1; $k <= $i; $k++) {
        echo $i;
    }

    echo "<br>";
}
?>
