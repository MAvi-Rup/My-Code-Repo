


function inputHandle(){
    //selector
let inputName=document.getElementById('myName').value;
let inputUsername=document.getElementById('myUsername').value;
let inputEmail=document.getElementById('myEmail').value;
let inputNumber=document.getElementById('myNumber').value;
let password=document.getElementById('myPassword').value;
let submitBtn=document.getElementById('button').value;

// inputName='';
// inputUsername='';
// inputEmail='';
// inputNumber='';
// password='';

//regular expression to validate
let nameRe=/^[a-zA-Z.]{3,}$/;
let userRe= /^[\w\.]{3,}$/;
let emailRe=/^[\S]+@[\w]+.[\w]+$/;
let numberRe=/^\+?(88)?01[\d]{9}$/;
let passwordRe= /^(?=.*\d)(?=.*[a-zA-z])[\w\s!@#$%&]{6,}$/;

//validate all the value
let validateName = nameRe.test(inputName.value);
let validateUser = userRe.test(inputUsername.value);
let validateEmail = emailRe.test(inputEmail.value);
let validateNumber = numberRe.test(inputNumber.value);
let validatePassword = passwordRe.test(password.value);

    if(nameRe.test(inputName)){
        console.log(inputName)
    }else {
        alert("Please Fill up the name properly")
    }

    if(userRe.test(inputUsername)){
        console.log(inputUsername)
    }else {
        alert("Please Fill up the Username properly")
    }

    if(emailRe.test(inputEmail)){
        console.log(inputEmail)
    }else {
        alert("Please Fill up the email properly")
    }

    if(numberRe.test(inputNumber)){
        console.log(inputNumber)
    }else {
        alert("Please Fill up the number properly")
    }

    if(passwordRe.test(password)){
        console.log(password)
    }else {
        alert("Please Fill up the password properly")
    }

}



// inputS.addEventListener('change',()=>{
// 	winScore = Number(inputS.value);
// 	winningScoreDisplay.textContent = inputS.value;
//     inputS.value = '';
//     resetBu();

// }); 

