$(document).ready(function() {
	function sendSubForm(){

		var buttonSubmit = $('#js-ow-subscribe-submit'),
				emailInput = $('#js-ow-subscribe-email'),
				hiddenInput = $("#js-ow-subscribe-name");

		var data = {};
		data[emailInput.attr("name")] = $.trim(emailInput.val());
		data[hiddenInput.attr("name")] = $.trim(hiddenInput.val());

		var successBlock = $('#js-ow-subscribe-success'),
				errorBlock = $('#js-ow-subscribe-error'),
				hideBlock = $('.js-ow-subscribe-success-hide','#js-ow-subscribe-block');

		errorBlock.hide();
		emailInput.removeClass("error");
		successBlock.hide();
		buttonSubmit.addClass("adding")
				.attr("disabled","disabled");

		$.ajax({
			data: data,
			url: '/bitrix/components/oneway/subscribe.new/ajax.php',
			type: "POST",
			dataType: "json",
			success: function(result){
				buttonSubmit.removeClass("adding")
						.removeAttr("disabled");

				if (result.status == 'error') {
					errorBlock.html(result.message).show();
					emailInput.addClass("error");
				} else {
					successBlock.show().addClass("show");//.height($('#js-ow-subscribe-block').height());
					//hideBlock.hide();
				}
			},
			error: function(result){
				buttonSubmit.removeClass("adding")
						.removeAttr("disabled");
				errorBlock.html("Сервис подписки временно недоступен").show();
			}
		});
	};


	$('#js-ow-subscribe-block').find("form").validate({
		errorPlacement: function(error, element) {
			error.appendTo( element.siblings(".js-field-error") );
			element.closest(".js-field-block").addClass("error");
		},
		submitHandler: function(form) {
			sendSubForm();
		}
	});
});