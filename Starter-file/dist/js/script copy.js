const questionList = [
	{
		question: `question number one`,
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
		question: `question number two`,
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
		question: `question number three`,
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
		question: `question number four`,
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
		question: `question number five`,
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

bigPager.addEventListener('click', changeQuestion);
demarrer.addEventListener('click', testStart);
validation.addEventListener('click', showScore);

let reponses = [0,0,0,0,0];
let counter = 1;
let questionTimer = 15;
let generalTimer = 600;

function testStart() {
	testDiv.style.display = 'none';
	questionDiv.style.display = 'block';
	counter = 1;
	render();
	color();
	questionTimer = 15;
}

function render() {
	currentQuestion = questionList.find((result) => {
		return result.number === counter;
	});
	if (counter <= questionList.length) {
		ques.textContent = currentQuestion.question;
		quesImage.setAttribute('src', currentQuestion.image);
		form.innerHTML = currentQuestion.choices;
	}
}

function color() {
	pager.forEach((page, index) => {
		if (index === counter - 1) {
			page.style.backgroundColor = 'blue';
		} else if(page.style.backgroundColor != 'green'){
            page.style.backgroundColor = 'aqua';
        }
	});
}

function changeQuestion(e) {
	if (e.target.classList.contains('questions__field__buttons__num')) {
		pager.forEach((page, index) => {
			if (page === e.target) {
				counter = index + 1;
				questionTimer = 15;
				page.style.backgroundColor = 'blue';
				render();
			} else if(page.style.backgroundColor != 'green'){
				page.style.backgroundColor = 'aqua';
			}
		});
	}
}

function check() {
	for (i = 0; i < answer.length; i++) {
		if (answer[i].checked) {
			if (answer[i].value == currentQuestion.correctAnswer) {
                reponses.splice(counter - 1, 1, currentQuestion.quesLevel);
               
			} else {
                reponses.splice(counter - 1, 1, 0);
                
            }
            pager.forEach((page, index) => {
                if (index === counter - 1) {
                    page.style.backgroundColor = 'green';
                }
            });
			if (counter < questionList.length) {
                counter += 1;
                questionTimer = 15;
				render();
				color();
			}
		}
    }
    
	console.log(reponses);
}

function timerDef() {
	timer.textContent = questionTimer;

	if (questionTimer == 0 && counter == questionList.length) {
		counter = 1;
		questionTimer = 15;
		render();
		color();
	} else if (questionTimer == 0) {
		if (counter < questionList.length) {
			counter += 1;
			render();
			color();
			questionTimer = 15;
		}
	} else {
		questionTimer -= 1;
	}
}

function showScore() {
	
		testDiv.style.display = 'none';
		questionDiv.style.display = 'none';
		score.style.display = 'block';

		let sum = reponses.reduce((a, b) => {
			return a + b;
		}, 0);

		score.textContent = `Your Score is ${sum}`;
		console.log(sum);
	
}

timerDef();
setInterval(timerDef, 1000);

render();
color();
