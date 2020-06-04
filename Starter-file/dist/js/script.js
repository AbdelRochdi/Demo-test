const questionList = [
    {
        question : `question number one`,
        correctAnswer: 'oui',
        number: 1
    },
    {
        question : `question number two`,
        correctAnswer: 'non',
        number: 2
    },
    {
        question : `question number three`,
        correctAnswer: 'oui',
        number: 3
    },
    {
        question : `question number four`,
        correctAnswer: 'non',
        number: 4
    },
    {
        question : `question number five`,
        correctAnswer: 'oui',
        number: 5
    }
    
]

const ques = document.querySelector('.questions__field__text'); 
const answer = document.getElementsByName('choice');
const pager = document.querySelectorAll('.questions__field__buttons__num');
const bigPager = document.querySelector('.questions__field__buttons');
const timer = document.querySelector(".questions__field__area__timer__counter");

bigPager.addEventListener('click',changeQuestion);

console.log(pager);
console.log(bigPager);
let reponses = [];
let counter = 1;
let questionTimer = 15;
let generalTimer = 600;

function render(){
    currentQuestion = questionList.find((result)=>{
        return result.number === counter;
    });
    if (counter <= questionList.length) {
        ques.textContent = currentQuestion.question;
    }   
}

function color(){
    pager.forEach((page,index)=>{
        if (index === counter-1) {
            page.style.backgroundColor = 'blue';
            
        }else{
            page.style.backgroundColor = 'aqua';
        }
    })
    
}

function changeQuestion(e){
    if (e.target.classList.contains('questions__field__buttons__num')) {
        pager.forEach((page,index)=>{
            if (page === e.target) {
                counter = index+1;
                questionTimer = 15;
                page.style.backgroundColor = 'blue';
                render();
            }else{
                page.style.backgroundColor = 'aqua';
            }
        })
    }
}


function check(){
    for (i = 0; i < answer.length; i++) {
        if (answer[i].checked) {
            if (answer[i].value == currentQuestion.correctAnswer) {
                reponses.splice(counter-1,1,1);
            }else{
                reponses.splice(counter-1,1,0);
            }
            if (counter < questionList.length) {
                counter+=1;
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
        questionTimer=15;
        render();
        color();
    }else if (questionTimer == 0) {
        if (counter < questionList.length) {
            counter +=1
            render();
            color();
            questionTimer=15;
        }
    } else{
        questionTimer-=1;
    }
}

timerDef();
setInterval(timerDef,1000)

render();
color();