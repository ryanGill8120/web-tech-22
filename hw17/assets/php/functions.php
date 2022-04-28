<?php

    function redirect ($uri){

        ?>
        <script type="text/javascript">
        <!--
        document.location.href="<?php echo $uri; ?>";
        -->
        </script>
        <?php die;
    }

    function db_iconnect($dataBase){

        $user = "webuser";
        $pw = "y6oCspUYGZz900jr";
        $hostName = "localhost";
        return new mysqli($hostName, $user, $pw, $dataBase);
        
    }

?>