$(document).ready(function() {
	$('#spoil h4').each(function() {
        var state = false; // state = not clicked
        var answer = $(this).next('div').slideUp(); // at first slide answers up
		$(this).click(function() {
			state = !state;
			answer.slideToggle(state);
			$(this).toggleClass('active',state);
		});
	});
});
