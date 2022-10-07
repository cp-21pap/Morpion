var turn = true; //Initialisation de la varible turn qui indique à qui est le tour
var move = 1; //Initialisation de la variable move qui retourne le nombre du tour
// Ajout de Cercle
$(function (){
   $("td").click(function (){

       if(!$(this).hasClass("symbole_0") && !$(this).hasClass("symbole_1")){ //Check quel symbole posede la case
           $(this).addClass(("symbole_") + ((turn) ? "1" : "0")) //Si elle est vide on rajoute le symbole 1 ou 0 depended de turn
           turn =! turn // Inverser la valeur de bool
       }
       move++;
            if (findWinner() == ("symbole_1")) { //Test si la case a le tag symbole_1
                $('body').append('<div class="winner"><span>Winner :</span> X</div>'); //Ajout du texte qui retourne le Winner X
                $('body').append('<button onclick="location.reload()">Play Again</button>'); //Pop in du bouton qui restart la game
                $('.winner').css('background-color', '#00D8FF');//Initialise la couleur du texte Winner X
                $('button').css('color', '#00D8FF'); //Initialise la couleur du bouton
            }
            else if (findWinner() == ("symbole_0")) { //Test si la case a le tag symbole_0
                $('body').append('<div class="winner"><span>Winner :</span> O</div>');//Ajout du texte qui retourne le Winner 0
                $('body').append('<button class="glow-on-hover" type="button" onclick="location.reload()">Play Again</button>'); //Pop in du bouton qui restart la game
                $('.winner').css('background-color', '#00D8FF');//Initialiser la couleur du texte Winner 0
                $('button').css('color', '#00D8FF'); //Initialiser la couleur du bouton
            }
   })
});

//Création du tableau for check who is the winner
function findWinner() {
    cs1 = $("table tr:nth-child(1) td:nth-child(1)").attr('class');
    cs2 = $("table tr:nth-child(1) td:nth-child(2)").attr('class');
    cs3 = $("table tr:nth-child(1) td:nth-child(3)").attr('class');
    cs4 = $("table tr:nth-child(2) td:nth-child(1)").attr('class');
    cs5 = $("table tr:nth-child(2) td:nth-child(2)").attr('class');
    cs6 = $("table tr:nth-child(2) td:nth-child(3)").attr('class');
    cs7 = $("table tr:nth-child(3) td:nth-child(1)").attr('class');
    cs8 = $("table tr:nth-child(3) td:nth-child(2)").attr('class');
    cs9 = $("table tr:nth-child(3) td:nth-child(3)").attr('class');

    //check rows
    if((cs1 == cs2) && (cs2 == cs3)){
        console.log(cs3);
        return cs3;
    } else if ((cs4 == cs5) && (cs5 == cs6)){
        return cs6;
    }else if ((cs7 == cs8) && (cs8 == cs9)){
        return cs9;
    }

    //check columns
    else if((cs1 == cs4) && (cs4 == cs7)){
        return cs7;
    }else if((cs2 == cs5) && (cs5 == cs8)) {
        return cs8;
    }else if((cs3 == cs6) && (cs6 == cs9)) {
        return  cs9;
    }
    //check diagonals
    else if ((cs1 == cs5) && (cs5 == cs9)){
        return cs9;
    }else if ((cs3 == cs5) && (cs5 == cs7)) {
        return cs7;
    }

    //no winner
    return -1;
}

