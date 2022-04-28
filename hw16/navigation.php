<?php

if (isset($_GET['page']) && $_GET['page'] != ""){
    $page = $_GET['page'];
}else{
    $page = 'home';
}

echo '<ul class="nav nav-tabs">';

switch ($page) {
    case 'school':
        echo '<li role="presentation"><a href="./index.php">Home</a></li>';
        echo '<li role="presentation" class="active"><a href="./index.php?page=school">School</a></li>';
        echo '<li role="presentation"><a href="./index.php?page=work">Work</a></li>';
        echo '<li role="presentation"><a href="./index.php?page=contact">Contact</a></li>';
        break;
    
    case 'work':
        echo '<li role="presentation"><a href="./index.php">Home</a></li>';
        echo '<li role="presentation"><a href="./index.php?page=school">School</a></li>';
        echo '<li role="presentation" class="active"><a href="./index.php?page=work">Work</a></li>';
        echo '<li role="presentation"><a href="./index.php?page=contact">Contact</a></li>';
        break;
    
    case 'contact':
        echo '<li role="presentation"><a href="./index.php">Home</a></li>';
        echo '<li role="presentation"><a href="./index.php?page=school">School</a></li>';
        echo '<li role="presentation"><a href="./index.php?page=work">Work</a></li>';
        echo '<li role="presentation" class="active"><a href="./index.php?page=contact">Contact</a></li>';
        break;
    
    default:
        echo '<li role="presentation" class="active"><a href="./index.php">Home</a></li>';
        echo '<li role="presentation"><a href="./index.php?page=school">School</a></li>';
        echo '<li role="presentation"><a href="./index.php?page=work">Work</a></li>';
        echo '<li role="presentation"><a href="./index.php?page=contact">Contact</a></li>';
        break;
}

echo '</ul>';

?>