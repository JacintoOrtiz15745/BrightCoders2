var rounds = 1, tiro1 = 0, tiro2 = 0, extra = 0;
var cont = 0, first = 1, second = 2, third = 21;
var totalscore = 0, controlador = 0;
var spare = false, strike = false, all = false;
function addTable(){

  if(rounds <= 10){
    tiro1 = document.getElementById("1_" + first).value;
    tiro2 = document.getElementById("1_" + second).value;
    cont = parseInt(tiro1) + parseInt(tiro2);


    if(cont == 10){
      if(tiro1 == 10 && tiro2 == 0 || tiro2 == 10 && tiro1 == 0){
        alert('STRIKE')
        strike = true;
      }else if(cont == 10){
        alert('SPARE')
        spare = true;
      }
    }

    if(strike == true && all == true){
      aler('STRIKE')
      cont += parseInt(tiro1) + parseInt(tiro2);
      strike = false;
    }



    if(spare == true && all == true){
        alert('SPARE')
        if(tiro1 == 0 && tiro2 > 0){
          cont += parseInt(tiro2);
        }
        if(tiro2 == 0 && tiro1 > 0){
          cont += parseInt(tiro1);
        }
        else{
          cont += parseInt(tiro1);
        }
        spare = false;
    }

    if(rounds == 11 && spare == true){

    }

    if(spare == true || strike == true){
      rest();
    }

    if(spare == false || spare == false){
      rest2();
    }

  }


  function rest(){
    first = first + 2;
    second = second + 2;
    totalscore = totalscore + cont;
    rounds = rounds + 1;
    if(rounds < 11){
      document.getElementById('newTable').insertRow(-1).innerHTML = '<tr><th>' + rounds + '</th><th><input class="input is-rounded is-link" type="number" placeholder="Your score here" id="1_'+ first +'"></th><th><input class="input is-rounded is-link" type="number" placeholder="Your score here" id="1_'+ second +'"></th><th></th><th></th><th></th><th>' + cont + '</th></tr>';
    }else{
      document.getElementById('newTable').insertRow(-1).innerHTML = '<tr><th>Extra</th><th><input class="input is-rounded is-link" type="number" placeholder="Your score here" id="1_'+ first +'"></th><th><input class="input is-rounded is-link" type="number" placeholder="Your score here" id="1_'+ second +'"></th><th></th><th></th><th></th><th>' + cont + '</th></tr>';
      document.getElementById('newTable').insertRow(-1).innerHTML = '<tr><th></th><th><input class="input is-rounded is-link" type="number" placeholder="Your score here" id="1_'+ third +'"></th></tr>'
    }
    document.getElementById('total_score').innerHTML = totalscore;
    all = true;
    cont = 0;
  }

  function rest2(){
    first = first + 2;
    second = second + 2;
    totalscore = totalscore + cont;
    rounds = rounds + 1;
    if(rounds < 11){
      document.getElementById('newTable').insertRow(-1).innerHTML = '<tr><th>' + rounds + '</th><th><input class="input is-rounded is-link" type="number" placeholder="Your score here" id="1_'+ first +'"></th><th><input class="input is-rounded is-link" type="number" placeholder="Your score here" id="1_'+ second +'"></th><th></th><th></th><th></th><th>' + cont + '</th></tr>';
    }else{
      document.getElementById('newTable').insertRow(-1).innerHTML = '<tr><th>Extra</th><th><input class="input is-rounded is-link" type="number" placeholder="Your score here" id="1_'+ first +'"></th><th><input class="input is-rounded is-link" type="number" placeholder="Your score here" id="1_'+ second +'"></th><th></th><th></th><th></th><th>' + cont + '</th></tr>';
      document.getElementById('newTable').insertRow(-1).innerHTML = '<tr><th></th><th><input class="input is-rounded is-link" type="number" placeholder="Your score here" id="1_'+ third +'"></th></tr>'
    }
    document.getElementById('total_score').innerHTML = totalscore;
    all = false;
    cont = 0;
  }
}
