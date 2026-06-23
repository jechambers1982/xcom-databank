// Dyanmically update skill icon based on class
$(document).ready(function(){
	$('.skill').each( function(){
		var skillText = $(this).text();
		skillText = skillText.toLowerCase();
		skillText = skillText.replace(/ /g,"-");
		skillText = skillText.replace("'","");
		var skillimg = "url('/img/skill/" + skillText + ".png')";
		$(this).css('background-image', skillimg);
	});
});