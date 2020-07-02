
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test YouCode</title>
    <link rel="stylesheet" href="Starter-file/dist/css/style.css">
</head>

<body>
    <header class="header">
        <nav class="header__nav">
            <img src="images/logo.png" alt="" class="header__nav__logo">
            <ul class="header__nav__menu">
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Programme</a></li>
                <li><a class="inscris" href="#">Inscris-toi</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="wrapper">
        
        <section class="test">
            <h1>Test en ligne</h1>
            <h3>Test psychotechnique</h3>
            <p>Les tests psychotechniques comprennent : des tests logique, des tests de dominos, des tests de cartes,
            des tests mécaniques, des tests verbaux, des tests mathématiques et des tests de mémoire.</p>
            <div class="test__button">
                <button class="test__button__read">Les règles du test</button>
            </div>

            <div class="modal">
                <div class="modal__content">
                    <div class="modal__content__header">
                        <span class="modal__content__header__closeBtn">&times;</span>
                        <h2>Lisez Bien</h2>
                    </div>
                    <div class="modal__content__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore animi corrupti doloribus vero voluptatum cupiditate dolorum rerum. Doloribus, libero voluptas, quo deleniti voluptatem dolores a ex esse rerum repudiandae aperiam!
                    </div>
                    <div class="modal__content__button"> 
                         <button class="modal__content__button__demarrer">Démarrer le test</button>
                    </div>

                </div>
            </div>
            
        </section>
        <section class="questions">
            <h2>Test psychotechnique</h2>
            <div class="questions__progress">
                <div class="questions__progress__bar">
                    <div class="questions__progress__bar__fill"></div>
                </div>
                <span class="questions__progress__count"></span>
            </div>
            <div class="questions__field">
                <div class="questions__field__container">
                    <p class="questions__field__container__text">Quel est le domino manquant ?</p>       
                </div>
                <div class="questions__field__img">
                    <img  class="questions__field__img__picture" src="images/domi_2.png" alt="">
                    <div class="timer">
                        <div class="timer__bar">
                            <div class="timer__bar__fill"></div>
                        </div>
                        <span class="timer__counter">20</span>
                    </div>
                </div>
            </div>
                
                

                <div class="questions__field__area">
                    <div class="questions__field__area__container">
                        <div class="questions__field__area__container__row">
                            <button>reponse1</button>
                            <button>reponse2</button>
                        </div> 
                        
                        <div class="questions__field__area__container__row">
                            <button>reponse3</button>
                            <button>reponse4</button>
                        </div>
                        
                    </div>
                    
                </div>
              
                
            
            <div class="next">
                <button class="next__button">Changer la Question</button>
            </div>
        </section>
        <h1 class="score"></h1>
    </div>
    

    <?php
 
 // Create connection
 $con=mysqli_connect("localhost","root","","testy");
 
 // Check connection
 if (mysqli_connect_errno())
 {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
  
 // This SQL statement selects ALL from the table
 
 $sql = "SELECT * FROM questions1";
  
 // Check if there are results
 if ($result = mysqli_query($con, $sql))
 {
     // If so, then create a results array and a temporary one
     // to hold the data
     $resultArray = array();
     $tempArray = array();
  
     // Loop through each row in the result set
     while($row = $result->fetch_assoc())
     {
         // Add each row into our results array
         $tempArray = $row;
         array_push($resultArray, $tempArray);
     }
  
     // Finally, encode the array to JSON and output the results
     $json=json_encode($resultArray);
     ?>
     <script>
        let myObj = <?php echo $json; ?>;
     console.log(myObj) ;
     </script>
  
     <?php
     
 }
  
 mysqli_close($con);
 ?>
 
    <script>

const headerDiv = document.querySelector('.header');
const questionDiv = document.querySelector('.questions');
const progress = document.querySelector('.questions__progress__bar');
const progressBar = document.querySelector('.questions__progress__bar__fill');
const bigTimer = document.querySelector('.questions__progress__count');
const testDiv = document.querySelector('.test');
const ques = document.querySelector('.questions__field__container__text');
const timer = document.querySelector('.timer__counter');
const timerBar = document.querySelector('.timer__bar');
const timerBarFill = document.querySelector('.timer__bar__fill');
const quesImage = document.querySelector('.questions__field__img__picture');
const modal = document.querySelector('.modal');
const openBtn = document.querySelector('.test__button__read');
const closeBtn = document.querySelector('.modal__content__header__closeBtn');
const demarrer = document.querySelector('.modal__content__button__demarrer');
const answers = document.querySelector('.questions__field__area__container');
const next = document.querySelector('.next__button');
const score = document.querySelector('.score');


demarrer.addEventListener('click',testStart);
next.addEventListener('click',render);
answers.addEventListener('click',check);
closeBtn.addEventListener('click',closeModal);
openBtn.addEventListener('click',openModal);
window.addEventListener('click',outsideCloseModal);
//timers

let quesSeconds = 30;
let genSeconds = 1200;

let questionTimer = quesSeconds;
let generalTimer = genSeconds;

//sets of questions

let type1Level1 = [];
let type1Level2 = [];
let type1Level3 = [];
let type2Level1 = [];
let type2Level2 = [];
let type2Level3 = [];
let type3Level1 = [];
let type3Level2 = [];
let type3Level3 = [];

function trierQuestions(params) {
    for (question of myObj){
    if (question.type == 1 && question.niveau == 1) {
        type1Level1.push(question);
    }else if (question.type == 1 && question.niveau == 2) {
        type1Level2.push(question);
    }else if (question.type == 1 && question.niveau == 3) {
        type1Level3.push(question);
    }else if (question.type == 2 && question.niveau == 1) {
        type2Level1.push(question);
    }else if (question.type == 2 && question.niveau == 2) {
        type2Level2.push(question);
    }else if (question.type == 2 && question.niveau == 3) {
        type2Level3.push(question);
    }else if (question.type == 3 && question.niveau == 1) {
        type3Level1.push(question);
    }else if (question.type == 3 && question.niveau == 2) {
        type3Level2.push(question);
    }else if (question.type == 3 && question.niveau == 3) {
        type3Level3.push(question);
    }
}

}
trierQuestions();

//conditions

let questionPassed;

let questionPassedT1L1 = [];
let questionPassedT1L2 = [];
let questionPassedT1L3 = [];
let questionPassedT2L1 = [];
let questionPassedT2L2 = [];
let questionPassedT2L3 = [];
let questionPassedT3L1 = [];
let questionPassedT3L2 = [];
let questionPassedT3L3 = [];

let reponses = [0];
let brMeca = 0;
let brLogi = 0;
let brMath = 0;
let mr = 0;


function openModal() {
    modal.style.display = 'block';
    
}

function closeModal() {
    modal.style.display = 'none';
}

function outsideCloseModal(e) {
    if (e.target == modal) {
        modal.style.display = 'none';
    }
    
}


function testStart() {
    
    testDiv.style.display = 'none';
	questionDiv.style.display = 'block';
	headerDiv.style.background = 'none';
	headerDiv.style.height = '4em';
	render();
	generalTimer = genSeconds;
    
	
}





function check(e) {
    if (e.target.className == 'reponse') {
        let reponse = e.target;
        if (reponse.value == currentQuestion.BonneR) {
            reponses.push(currentQuestion.niveau*(Math.floor(questionTimer/5)+1));
                console.log(questionPassed)
                questionPassed.push(parseInt(currentSet.indexOf(currentQuestion)))
                console.log(questionPassed)
				if (generalTimer > 800) {
                    brLogi+=1;
					render();
					console.log(`brLogi = ${brLogi}`)
				}else if (generalTimer >400){
					brMeca+=1;
					render();
					console.log(`brMeca = ${brMeca}`)
                }else if (generalTimer >0){
					brMath+=1;
					render();
					console.log(`brMath = ${brMath}`)
				}
				
			}else{
                reponses.push(-(currentQuestion.niveau/2));
				mr +=1;
				console.log(`mr = ${mr}`)
				render();
			}
         
    }
	
	console.log(reponses);
	
}

function randomInt(min, max) {
	return min + Math.floor((max - min) * Math.random());
}

function render() {

   
	if (brLogi < 2 && generalTimer > 800) {
        currentSet = type1Level1;
        questionPassed = questionPassedT1L1;
        
	}else if(brLogi >= 2 && generalTimer > 800){
        currentSet = type1Level2;
        questionPassed = questionPassedT1L2;
  
	}else if (brLogi >= 4 && generalTimer > 800) {
        currentSet = type1Level3;
        questionPassed = questionPassedT1L3;

	}else if(brMeca <2 && generalTimer > 400){
        currentSet = type2Level1;
        questionPassed = questionPassedT2L1;
        
	}else if (brMeca >= 2 && generalTimer > 400) {
        currentSet = type2Level2;
        questionPassed = questionPassedT2L2;

	}else if(brMeca >=4 && generalTimer > 400){
        currentSet = type2Level3;
        questionPassed = questionPassedT2L3;

    }else if (brMath < 2 && generalTimer >0) {
        currentSet = type3Level1;
        questionPassed = questionPassedT3L1;
     
	}else if(brMath >=2 && generalTimer > 0){
        currentSet = type3Level2;
        questionPassed = questionPassedT3L2;

    }else if(brMath >=4 && generalTimer > 0){
        currentSet = type3Level3;
        questionPassed = questionPassedT3L3;
        
    }

    console.log('current set ='+currentSet);

        let counter = randomInt(0,currentSet.length);
        console.log(counter)
    while (questionPassed.includes(counter)) {
        counter = randomInt(0,currentSet.length);
        console.log(counter)
    }
    console.log(questionPassed)
    console.log(`this is the last counter ${counter}`)

	currentQuestion = currentSet[counter];
    console.log(currentQuestion)
    ques.textContent = currentQuestion.QuestA;
    quesImage.setAttribute('src', `images/${currentQuestion.image}`);
    if (currentQuestion.nombre_reponses == 5) {
        answers.innerHTML = `<div class="questions__field__area__container__row">
                            <button value = '${currentQuestion.reponse1}' class='reponse'>${currentQuestion.reponse1}</button>
                            <button value = '${currentQuestion.reponse2}' class='reponse'>${currentQuestion.reponse2}</button>
                        </div> 
                        
                        <div class="questions__field__area__container__row">
                            <button value = '${currentQuestion.reponse3}' class='reponse'>${currentQuestion.reponse3}</button>
                            <button value = '${currentQuestion.reponse4}' class='reponse'>${currentQuestion.reponse4}</button>
                            <button value = '${currentQuestion.reponse5}' class='reponse'>${currentQuestion.reponse5}</button>
                        </div>
        `;
    }else{
	answers.innerHTML = `<div class="questions__field__area__container__row">
                            <button value = '${currentQuestion.reponse1}' class='reponse'>${currentQuestion.reponse1}</button>
                            <button value = '${currentQuestion.reponse2}' class='reponse'>${currentQuestion.reponse2}</button>
                        </div> 
                        
                        <div class="questions__field__area__container__row">
                            <button value = '${currentQuestion.reponse3}' class='reponse'>${currentQuestion.reponse3}</button>
                            <button value = '${currentQuestion.reponse4}' class='reponse'>${currentQuestion.reponse4}</button>
                        </div>
        `;
    }
	questionTimer = quesSeconds; 
}



function quesTimer() {
    if (testDiv.style.display == 'none' && questionDiv.style.display == 'block' ) {
        questionTimer -=1;
    }

    if (questionTimer >10) {
        timerBar.style.borderColor = '#008AFF';
        timerBarFill.style.backgroundColor = '#008AFF';
        timer.style.color = '#008AFF';
    }else{
        timer.style.color = 'red';
        timerBar.style.borderColor = 'red';
        timerBarFill.style.backgroundColor = 'red';
    }

	
	timer.textContent = questionTimer;
    timerBarFill.style.height = `${questionTimer*100/quesSeconds}%`;

	if (questionTimer == 0) {
		render();	
	}
}


function genTimer() {
    if (testDiv.style.display == 'none' && questionDiv.style.display == 'block' ) {
        generalTimer -=1;
    }
	
	if (generalTimer==400 || generalTimer==800) {
		render();
	} else if (generalTimer==0) {
        showScore();
        generalTimer = 1;
    }

    if (generalTimer>200) {
        progress.style.borderColor = '#008AFF';
        progressBar.style.backgroundColor = '#008AFF';
        bigTimer.style.color = '#008AFF';
    }else{
        progress.style.borderColor = 'red';
        progressBar.style.backgroundColor = 'red';
        bigTimer.style.color = 'red';
    }
    
    const minutes = Math.floor(generalTimer/60);
    let seconds = generalTimer%60;

    if (seconds < 10) {
        seconds = '0'+seconds;
    }

    let minuter = `${minutes}:${seconds}`;

	bigTimer.textContent = minuter;
	progressBar.style.width = `${generalTimer/(genSeconds/100)}%`;
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
    insertScore();
}

function insertScore(){
    let xhr = new XMLHttpRequest;
    xhr.open('POST','insert.php',true)
    xhr.setRequestHeader('content-type','application/x-www-form-urlencoded')

    xhr.onload = function(){
        console.log(this.responseText);
    }

    let params = `name=${total}`

    xhr.send(params);

}


    </script>
</body>

</html>