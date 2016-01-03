$(document).ready(function() {

	$(".scrollDown").click(function() {
    $('html,body').animate({
        scrollTop: $("#sub-header").offset().top},
        'slow');
});

	$("#sub-header p").click(function(){
        $("#journey-form").slideToggle("slow");
    });

    $(".square").hover(function () {
         $(this).find(".arrow").toggle();
    })
})