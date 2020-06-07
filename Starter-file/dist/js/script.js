const mecaLevel1 = [
	{
		question: `question number one level 1 mecanique`,
		image: `images/meca-1.png`,
		correctAnswer: 'oui',
		quesLevel: 5,
		choices: `<label for="oui">Q1 answers</label>
        <input type="radio" value="oui" onclick="check()" id="oui" name="choice"><br>
        <label for="non">Q1 answers</label>
        <input type="radio" id="non" value="non" name="choice" onclick="check()"><br>
        <label for="sais-pas">Q1 answers</label>
        <input type="radio" id="sais-pas" value="sais-pas" name="choice" onclick="check()"><br>`,
		number: 1
	},
	{
		question: `question number two level 1 mecanique`,
		image: `images/meca-2.png`,
		correctAnswer: 'non',
		quesLevel: 5,
		choices: `<label for="oui">Q2 answers</label>
        <input type="radio" value="oui" onclick="check()" id="oui" name="choice"><br>
        <label for="non">Q2 answers</label>
        <input type="radio" id="non" value="non" name="choice" onclick="check()"><br>
        <label for="sais-pas">Q2 answers</label>
		<input type="radio" id="sais-pas" value="sais-pas" name="choice" onclick="check()"><br>`,
		number: 2
	},
	{
		question: `question number three level 1 mecanique`,
		image: `images/meca-1.png`,
		correctAnswer: 'oui',
		quesLevel: 10,
		choices: `<label for="oui">Q3 answers</label>
        <input type="radio" value="oui" onclick="check()" id="oui" name="choice"><br>
        <label for="non">Q3 answers</label>
        <input type="radio" id="non" value="non" name="choice" onclick="check()"><br>
        <label for="sais-pas">Q3 answers</label>
		<input type="radio" id="sais-pas" value="sais-pas" name="choice" onclick="check()"><br>`,
		number: 3
	},
	{
		question: `question number four level 1 mecanique`,
		image: `images/meca-2.png`,
		correctAnswer: 'non',
		quesLevel: 10,
		choices: `<label for="oui">Q4 answers</label>
        <input type="radio" value="oui" onclick="check()" id="oui" name="choice"><br>
        <label for="non">Q4 answers</label>
        <input type="radio" id="non" value="non" name="choice" onclick="check()"><br>
        <label for="sais-pas">Q4 answers</label>
		<input type="radio" id="sais-pas" value="sais-pas" name="choice" onclick="check()"><br>`,
		number: 4
	},
	{
		question: `question number five level 1 mecanique`,
		image: `images/meca-1.png`,
		correctAnswer: 'oui',
		quesLevel: 15,
		choices: `<label for="oui">Q5 answers</label>
        <input type="radio" value="oui" onclick="check()" id="oui" name="choice"><br>
        <label for="non">Q5 answers</label>
        <input type="radio" id="non" value="non" name="choice" onclick="check()"><br>
        <label for="sais-pas">Q5 answers</label>
		<input type="radio" id="sais-pas" value="sais-pas" name="choice" onclick="check()"><br>`,
		number: 5

	}
];
const mecaLevel2 = [
	{
		question: `question number one level 2 mecanique`,
		image: `images/meca-1.png`,
		correctAnswer: 'oui',
		quesLevel: 5,
		choices: `<label for="oui">Q1 answers</label>
        <input type="radio" value="oui" onclick="check()" id="oui" name="choice"><br>
        <label for="non">Q1 answers</label>
        <input type="radio" id="non" value="non" name="choice" onclick="check()"><br>
        <label for="sais-pas">Q1 answers</label>
        <input type="radio" id="sais-pas" value="sais-pas" name="choice" onclick="check()"><br>`,
		number: 1
	},
	{
		question: `question number two level 2 mecanique`,
		image: `images/meca-2.png`,
		correctAnswer: 'non',
		quesLevel: 5,
		choices: `<label for="oui">Q2 answers</label>
        <input type="radio" value="oui" onclick="check()" id="oui" name="choice"><br>
        <label for="non">Q2 answers</label>
        <input type="radio" id="non" value="non" name="choice" onclick="check()"><br>
        <label for="sais-pas">Q2 answers</label>
		<input type="radio" id="sais-pas" value="sais-pas" name="choice" onclick="check()"><br>`,
		number: 2
	},
	{
		question: `question number three level 2 mecanique`,
		image: `images/meca-1.png`,
		correctAnswer: 'oui',
		quesLevel: 10,
		choices: `<label for="oui">Q3 answers</label>
        <input type="radio" value="oui" onclick="check()" id="oui" name="choice"><br>
        <label for="non">Q3 answers</label>
        <input type="radio" id="non" value="non" name="choice" onclick="check()"><br>
        <label for="sais-pas">Q3 answers</label>
		<input type="radio" id="sais-pas" value="sais-pas" name="choice" onclick="check()"><br>`,
		number: 3
	},
	{
		question: `question number four level 2 mecanique`,
		image: `images/meca-2.png`,
		correctAnswer: 'non',
		quesLevel: 10,
		choices: `<label for="oui">Q4 answers</label>
        <input type="radio" value="oui" onclick="check()" id="oui" name="choice"><br>
        <label for="non">Q4 answers</label>
        <input type="radio" id="non" value="non" name="choice" onclick="check()"><br>
        <label for="sais-pas">Q4 answers</label>
		<input type="radio" id="sais-pas" value="sais-pas" name="choice" onclick="check()"><br>`,
		number: 4
	},
	{
		question: `question number five level 2 mecanique`,
		image: `images/meca-1.png`,
		correctAnswer: 'oui',
		quesLevel: 15,
		choices: `<label for="oui">Q5 answers</label>
        <input type="radio" value="oui" onclick="check()" id="oui" name="choice"><br>
        <label for="non">Q5 answers</label>
        <input type="radio" id="non" value="non" name="choice" onclick="check()"><br>
        <label for="sais-pas">Q5 answers</label>
		<input type="radio" id="sais-pas" value="sais-pas" name="choice" onclick="check()"><br>`,
		number: 5

	}
];
const logiLevel1 = [
	{
		question: `question number one level 1 logique`,
		image: `images/meca-1.png`,
		correctAnswer: 'oui',
		quesLevel: 5,
		choices: `<label for="oui">Q1 answers</label>
        <input type="radio" value="oui" onclick="check()" id="oui" name="choice"><br>
        <label for="non">Q1 answers</label>
        <input type="radio" id="non" value="non" name="choice" onclick="check()"><br>
        <label for="sais-pas">Q1 answers</label>
        <input type="radio" id="sais-pas" value="sais-pas" name="choice" onclick="check()"><br>`,
		number: 1
	},
	{
		question: `question number two level 1 logique`,
		image: `images/meca-2.png`,
		correctAnswer: 'non',
		quesLevel: 5,
		choices: `<label for="oui">Q2 answers</label>
        <input type="radio" value="oui" onclick="check()" id="oui" name="choice"><br>
        <label for="non">Q2 answers</label>
        <input type="radio" id="non" value="non" name="choice" onclick="check()"><br>
        <label for="sais-pas">Q2 answers</label>
		<input type="radio" id="sais-pas" value="sais-pas" name="choice" onclick="check()"><br>`,
		number: 2
	},
	{
		question: `question number three level 1 logique`,
		image: `images/meca-1.png`,
		correctAnswer: 'oui',
		quesLevel: 10,
		choices: `<label for="oui">Q3 answers</label>
        <input type="radio" value="oui" onclick="check()" id="oui" name="choice"><br>
        <label for="non">Q3 answers</label>
        <input type="radio" id="non" value="non" name="choice" onclick="check()"><br>
        <label for="sais-pas">Q3 answers</label>
		<input type="radio" id="sais-pas" value="sais-pas" name="choice" onclick="check()"><br>`,
		number: 3
	},
	{
		question: `question number four level 1 logique`,
		image: `images/meca-2.png`,
		correctAnswer: 'non',
		quesLevel: 10,
		choices: `<label for="oui">Q4 answers</label>
        <input type="radio" value="oui" onclick="check()" id="oui" name="choice"><br>
        <label for="non">Q4 answers</label>
        <input type="radio" id="non" value="non" name="choice" onclick="check()"><br>
        <label for="sais-pas">Q4 answers</label>
		<input type="radio" id="sais-pas" value="sais-pas" name="choice" onclick="check()"><br>`,
		number: 4
	},
	{
		question: `question number five level 1 logique`,
		image: `images/meca-1.png`,
		correctAnswer: 'oui',
		quesLevel: 15,
		choices: `<label for="oui">Q5 answers</label>
        <input type="radio" value="oui" onclick="check()" id="oui" name="choice"><br>
        <label for="non">Q5 answers</label>
        <input type="radio" id="non" value="non" name="choice" onclick="check()"><br>
        <label for="sais-pas">Q5 answers</label>
		<input type="radio" id="sais-pas" value="sais-pas" name="choice" onclick="check()"><br>`,
		number: 5

	}
];
const logiLevel2 = [
	{
		question: `question number one level 2 logique`,
		image: `images/meca-1.png`,
		correctAnswer: 'oui',
		quesLevel: 5,
		choices: `<label for="oui">Q1 answers</label>
        <input type="radio" value="oui" onclick="check()" id="oui" name="choice"><br>
        <label for="non">Q1 answers</label>
        <input type="radio" id="non" value="non" name="choice" onclick="check()"><br>
        <label for="sais-pas">Q1 answers</label>
        <input type="radio" id="sais-pas" value="sais-pas" name="choice" onclick="check()"><br>`,
		number: 1
	},
	{
		question: `question number two level 2 logique`,
		image: `images/meca-2.png`,
		correctAnswer: 'non',
		quesLevel: 5,
		choices: `<label for="oui">Q2 answers</label>
        <input type="radio" value="oui" onclick="check()" id="oui" name="choice"><br>
        <label for="non">Q2 answers</label>
        <input type="radio" id="non" value="non" name="choice" onclick="check()"><br>
        <label for="sais-pas">Q2 answers</label>
		<input type="radio" id="sais-pas" value="sais-pas" name="choice" onclick="check()"><br>`,
		number: 2
	},
	{
		question: `question number three level 2 logique`,
		image: `images/meca-1.png`,
		correctAnswer: 'oui',
		quesLevel: 10,
		choices: `<label for="oui">Q3 answers</label>
        <input type="radio" value="oui" onclick="check()" id="oui" name="choice"><br>
        <label for="non">Q3 answers</label>
        <input type="radio" id="non" value="non" name="choice" onclick="check()"><br>
        <label for="sais-pas">Q3 answers</label>
		<input type="radio" id="sais-pas" value="sais-pas" name="choice" onclick="check()"><br>`,
		number: 3
	},
	{
		question: `question number four level 2 logique`,
		image: `images/meca-2.png`,
		correctAnswer: 'non',
		quesLevel: 10,
		choices: `<label for="oui">Q4 answers</label>
        <input type="radio" value="oui" onclick="check()" id="oui" name="choice"><br>
        <label for="non">Q4 answers</label>
        <input type="radio" id="non" value="non" name="choice" onclick="check()"><br>
        <label for="sais-pas">Q4 answers</label>
		<input type="radio" id="sais-pas" value="sais-pas" name="choice" onclick="check()"><br>`,
		number: 4
	},
	{
		question: `question number five level 2 logique`,
		image: `images/meca-1.png`,
		correctAnswer: 'oui',
		quesLevel: 15,
		choices: `<label for="oui">Q5 answers</label>
        <input type="radio" value="oui" onclick="check()" id="oui" name="choice"><br>
        <label for="non">Q5 answers</label>
        <input type="radio" id="non" value="non" name="choice" onclick="check()"><br>
        <label for="sais-pas">Q5 answers</label>
		<input type="radio" id="sais-pas" value="sais-pas" name="choice" onclick="check()"><br>`,
		number: 5

	}
];

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

function render() {
	let counter = Math.ceil(Math.random()*5);
	if (brMeca < 2 && generalTimer > 100) {
		type = mecaLevel1;
	}else if(brMeca >=2 && generalTimer > 100){
		type = mecaLevel2;
	}else if (brLogi < 2 && generalTimer > 0) {
		type = logiLevel1;
	}else if(brMeca >=2 && generalTimer > 0){
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