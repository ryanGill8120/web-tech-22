
<script src="./assets/js/jquery-3.5.1.js"></script>

<?php 

echo '<div class="container">';
echo '<table border="1">';
echo '<tr>';
echo '<th>First Name</th>';
echo '<th>Last Name</th>';
echo '<th>Phone</th>';
echo '<th>Email</th>';
echo '<th>Birthday</th>';
echo '<th>Contact Method</th>';
echo '<th>Comment</th>';
echo '</tr>';
echo '<tbody id="content">';
echo '</tbody>';
echo '</table>';
echo '</div>';

?>

<script>
function refreshDiv() {

    $.ajax({
        type: 'post',
        url: 'https://ec2-3-84-158-169.compute-1.amazonaws.com/hw16/query_entries.php',
        success: function (data) {
            $('#content').html(data);
        }

    });
    
};
setInterval(function(){refreshDiv();}, 500);
</script>