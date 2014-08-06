// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();


// remove &nbsp; from download btns
$('span.btn_right').remove();


/* =============== Form Highlighting ========== */

var supportFormSection = $('#support-form-section');
var loginFormSection = $('#login-form-section');

// login section
$('#documents-login-btn').on('click', function(e) {
	e.preventDefault();
	$('body').animate({scrollTop: loginFormSection.offset().top}, 'slow');
	supportFormSection.removeClass('form-section-highlight');
	loginFormSection.addClass('form-section-highlight');
});

// support section
$('#documents-support-btn').on('click', function(e) {
	e.preventDefault();
	$('body').animate({scrollTop: supportFormSection.offset().top}, 'slow');
	loginFormSection.removeClass('form-section-highlight');
	supportFormSection.addClass('form-section-highlight');
});


$(document).on('click', '#support-form-section', function() {
	loginFormSection.removeClass('form-section-highlight');
	supportFormSection.addClass('form-section-highlight');
});

$(document).on('click', '#login-form-section', function() {
	supportFormSection.removeClass('form-section-highlight');
	loginFormSection.addClass('form-section-highlight');
});