const p1scoreD = document.getElementById("player1score");
const p2scoreD = document.getElementById("player2score");
const p1button=document.getElementById("p1");
const p2button=document.getElementById("p2");
const inputS = document.getElementById("inputScore");
const winningScoreDisplay = document.querySelector('p span');
const resetBtn = document.getElementById("reset");
let p1score = 0;
let p2score = 0;
let winScore = 5;
let gameOver = false;
function winner(oldScore,newScore){
	if(oldScore===winScore){
		if(p1score===winScore){
			p1scoreD.classList.add('winner');
		}else{
			p2scoreD.classList.add('winner');
		}  
	 gameOver = true;
	// console.log('Game Over');
	 p1button.setAttribute('disabled', 'disabled');
	 p2button.setAttribute('disabled', 'disabled');
	}
}
function resetBu(){
	p1score = 0;
    p2score = 0;
    
    gameOver = false;
    p1scoreD.textContent = 0;
    p2scoreD.textContent = 0;
    p1button.removeAttribute('disabled');
	p2button.removeAttribute('disabled');
	p2scoreD.classList.remove('winner');
	p1scoreD.classList.remove('winner');
};

resetBtn.addEventListener('click',resetBu);  

p1button.addEventListener('click',()=>{
//Data Change
if(!gameOver){
	p1score++;
	winner(p1score,winScore);
}

//shoe change data
p1scoreD.textContent = p1score;

});

p2button.addEventListener('click',()=>{
//Data Change
if(!gameOver){
	p2score++;
	winner(p2score,winScore);
 
}

//shoe change data
p2scoreD.textContent = p2score;
});
inputS.addEventListener('change',()=>{
	winScore = Number(inputS.value);
	winningScoreDisplay.textContent = inputS.value;
    inputS.value = '';
    resetBu();

}); 





