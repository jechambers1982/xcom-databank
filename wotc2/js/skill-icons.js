// Dyanmically update skill icon based on class
$(document).ready(function(){
	$('.skill').each( function(){
		var skillText = $(this).text();
		skillText = skillText.toLowerCase();
		skillText = skillText.replace(/ /g,"-");
		var skillimg = "url('/img/icons/skills/" + skillText + ".png')";
		$(this).css('background-image', skillimg);
	});
});