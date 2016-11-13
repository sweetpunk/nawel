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

	$('#download').click(function() {
		window.location.replace("../files/" + $("#list_uid").val() + "/" + $("#file").val());
	});

	$('#back').click(function() {
		window.location.replace("home.php");
	});

	$('.nav li').click(function() {
		$('.nav li').removeClass('active');
		$(this).addClass('active');
	})

	$('#add').click(add_new_row);

	if ($('.index').length > 0) {
		for (var i = 0; i < $('.index').length; i++) {
			$('.index:nth('+i+')').val(i);
		}
	}

	$('.remove-btn').click(function() {
		$(this).parent().slideUp(500, function() {$(this).remove()});
	});
});

function add_new_row() {
	var index = parseInt($('.index:last').val());
	$('.item:last').clone(true).insertAfter('.item:last').hide().slideDown(500);
	$('.item:last input').each(function() {
		if ($(this).val() != 'Supprimer') {
			$(this).val('');
		}
	});
	$('.item:last textarea').each(function() {
		$(this).val('');
	});
	$('.item #id:last').val('0');
	$('.index:last').val(++index);
}