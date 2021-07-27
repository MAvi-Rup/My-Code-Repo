let button = document.getElementById('inputGuess');
let randNumber = Math.floor(Math.random() * 5) + 1;
console.log(randNumber);
let guess = 0;
let output = document.querySelector('.textArea');
// let guessCount = document.querySelector('p span');

// guessCount.addEventListener('change',()=>{
// 	let guessCount2 = document.getElementById('a1').value;
// 	if(guess=1){
//        guessCount.innerHTML= (`3`);      
// 	}
// })
button.addEventListener('click',()=>{
	let inputNumber = document.getElementById('inputValue').value;
	if(guess===3){
		output.innerHTML=(`You dont have any guess left Game Over`);
		button.setAttribute('disabled', 'disabled');

	}else{
			if(inputNumber==randNumber){
		output.innerHTML=(`<h1>You Guess Correct</h1>`);
	   }    else if (inputNumber>randNumber) {
		output.innerHTML=(`<p>Guess is bigger</p>`);
		guess++;
	   }else if (inputNumber<randNumber) {
		output.innerHTML=(`</p>Guess is smaller</p>`);
		guess++;
	   }
	}

})
let resetButton=document.getElementById('reset');

resetButton.addEventListener('click',()=>{
	let inputNumber = document.getElementById('inputValue').value;
	guess=0;
    button.removeAttribute('disabled', 'disabled');
    output.textContent ="";
    inputNumber.textContent=null;
})














