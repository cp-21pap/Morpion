var turn = true;
var move = 1;
// Ajout de Cercle
$(function (){
   $("td").click(function (){

       if(!$(this).hasClass("symbole_0") && !$(this).hasClass("symbole_1")){
           $(this).addClass(("symbole_") + ((turn) ? "0" : "1"))
           turn =! turn // Inverser la valeur de bool
       }

       move++;
   })
});

function findWinner() {
    cs1 = $("table tr:nth-child(1) td:nth-child(1)").text();
    cs2 = $("table tr:nth-child(1) td:nth-child(2)").text();
    cs3 = $("table tr:nth-child(1) td:nth-child(3)").text();
    cs4 = $("table tr:nth-child(2) td:nth-child(1)").text();
    cs5 = $("table tr:nth-child(2) td:nth-child(2)").text();
    cs6 = $("table tr:nth-child(2) td:nth-child(3)").text();
    cs7 = $("table tr:nth-child(3) td:nth-child(1)").text();
    cs8 = $("table tr:nth-child(3) td:nth-child(2)").text();
    cs9 = $("table tr:nth-child(3) td:nth-child(3)").text();

    //check rows
    if((cs1 == cs2) && (cs2 == cs3)){
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
        return  sp9;
    }
    //check diagonals
    else if ((cs1 == cs5) && (cs5 == cs9)){
        return cs9;
    }else if ((cs3 == cs5) && (cs5 == cs7)) {
        return cs7;
    }

}

