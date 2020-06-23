
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test YouCode</title>
    <link rel="stylesheet" href="Starter-file/dist/css/style.css">
</head>

<body>
    <div class="wrapper">
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
        <section class="test">
            <h1>Test en ligne</h1>
            <h3>Test psychotechnique</h3>
            <p class='arabic'>هاد الاختبار فيه أسئلة ديال المنطق، الحساب، الميكانيك، و الذاكرة</p>
            <div class="test__button">
                <button class="test__button__demarrer">نبدا الاختبار</button>
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
                <p class="questions__field__text">Quel est le domino manquant ?</p>
                <div class="quesContainer">
                <img class="questions__field__img" src="images/domi_1.png" alt="">
                <div class="questions__field__area__timer">
                    <img class="questions__field__area__timer__img" src="images/time.png" alt="">
                    <span class="questions__field__area__timer__counter"></span>
                </div>
                </div>
                <div class="questions__field__area">
                    <form class="questions__field__area__form">
                        <label for="oui">Q1 answers</label>
                        <input type="radio" value="oui" onclick="check()" id="oui" name="choice"><br>
                        <label for="non">Q1 answers</label>
                        <input type="radio" id="non" value="non" name="choice" onclick="check()"><br>
                        <label for="sais-pas">Q1 answers</label>
                        <input type="radio" id="sais-pas" value="sais-pas" name="choice" onclick="check()"><br>
                        <label for="sais-pass">Q1 answers</label>
                        <input type="radio" id="sais-pass" value="sais-pas" name="choice" onclick="check()"><br>
                        
                    </form>
                    
                </div>
              
                
            </div>
            <div class="next">
                <button class="next__button">نبدل السؤال</button>
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
 
 
 
  
 // if br < 2 -- $min+=20;
 
 $sql = "SELECT * FROM questions";
  
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
          myObj = <?php echo $json; ?>;
     console.log(myObj) ;
     </script>
  
     <?php
     //var_dump($resultArray);
 }
  
 
 // Close connections
 //mysqli_close($result);
 mysqli_close($con);
 ?>
 
    <script>

const headerDiv = document.querySelector('.header');
const questionDiv = document.querySelector('.questions');
const progress = document.querySelector('.questions__progress__bar');
const progressBar = document.querySelector('.questions__progress__bar__fill');
const bigTimer = document.querySelector('.questions__progress__count');
const testDiv = document.querySelector('.test');
const ques = document.querySelector('.questions__field__text');
const answer = document.getElementsByName('choice');
const timer = document.querySelector('.questions__field__area__timer__counter');
const quesImage = document.querySelector('.questions__field__img');
const demarrer = document.querySelector('.test__button__demarrer');
const form = document.querySelector('.questions__field__area__form');
const validation = document.querySelector('.questions__field__validation__button');
const next = document.querySelector('.next__button');
const score = document.querySelector('.score');


demarrer.addEventListener('click',testStart);
next.addEventListener('click',render);

let quesSeconds = 30;
let genSeconds = 1200;

let questionTimer = quesSeconds;
let generalTimer = genSeconds;




let questionPassed = [];
let reponses = [0];
let brMeca = 0;
let brLogi = 0;
let brMath = 0;
let mr = 0;


function testStart() {
    if (confirm(`ديرفبالك بلي الاجوبة الخاطئة غا يتنقصو ليك عليهم النقاط
وا ش مستاعد تبدا الاختبار ؟ `)) {
        testDiv.style.display = 'none';
	questionDiv.style.display = 'block';
	headerDiv.style.background = 'none';
	headerDiv.style.height = '10em';
	render();
	generalTimer = genSeconds;
    }
	
}





function check() {
	for (i = 0; i < answer.length; i++) {
		if (answer[i].checked) {
			if (answer[i].value == currentQuestion.BonneR) {
                reponses.push(currentQuestion.niveau*(Math.floor(questionTimer/5)+1));
                console.log(questionPassed)
                questionPassed.push(parseInt(currentQuestion.NumQ))
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
				// reponses.push(0);
                reponses.push(-(currentQuestion.niveau*(Math.floor(questionTimer/5)+1))/2);
				mr +=1;
				console.log(`mr = ${mr}`)
				render();
			}
		}
    }
    
	console.log(reponses);
	
}

function randomInt(min, max) {
	return min + Math.ceil((max - min) * Math.random());
}

function render() {
    
   
	if (brLogi < 3 && generalTimer > 800) {
        rangeMin = 50;
        rangeMax = 56;
        
	}else if(brLogi >= 3 && generalTimer > 800){
        rangeMin = 56;
        rangeMax = 62;
        
	}else if (brLogi >= 6 && generalTimer > 800) {
        rangeMin = 62;
        rangeMax = 70;
        
	}else if(brMeca <3 && generalTimer > 400){
        rangeMin = 14;
        rangeMax = 21;
        
	}else if (brMeca >= 3 && generalTimer > 400) {
        rangeMin = 21;
        rangeMax = 28;
        
	}else if(brMeca >=6 && generalTimer > 400){
        rangeMin = 28;
        rangeMax = 40;
   }else if (brMath < 3 && generalTimer >0) {
        rangeMin = 100;
        rangeMax = 107;
        
	}else if(brMath >=3 && generalTimer > 0){
        rangeMin = 107;
        rangeMax = 114;
    }else if(brMath >=6 && generalTimer > 0){
        rangeMin = 114;
        rangeMax = 126;
    }



        let counter = randomInt(rangeMin,rangeMax);
        console.log(counter)
    while (questionPassed.includes(counter)) {
        counter = randomInt(rangeMin,rangeMax);
        console.log(counter)
    }
    console.log(questionPassed)
    console.log(`this is the last counter ${counter}`)

	currentQuestion = myObj.find((result)=>{
		return result.NumQ == counter;
    })
    console.log(currentQuestion)
	ques.textContent = currentQuestion.QuestA;
	quesImage.setAttribute('src', currentQuestion.image);
	form.innerHTML = currentQuestion.choix;

	questionTimer = quesSeconds; 
}



function quesTimer() {
    if (testDiv.style.display == 'none' && questionDiv.style.display == 'block' ) {
        questionTimer -=1;
    }

    if (questionTimer >15) {
        timer.style.backgroundColor = 'green';
    }else if (questionTimer >5){
        timer.style.backgroundColor = 'orange';
    }else{
        timer.style.backgroundColor = 'red';
    }

	
	timer.textContent = questionTimer;

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

    if (generalTimer>600) {
        progress.style.borderColor = 'green';
        progressBar.style.backgroundColor = 'green';
        bigTimer.style.color = 'green';
    }else if(generalTimer>200){
        progress.style.borderColor = 'orange';
        progressBar.style.backgroundColor = 'orange';
        bigTimer.style.color = 'orange';
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
	progressBar.style.width = `${generalTimer/12}%`
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