var lastTimeID = 0;

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

	$('.participant').click(function () {
		$(this).parent().parent().find('.hidden-participant').val($(this).is(':checked') ? 1 : 0);
	});

	$('#chat-submit').click( function() {
    	sendChatText();
    	$('#chat-message').val("");
  	});
  	//startChat();
});


function startChat(){
  setInterval( function() { getChatText(); }, 2000);
}

function getChatText() {
  $.ajax({
    type: "GET",
    url: "./chat_refresh.php?lastTimeID=" + lastTimeID + "&chatId=" + $('#chat-id').val(),
    dataType: 'json'
  }).done( function( data )
  {
    var jsonData = JSON.parse(data);
    var jsonLength = jsonData.results.length;
    var html = "";
    for (var i = 0; i < jsonLength; i++) {
      var result = jsonData.results[i];
      html += '<div>(' + result.date_sent + ') <b>' + result.pseudo +'</b>: ' + result.message + '</div>';
      lastTimeID = result.id;
    }
    $('#chat-display').append(html);
  });
}


//Gets the browser specific XmlHttpRequest Object
/*function getXmlHttpRequestObject() {
	if (window.XMLHttpRequest) {
		return new XMLHttpRequest();
	} else if(window.ActiveXObject) {
		return new ActiveXObject("Microsoft.XMLHTTP");
	} else {
		document.getElementById('p_status').innerHTML = 
		'Status: Cound not create XmlHttpRequest Object.' +
		'Consider upgrading your browser.';
	}
}

function sendChatText() {
	var sendReq = getXmlHttpRequestObject();
	var chatInput = $('#chat-message').val();
  	var userId = $('#chat-uid').val();
  	var chatId = $('#chat-id').val();
	if (sendReq.readyState == 4 || sendReq.readyState == 0) {
		sendReq.open("GET", "./chat_submit.php?chattext=" + encodeURIComponent(chatInput) + "&chatId=" + chatId + "&userId=" + userId, true);
		sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		sendReq.send();
	}							
} */

function sendChatText(){
  var chatInput = $('#chat-message').val();
  var userId = $('#chat-uid').val();
  var chatId = $('#chat-id').val();
  if(chatInput != ""){
    $.ajax({
      type: "GET",
      url: "./chat_submit.php?chattext=" + encodeURIComponent(chatInput) + "&chatId=" + chatId + "&userId=" + userId,
    });
  }
}

function add_new_row() {
	if ($('.index:last').length == 0) {
		$item = "<div class='item'>";
		$item += "<input type='hidden' id='id' name='id[]' value='0' />";
		$item += "<input type='hidden' class='index' name='index[]' value='0' />";
		$item += "<div class='infos-block'>";
		$item += "<div class='my-item-name'>";
		$item += "<label>Nom : </label>";
		$item += "<input class='rounded-input long-input' name='name[]' type='text' value='' />";
		$item += "</div>";
		$item += "<div class='my-item-img'>";
		$item += "<label>Image : </label>";
		$item += "<input class='rounded-input long-input' name='image[]' type='text' value='' />";
		$item += "</div>";
		$item += "<div class='my-item-link'>";
		$item += "<label>Lien : </label>";
		$item += "<input class='rounded-input long-input' name='link[]' type='text' value='' />";
		$item += "</div>";
		$item += "</div>";
		$item += "<div class='my-item-desc'>";
		$item += "<textarea class='rounded-input' name='description[]' cols='80' rows='5'></textarea>";
		$item += "</div>";
		$item += "<div class='my-item-cost'>";
		$item += "<label>Prix :</label>";
		$item += "<input class='rounded-input' name='price[]' type='text' value='' />";
		$item += "<select class='rounded-input' name='currency[]'>";
		$item += "<option value='EUR'>€</option>";
		$item += "<option value='USD'>$</option>";
		$item += "</select>";
		$item += "</div>";
		$item += "<input type='button' class='btn btn-danger remove-btn' value='Supprimer' />";
		$item += "</div>";
		$('#list').append($item).hide().slideDown(500);
	}
	else {
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
		$('.remove-btn:last').removeClass('hidden-btn');
	}
}