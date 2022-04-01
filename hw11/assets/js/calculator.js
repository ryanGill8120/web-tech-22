// Javascript Document

function clearDocument(){
    document.getElementById("answer").innerHTML = '';
}

function handleErrors(){

    var num1 = document.getElementById("num1").value;
    var num2 = document.getElementById("num2").value;
    var regEx=/^\d+$/;
    var inputOneErrors = false;
    var inputTwoErrors = false;
    var zeroError = false;

    var submitBtn = document.getElementById("submit");
    var num1Help = document.getElementById("num1Help");
    var num2Help = document.getElementById("num2Help");

    if (num1.match(regEx)){
        num1Help.innerHTML = '';
    }else if (num1 != ''){
        num1Help.innerHTML = 'Integers only please';
        inputOneErrors = true;
    }

    if (num2.match(regEx)){
        num2Help.innerHTML = '';
        if (parseInt(num2) === 0 && document.getElementById("funct").value == 'divide'){
            num2Help.innerHTML = 'Cannot divide by zero';
            zeroError = true;
        }
    }else if (num2 != ''){
        num2Help.innerHTML = 'Integers only please';
        inputTwoErrors = true;
    }
    if (inputOneErrors || inputTwoErrors || zeroError) {
        submitBtn.classList.remove('btn-success');
        submitBtn.classList.add('btn-danger', 'disabled');
        return true;
    }
    submitBtn.classList.remove('btn-danger', 'disabled');
    submitBtn.classList.add('btn-success');
    return false;

}

function calculate(){
    var num1 = document.getElementById("num1").value;
    var num2 = document.getElementById("num2").value;
    var funct = document.getElementById("funct").value;
    var output = document.getElementById('answer');
    var answer;
    var regEx=/^\d+$/;
    var inputErrors = false;

    //error handling

    //calculations
    if (num1 == '' || num2 == ''){
        output.innerHTML = 'Please make your selections';
    }else if (!handleErrors()){
        num1 = parseInt(num1);
        num2 = parseInt(num2);
        switch (funct) {
            case 'add':
                answer = num1 + num2;
                break;

            case 'subtract':
                answer = num1 - num2;
                break;
            
            case 'multiply':
                answer = num1 * num2;
                break;

            case 'divide':
                answer = num1 / num2;
                answer = parseInt(answer);
                break;

            default:
                break;
        }
        
        output.innerHTML='The answer is: '+ answer;
    }


    //console.log('num1: ' + num1 + ', num2: ' + num2 + ', select: ' + funct);
    
}