<?php

include './assets/php/functions.php';

session_start();

if (isset($_GET['page']) && $_GET['page'] != ""){
    $page = $_GET['page'];
}else{
    $page = 'home';
}

echo '<html>';
echo '    <head>';
echo '        <meta charset= "UTF-8">';
switch ($page) {
    case 'school':
        echo '<title>Ryan Gill\'s Academics</title>';
        break;
    
    case 'work':
        echo '<title>Ryan Gill\'s Work History</title>';
        break;
    
    case 'contact':
        echo '<title>Contact Ryan Gill</title>';
        break;
    
    default:
        echo '<title>Ryan Gill Resume Website</title>';
        break;
}

echo '        <link rel="stylesheet" href="assets/css/bootstrap.css">';
echo '        <script src="./assets/js/contact-form.js"></script>';
echo '    </head>';
echo '    <body>';

include "navigation.php";

switch ($page) {
    case 'school':
        include "school.php";
        break;
    
    case 'work':
        include "work.php";
        break;
    
    case 'contact':
        include "contact.php";
        break;
    
    default:
        include "home.php";
        break;
}

echo '    </body>';
echo '</html>';

?>