// Dyanmically update skill icon based on class
$(document).ready(function(){
	$('.skill-icon').each( function(){
		var skillText = $(this).attr('class').split(' ').pop();
		//skillText = skillText.toLowerCase();
		//skillText = skillText.replace(/ /g,"-");
		skillText = skillText.replace("'","-");
		if (skillText != "skill-icon") {
			var skillimg = "url('/img/skill/" + skillText + ".png')";
			$(this).css('background-image', skillimg);
		}
	});
});