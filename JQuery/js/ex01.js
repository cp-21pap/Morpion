// On attends que le document soit charger et ensuite faire la function
$(function() {
    alert("Test_Ex01");
    $("#texte").html("Ceci est du texte rajouté en JQuery")
    $("#title").html("Ceci est un titre rajouté en JQuery")
    $("#liste_1").html("liste 1")
    $("#liste_2").html("liste 2")

    $("li").length

    $("#nb_li").html("Il y a " + $("ul li").length + " elements li dans la page")
    $("li:even").css("background-color", "red")
});