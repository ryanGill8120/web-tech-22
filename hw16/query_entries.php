<?php

include './assets/php/functions.php';

$db_link = db_iconnect("contact_form");
$sql = "SELECT * FROM `contact_entries`";

$result = $db_link->query($sql) or die("Something went wrong with $sql <br>".$db_link->error);

while($data = $result->fetch_array(MYSQLI_ASSOC)){

    echo '<tr>';
    echo '<td>'.$data['first_name'].'</td>';
    echo '<td>'.$data['last_name'].'</td>';
    echo '<td>'.$data['phone'].'</td>';
    echo '<td>'.$data['email'].'</td>';
    echo '<td>'.$data['birthday'].'</td>';
    echo '<td>'.$data['contact_method'].'</td>';
    echo '<td>'.$data['comment'].'</td>';
    echo '</tr>';

}


?>