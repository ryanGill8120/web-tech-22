//JavaScript Document

function handleErrors() {

    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var birthday = document.getElementById("birthday").value;
    var comment = document.getElementById("commentArea").value;

    var submitBtn = document.getElementById("submit");

    var firstNameHelp = document.getElementById("firstNameHelp");
    var lastNameHelp = document.getElementById("lastNameHelp");
    var emailHelp = document.getElementById("emailHelp");
    var phoneHelp = document.getElementById("phoneHelp");
    var birthdayHelp = document.getElementById("birthdayHelp");
    var commentHelp = document.getElementById("commentHelp");

    var nameRegex = /^([^%*!:;$]+)$/;
    var commentRegex = /^([^%*!:;]+)$/;
    var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var phoneRegex = /^([0-9]{3}-[0-9]{3}-[0-9]{4})+$/;
    var birthdayRegex = /^([0-9]{2}\/[0-9]{2}\/[0-9]{4})+$/;

    var firstNameError = false;
    var lastNameError = false;
    var emailError = false;
    var phoneError = false;
    var birthdayError = false;
    var commentError = false;

    if (firstName.match(nameRegex)){
        firstNameHelp.innerHTML = '';
    }else if (firstName != ''){
        firstNameHelp.innerHTML = 'Invalid Characters: ( % * ! : ; $ )';
        firstNameError = true;
    }

    if (lastName.match(nameRegex)){
        lastNameHelp.innerHTML = '';
    }else if (lastName != ''){
        lastNameHelp.innerHTML = 'Invalid Characters: ( % * ! : ; $ )';
        lastNameError = true;
    }

    if (email.match(emailRegex)){
        emailHelp.innerHTML = '';
    }else if (email != ''){
        emailHelp.innerHTML = 'Please use the format: youremail@example.com';
        emailError = true;
    }

    if (phone.match(phoneRegex)){
        phoneHelp.innerHTML = '';
    }else if (phone != ''){
        phoneHelp.innerHTML = 'Please use the format: XXX-XXX-XXXX';
        phoneError = true;
    }

    if (birthday.match(birthdayRegex)){
        birthdayHelp.innerHTML = '';
    }else if (birthday != ''){
        birthdayHelp.innerHTML = 'Please use the format: MM/DD/YYYY';
        birthdayError = true;
    }

    if (comment.match(commentRegex)){
        commentHelp.innerHTML = '';
    }else if (comment != ''){
        commentHelp.innerHTML = 'Invalid Characters: ( % * ! : ; )';
        commentError = false;
    }

    if (firstNameError || lastNameError || phoneError || emailError || birthdayError || commentError) {
        submitBtn.classList.remove('btn-success');
        submitBtn.classList.add('btn-danger', 'disabled');
        return true;
    }
    submitBtn.classList.remove('btn-danger', 'disabled');
    submitBtn.classList.add('btn-success');
    return false;

}


function processContactForm(){

    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var birthday = document.getElementById("birthday").value;
    var comment = document.getElementById("commentArea").value;

    var submitBtn = document.getElementById("submit");

    var output = 'Thank you for your submission. You have given the following information:\n';
    var radioSelection = document.querySelector('input[name="contactRadio"]:checked').value;

    if (firstName == '' || lastName == '' || phone == '' || email == '' || birthday == ''){
        alert("You have not filled out all required information");
    }else if (handleErrors()){
        alert("Please review your errors");
    }else{

        output += '\nFirst Name: ' + firstName + '\nLast Name: ' + lastName + '\nEmail: ' + email +
            '\nPhone: ' + phone + '\nDate of Birth: ' + birthday + '\nPreferred Contact: ' + radioSelection;
        if (comment == ''){
            output += '\nComment: None Provided';
        }else{
            output += '\nComment: ' + comment;
        }
        alert(output);
    }

}