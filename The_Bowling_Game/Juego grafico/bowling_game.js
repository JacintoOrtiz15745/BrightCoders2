var cont = 0, rounds = 1, first = 1, second = 2, spa = 0, str = 0;
var spare = false;
var totalscore  = 0;

function normal(){

    throw1 = document.getElementById("1_" + first).value;
    throw2 = document.getElementById("1_" + second).value;
    cont += parseInt(throw1) + parseInt(throw2);
    totalscore = totalscore + cont;

    document.getElementById(rounds).innerHTML = cont;
    document.getElementById('t_score').innerHTML = totalscore;

    other();

    spare();

    strike();
}

function other(){
  if(throw1 < 10 && throw2 < 10){
    first = first + 2;
    second = second + 2;
    rounds = rounds + 1;
    throw1 = 0;
    throw2 = 0;
    cont = 0;
  }
}

function spare(){
  if (parseInt(throw1) + parseInt(throw2) == 10) {
    first = first + 2;
    second = second + 2;
    rounds = rounds + 1;
    throw1 = 0;
    throw2 = 0;
    cont = 0;
    spare = true;
  }
}

function strike(){
  if(throw1 == 10 || throw2 == 10){
    first = first + 2;
    second = second + 2;
    rounds = rounds + 1;
    cont = 0;

  }
}
