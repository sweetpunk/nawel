$(document).ready(function() {
	$('.item-check').change(function() {
		var ckID = $(this).attr('id');
		if ($(this).is(':checked')) {
			$('[name=' + ckID + ']').val('"' + sessUID + '"');
		}
		else {
			$('[name=' + ckID + ']').val('');
		}
	});

	$('.header-item-check').css('width', $('.item-check').css('width'));
	$('.header-item-name').css('width', $('.item-name').css('width'));
	$('.header-item-img').css('width', $('.item-img').css('width'));
	$('.header-item-desc').css('width', $('.item-desc').css('width'));
	$('.header-item-cost').css('width', $('.item-cost').css('width'));

	$('#validation-form').click(function() {
		var isValid = true;
		if ($('#login').val() == '') {
			$('#login').css('border', '1px solid red');
			isValid = false;
		}
		if ($('#pwd').val() != $('#confirmation').val()) {
			$('#pwd').css('border', '1px solid red');
			$('#confirmation').css('border', '1px solid red');
			isValid = false;
		}
		if (isValid)
		{
			$('#submit').click();
		}
	});
});