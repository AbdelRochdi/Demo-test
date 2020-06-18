

const questionDiv = document.querySelector('.questions');
const progressBar = document.querySelector('.questions__progress__bar__fill');
const bigTimer = document.querySelector('.questions__progress__count');
const testDiv = document.querySelector('.test');
const ques = document.querySelector('.questions__field__text');
const answer = document.getElementsByName('choice');
const pager = document.querySelectorAll('.questions__field__buttons__num');
const bigPager = document.querySelector('.questions__field__buttons');
const timer = document.querySelector('.questions__field__area__timer__counter');
const quesImage = document.querySelector('.questions__field__img');
const demarrer = document.querySelector('.test__button__demarrer');
const form = document.querySelector('.questions__field__area__form');
const validation = document.querySelector('.questions__field__validation__button');
const score = document.querySelector('.score');

demarrer.addEventListener('click',testStart);

let questionTimer = 15;
let generalTimer = 200;



let type = 'lkhsfd';
let reponses = [];
let brMeca = 0;
let brLogi = 0;
let mr = 0;


function testStart() {
	testDiv.style.display = 'none';
	questionDiv.style.display = 'block';
	render();
	generalTimer = 200;
}

function randomInt(min, max) {
	return min + Math.floor((max - min) * Math.random());
}

function render() {
	let counter = Math.ceil(Math.random()*5);
	if (brMeca < 2 && generalTimer > 100) {
		type = mecaLevel1;
	}else if(brMeca >=2 && generalTimer > 100){
		type = mecaLevel2;
	}else if (brLogi < 2 && generalTimer > 0) {
		type = logiLevel1;
	}else if(brLogi >=2 && generalTimer > 0){
		type = logiLevel2;
	}

	currentQuestion = type.find((result)=>{
		return result.number == counter;
	})
	ques.textContent = currentQuestion.question;
	quesImage.setAttribute('src', currentQuestion.image);
	form.innerHTML = currentQuestion.choices;

	questionTimer = 15; 
}



function check() {
	for (i = 0; i < answer.length; i++) {
		if (answer[i].checked) {
			if (answer[i].value == currentQuestion.correctAnswer) {
				reponses.push(currentQuestion.quesLevel);
				if (generalTimer > 100) {
					brMeca+=1;
					render();
					console.log(`brMeca = ${brMeca}`)
				}else if (generalTimer >0){
					brLogi+=1;
					render();
					console.log(`brLogi = ${brLogi}`)
				}
				
			}else{
				reponses.push(0);
				mr +=1;
				console.log(`mr = ${mr}`)
				render();
			}
		}
    }
    
	console.log(reponses);
	
}


function quesTimer() {
	questionTimer -=1;
	timer.textContent = questionTimer;

	if (questionTimer == 0) {
		render();	
	}
}


function genTimer() {
	generalTimer -=1;
	if (generalTimer==100) {
		render();
	} else if (generalTimer==0) {
		showScore();
	}
	bigTimer.textContent = generalTimer;
	progressBar.style.width = `${generalTimer/2}%`
}

setInterval(genTimer,1000);
setInterval(quesTimer,1000);

function showScore() {
	score.style.display = 'block';
	questionDiv.style.display = 'none';

	total = reponses.reduce((a,b)=>{
		return a+b;
	})

	score.textContent = `your score is ${total}, correct answers are ${brMeca + brLogi}, wrong answers are ${mr} `
}