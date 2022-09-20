$(function() {
    alert($("img").attr('alt'));

    $("img").each(function(){
        $(this).attr("alt", $(this).attr("src"))
    })
});