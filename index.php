
<script src="./assets/js/jquery-3.5.1.js"></script>
<script src="./assets/js/functions.js"></script>
<?php

include './assets/php/functions.php';


session_start();

echo '<html>';
echo '    <head>';
echo '        <meta charset= "UTF-8">';
echo '        <title id="siteTitle">Ryan Gill Resume Website</title>';

echo '        <link rel="stylesheet" href="assets/css/bootstrap.css">';
echo '        <script src="./assets/js/contact-form.js"></script>';
echo '    </head>';
echo '    <body>';

include "navigation.php";

echo '<div id="mainContent">';
include "home.php";
echo '</div>';
echo '    </body>';
echo '</html>';

?>
