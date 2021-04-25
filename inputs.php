<?php
if (isset($_GET['haanaas']) && $_GET['haanaas'] != "") {
    echo "Origin: " . " ";
}
/* count() - toolox value-g ni hevleh*/
if (count($_POST > 0)) {
    foreach ($_POST as $value) {
        echo "$value <br>";
    }
}
