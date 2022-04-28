
<script src="./assets/js/jquery-3.5.1.js"></script>
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
echo '</div>';
echo '    </body>';
echo '</html>';

?>

<script>
function updateContent(page){
    $.ajax({
        type:'post',
        url:'site link: https://ec2-3-84-158-169.compute-1.amazonaws.com/hw17/'+page+'.php', 
        success:function(data){
            //
			switch (page){
                case "home":
                    document.getElementById("school").classList.remove("active");
                    document.getElementById("work").classList.remove("active");
                    document.getElementById("contact").classList.remove("active");
                    document.getElementById("home").classList.add("active");
                    break;
                case "school":
                    document.getElementById("home").classList.remove("active");
                    document.getElementById("work").classList.remove("active");
                    document.getElementById("contact").classList.remove("active");
                    document.getElementById("school").classList.add("active");
                    break;
                case "work":
                    document.getElementById("home").classList.remove("active");
                    document.getElementById("school").classList.remove("active");
                    document.getElementById("contact").classList.remove("active");
                    document.getElementById("work").classList.add("active");
                    break;
                case "contact":
                    document.getElementById("home").classList.remove("active");
                    document.getElementById("work").classList.remove("active");
                    document.getElementById("school").classList.remove("active");
                    document.getElementById("contact").classList.add("active");
                    break;
                default:
                    document.getElementById("school").classList.remove("active");
                    document.getElementById("work").classList.remove("active");
                    document.getElementById("contact").classList.remove("active");
                    document.getElementById("home").classList.add("active");
                    break;
            };
            $('#mainContent').html(data);//Show fetched data 
        }
    });
};
</script>