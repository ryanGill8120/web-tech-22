<?php


    $nameRegex = "/^([^%*!:;$]+)$/";
    $commentRegex = "/^([^%*!:;]+)$/";
    $emailRegex = "/^([a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-])+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";
    $phoneRegex = "/^([0-9]{3}-[0-9]{3}-[0-9]{4})+$/";
    $birthdayRegex = "/^([0-9]{2}\/[0-9]{2}\/[0-9]{4})+$/";

    if (isset($_GET['msg']) && $_GET['msg'] != ""){
        echo '<br>';
        echo '<br>';
        echo '<div class="container">';
        echo   '<div class="alert alert-success" role="alert">Your entry has been received!</div>';
        echo '</div>';
    }
        

    echo     '<div class="container">';
    echo       '<div class="col-md-12">';
    echo         '<br>';
    echo         '<h1>Ryan Gill</h1>';
    echo         '<a href="mailto:ryan.gill8120@gmail.com">ryan.gill8120@gmail.com</a>';
    echo         '<a href="http://github.com/ryanGill8120" target="_blank">github.com/ryanGill8120</a>';
    echo         '<hr>';
    echo         '<img src="../assets/images/ryan_headshot.jpeg" alt="Ryan Gill Headshot">';
    echo         '<br>';
    echo       '</div>';
    echo     '</div>';

    echo     '<div class="container" id="form-container">';

    echo       '<form method="post" action="index.php?page=contact">';
    echo         '<legend>Information</legend>';


    if (isset($_SESSION['firstName']) && $_SESSION['firstName'] != ""){
        if (isset($_GET['err']) && strstr($_GET['err'], "firstNameInvalid")){
            //invalid field
            echo '<div class="form-group has-error"  id="firstNameDiv">';
            echo   '<label class="control-label" for="firstName">First Name</label>';
            echo   '<input class="form-control" type="text" id="firstName" name="fname" onblur="handleErrors();" value="'.$_SESSION['firstName'].'">';
            echo   '<p class="help-block" id="firstNameHelp">Invalid input!</p>';
            echo '</div>';

        }else if (isset($_GET['err']) && strstr($_GET['err'], "firstNameNull")){
            //empty field
            echo '<div class="form-group has-error" id="firstNameDiv">';
            echo   '<label class="control-label" for="firstName">First Name</label>';
            echo   '<input class="form-control" type="text" id="firstName" name="fname" onblur="handleErrors();">';
            echo   '<p class="help-block" id="firstNameHelp">Cannot be blank!</p>';
            echo '</div>';

        }else{
            //persistent state
            echo '<div class="form-group"  id="firstNameDiv">';
            echo   '<label>First Name</label>';
            echo   '<input class="form-control" type="text" id="firstName" name="fname" onblur="handleErrors();" value="'.$_SESSION['firstName'].'">';
            echo   '<p class="help-block" id="firstNameHelp"></p>';
            echo '</div>';
        }
        
    }else{
        if (isset($_GET['err']) && strstr($_GET['err'], "firstNameNull")){
            //empty field
            echo '<div class="form-group has-error" id="firstNameDiv">';
            echo   '<label class="control-label" for="firstName">First Name</label>';
            echo   '<input class="form-control" type="text" id="firstName" name="fname" onblur="handleErrors();">';
            echo   '<p class="help-block" id="firstNameHelp">Cannot be blank!</p>';
            echo '</div>';

        }else {
            //new state
            echo '<div class="form-group"  id="firstNameDiv">';
            echo   '<label>First Name</label>';
            echo   '<input class="form-control" type="text" id="firstName" name="fname" onblur="handleErrors();">';
            echo   '<p class="help-block" id="firstNameHelp"></p>';
            echo '</div>';
        }
        

    }

    if (isset($_SESSION['lastName']) && $_SESSION['lastName'] != ""){
        if (isset($_GET['err']) && strstr($_GET['err'], "lastNameInvalid")){
            //invalid input
            echo '<div class="form-group has-error" id="lastNameDiv">';
            echo   '<label class="control-label" for="lastName">Last Name</label>';
            echo   '<input class="form-control" type="text" id="lastName" name="lname" onblur="handleErrors();" value="'.$_SESSION['lastName'].'">';
            echo   '<p class="help-block" id="lastNameHelp">Invalid Input!</p>';
            echo '</div>';
        }else if (isset($_GET['err']) && strstr($_GET['err'], "lastNameNull")){
            //empty input
            echo '<div class="form-group has-error" id="lastNameDiv">';
            echo   '<label class="control-label" for="lastName">Last Name</label>';
            echo   '<input class="form-control" type="text" id="lastName" name="lname" onblur="handleErrors();">';
            echo   '<p class="help-block" id="lastNameHelp">Cannot be blank!</p>';
            echo '</div>';

        }else{
            //persistent state
            echo '<div class="form-group" id="lastNameDiv">';
            echo   '<label>Last Name</label>';
            echo   '<input class="form-control" type="text" id="lastName" name="lname" onblur="handleErrors();" value="'.$_SESSION['lastName'].'">';
            echo   '<p class="help-block" id="lastNameHelp"></p>';
            echo '</div>';
        }
    }else{
        if (isset($_GET['err']) && strstr($_GET['err'], "lastNameNull")){
            //empty input
            echo '<div class="form-group has-error" id="lastNameDiv">';
            echo   '<label class="control-label" for="lastName">Last Name</label>';
            echo   '<input class="form-control" type="text" id="lastName" name="lname" onblur="handleErrors();">';
            echo   '<p class="help-block" id="lastNameHelp">Cannot be blank!</p>';
            echo '</div>';

        }else {
            //new input
            echo '<div class="form-group" id="lastNameDiv">';
            echo   '<label>Last Name</label>';
            echo   '<input class="form-control" type="text" id="lastName" name="lname" onblur="handleErrors();">';
            echo   '<p class="help-block" id="lastNameHelp"></p>';
            echo '</div>';
        }

    }

    if (isset($_SESSION['email']) && $_SESSION['email'] != ""){
        if (isset($_GET['err']) && strstr($_GET['err'], "emailInvalid")){
            //invalid input
            echo '<div class="form-group has-error" id="emailDiv">';
            echo   '<label class="control-label" for="email">Email</label>';
            echo   '<input class="form-control" type="text" id="email" name="email" onblur="handleErrors();" value="'.$_SESSION['email'].'">';
            echo   '<p class="help-block" id="emailHelp">Invalid Input</p>';
            echo '</div>';
        }else if (isset($_GET['err']) && strstr($_GET['err'], "emailNull")){
            //empty input
            echo '<div class="form-group has-error" id="emailDiv">';
            echo   '<label class="control-label" for="email">Email</label>';
            echo   '<input class="form-control" type="text" id="email" name="email" onblur="handleErrors();">';
            echo   '<p class="help-block" id="emailHelp">Cannot be blank!</p>';
            echo '</div>';

        }else{
            //persistent state
            echo '<div class="form-group" id="emailDiv">';
            echo   '<label>Email</label>';
            echo   '<input class="form-control" type="text" id="email" name="email" onblur="handleErrors();" value="'.$_SESSION['email'].'">';
            echo   '<p class="help-block" id="emailHelp"></p>';
            echo '</div>';
        }
    }else{
        if (isset($_GET['err']) && strstr($_GET['err'], "emailNull")){
            //empty input
            echo '<div class="form-group has-error" id="emailDiv">';
            echo   '<label class="control-label" for="email">Email</label>';
            echo   '<input class="form-control" type="text" id="email" name="email" onblur="handleErrors();">';
            echo   '<p class="help-block" id="emailHelp">Cannot be blank!</p>';
            echo '</div>';

        }else {
            //new input
            echo '<div class="form-group" id="emailDiv">';
            echo   '<label>Email</label>';
            echo   '<input class="form-control" type="text" id="email" name="email" onblur="handleErrors();">';
            echo   '<p class="help-block" id="emailHelp"></p>';
            echo '</div>';
        }
        
    }

    if (isset($_SESSION['phone']) && $_SESSION['phone'] != ""){
        if (isset($_GET['err']) && strstr($_GET['err'], "phoneInvalid")){
            //invalid input
            echo '<div class="form-group has-error" id="phoneDiv">';
            echo   '<label class="control-label" for="phone">Phone</label>';
            echo   '<input class="form-control" type="text" id="phone" name="phone" onblur="handleErrors();" value="'.$_SESSION['phone'].'">';
            echo   '<p class="help-block" id="phoneHelp">Invalid Input</p>';
            echo '</div>';
        }else if (isset($_GET['err']) && strstr($_GET['err'], "phoneNull")){
            //empty input
            echo '<div class="form-group has-error" id="phoneDiv">';
            echo   '<label class="control-lable" for="phone">Phone</label>';
            echo   '<input class="form-control" type="text" id="phone" name="phone" onblur="handleErrors();">';
            echo   '<p class="help-block" id="phoneHelp">Cannot be blank!</p>';
            echo '</div>';

        }else{
            //persistent state
            echo '<div class="form-group" id="phoneDiv">';
            echo   '<label>Phone</label>';
            echo   '<input class="form-control" type="text" id="phone" name="phone" onblur="handleErrors();" value="'.$_SESSION['phone'].'">';
            echo   '<p class="help-block" id="phoneHelp"></p>';
            echo '</div>';
        }
    }else{
        if (isset($_GET['err']) && strstr($_GET['err'], "phoneNull")){
            //empty input
            echo '<div class="form-group has-error" id="phoneDiv">';
            echo   '<label class="control-lable" for="phone">Phone</label>';
            echo   '<input class="form-control" type="text" id="phone" name="phone" onblur="handleErrors();">';
            echo   '<p class="help-block" id="phoneHelp">Cannot be blank!</p>';
            echo '</div>';

        }else{
            //new input
            echo '<div class="form-group" id="phoneDiv">';
            echo   '<label>Phone</label>';
            echo   '<input class="form-control" type="text" id="phone" name="phone" onblur="handleErrors();">';
            echo   '<p class="help-block" id="phoneHelp"></p>';
            echo '</div>';
        }

    }

    if (isset($_SESSION['birthday']) && $_SESSION['birthday'] != ""){
        if (isset($_GET['err']) && strstr($_GET['err'], "birthdayInvalid")){
            //invalid input
            echo '<div class="form-group has-error" id="birthdayDiv">';
            echo   '<label class="control-label" for="birthday">Date of Birth</label>';
            echo   '<input class="form-control" type="text" id="birthday" name="birthday" onblur="handleErrors();" value="'.$_SESSION['birthday'].'">';
            echo   '<p class="help-block" id="birthdayHelp">Invalid Input!</p>';
            echo '</div>';
        }else if (isset($_GET['err']) && strstr($_GET['err'], "birthdayNull")){
            //empty input
            echo '<div class="form-group has-error" id="birthdayDiv">';
            echo   '<label class="control-label" for="birthday">Date of Birth</label>';
            echo   '<input class="form-control" type="text" id="birthday" name="birthday" onblur="handleErrors();">';
            echo   '<p class="help-block" id="birthdayHelp">Cannot be blank!</p>';
            echo '</div>';

        }else{
            //persistent state
            echo '<div class="form-group" id="birthdayDiv">';
            echo   '<label class="control-label" for="birthday">Date of Birth</label>';
            echo   '<input class="form-control" type="text" id="birthday" name="birthday" onblur="handleErrors();" value="'.$_SESSION['birthday'].'">';
            echo   '<p class="help-block" id="birthdayHelp"></p>';
            echo '</div>';
        }
    }else{
        if (isset($_GET['err']) && strstr($_GET['err'], "birthdayNull")){
            //empty input
            echo '<div class="form-group has-error" id="birthdayDiv">';
            echo   '<label class="control-label" for="birthday">Date of Birth</label>';
            echo   '<input class="form-control" type="text" id="birthday" name="birthday" onblur="handleErrors();">';
            echo   '<p class="help-block" id="birthdayHelp">Cannot be blank!</p>';
            echo '</div>';

        }else{
            //new input
            echo '<div class="form-group" id="birthdayDiv">';
            echo   '<label>Date of Birth</label>';
            echo   '<input class="form-control" type="text" id="birthday" name="birthday" onblur="handleErrors();">';
            echo   '<p class="help-block" id="birthdayHelp"></p>';
            echo '</div>';
            
        }
        
    }

    echo '<div class="form-check-inline">';
    echo   '<legend>Preferred Contact Method</legend>';
    echo   '<input class="form-check-input" type="radio" name="contactRadio" id="phoneContact" value="Phone" checked>';
    echo   '<label class="form-check-label" for="phoneContact">Phone</label>';
    echo   '<input class="form-check-input" type="radio" name="contactRadio" id="emailContact" value="Email">';
    echo   '<label class="form-check-label" for="emailContact">Email</label>';
    echo   '<p class="help-block" id="contactHelp"></p>';
    echo '</div>';

    if (isset($_SESSION['comment']) && $_SESSION['comment'] != ""){
        echo '<div class="form-group" id="commentDiv">';
        echo   '<legend>Comments</legend>';
        echo   '<textarea name="comment" id="commentArea" cols="30" rows="10"  onblur="handleErrors();">'.$_SESSION['comment'].'</textarea>';
        echo   '<p class="help-block" id="commentHelp"></p>';
        echo '</div>';
    }else{
        echo '<div class="form-group" id="commentDiv">';
        echo   '<legend>Comments</legend>';
        echo   '<textarea name="comment" id="commentArea" cols="30" rows="10"  onblur="handleErrors();"></textarea>';
        echo   '<p class="help-block" id="commentHelp"></p>';
        echo '</div>';
    }
    

    echo '<button name="submit" id="submit" class="btn btn-block btn-success" type="submit">Submit</button>';
    echo '</form>';
    echo '<br>';
    echo '<br>';
    echo '</div>';

    if (isset($_POST['submit'])) {

        $err = "";
        $comment = addslashes($_POST['comment']);
        $_SESSION['comment'] = $comment;

        if (isset($_POST['fname']) && $_POST['fname'] != ""){
            $firstName= addslashes($_POST['fname']);
            $_SESSION['firstName']=$firstName;
            if (!preg_match($nameRegex, $firstName)){
                $err.="firstNameInvalid";
            }
        }else{
            $err.= "firstNameNull";
        }

        if (isset($_POST['lname']) && $_POST['lname'] != ""){
            $lastName= addslashes($_POST['lname']);
            $_SESSION['lastName']=$lastName;
            if (!preg_match($nameRegex, $lastName)){
                $err.="lastNameInvalid";
            }
        }else{
            $err.= "lastNameNull";
        }

        if (isset($_POST['email']) && $_POST['email'] != ""){
            $email=$_POST['email'];
            $_SESSION['email']=$email;
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $err.="emailInvalid";
            }
        }else{
            $err.= "emailNull";
        }

        if (isset($_POST['phone']) && $_POST['phone'] != ""){
            $phone=$_POST['phone'];
            $_SESSION['phone']=$phone;
            if (!preg_match($phoneRegex, $phone)){
                $err.="phoneInvalid";
            }
        }else{
            $err.= "phoneNull";
        }

        if (isset($_POST['birthday']) && $_POST['birthday'] != ""){
            $birthday=$_POST['birthday'];
            $_SESSION['birthday']=$birthday;
            if (!preg_match($birthdayRegex, $birthday)){
                $err.="birthdayInvalid";
            }
        }else{
            $err.= "birthdayNull";
        }
        $contactRadio=$_POST['contactRadio'];
        
        if (isset($err) && $err != ""){
            redirect("index.php?page=contact&err=$err");
        }

        $db_link = db_iconnect("contact_form");
        $sql = "INSERT into `contact_entries` (`first_name`, `last_name`, `phone`, `email`, `birthday`, `contact_method`, `comment`) VALUES ('$firstName', '$lastName', '$phone', '$email', '$birthday', '$contactRadio', '$comment')";

        $db_link->query($sql) or die("Something went wrong with $sql <br>".$db_link->error);
        redirect("index.php?page=contact&msg=success");

    }
     
    echo '</body>';
    echo '</html>';

?>