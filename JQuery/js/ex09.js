$(function (){
    alert("Formatage");

   $("td").addClass("size"); // add a new class to an element that already has a class

});

$(function () {
    alert("Inversion des cellules");
    $("td").toggleClass("vert", "rouge");
});
$(function (){
    alert("Ré-inversion des cellules");
    $("td").toggleClass("vert", "rouge");

})

$(function () {
    alert("Suppression des classes \"couleur\"");
  $("td").removeClass("vert").removeClass("rouge");
})