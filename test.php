<?php

$nameRegex = "/^([^%*!:;$]+)$/";

if (!preg_match($nameRegex, "Ryan!"))
    echo '<div>MATCHES!</div>';
else {
    echo '<div>NO MATCHES!</div>';
}

?>