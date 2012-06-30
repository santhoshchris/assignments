$(document).ready(function () {
	var userAvailable = $('.username-available');
	var emailAvailable = $('.email-available');
	var passwordReqs = 0;

	$("#username").on('change', function (ev) {
		var username = $(this).val();

		userAvailable.attr('status', 'unchecked');

		if(username.length >= 5 && username.length <=12 ) {
		var ajax = $.post('check-username.php', {
		'username' : username
			});

			ajax.done(function (data) {
				if(data == 'available') {
					userAvailable.attr('status', 'available').html('available');
				} else {
					userAvailable.attr('status', 'unavailable').html('Sorry Username unavailable :(');
				}
		});

		} else {
			userAvailable.attr('status', 'unavailable').html('Sorry Username unavailable :(');

		}

	});

	$("#email").on('change', function (ev) {
		var email = $(this).val();

		emailAvailable.attr('status', 'unchecked');

		if(email.length >= 5 && email.length <=30 ) {
			var ajax = $.post('check-email.php', {
				'email' : email

			});

			ajax.done(function (data) {
				if(data == 'available') {
					emailAvailable.attr('status', 'available').html('available');
				} else {
					emailAvailable.attr('status', 'unavailable').html('Sorry this email is taken :(');
				}
		});

		} else {
			emailAvailable.attr('status', 'unavailable').html('Sorry this email is taken :(');

		}

	});


	$("#password").on('keyup', function (ev) {
		var password = $(this).val();

		passwordReqs = 0;

		if(password.length >5) {
			passwordReqs++;
			$('.pass-length').attr('data-state', 'achieved');

		}

		if(password.match(/[a-z]/)) {
			passwordReqs++;
			$('.pass-lower').attr('data-state', 'achieved');

		}
		if(password.match(/[A-Z]/)) {
			passwordReqs++;
			$('.pass-upper').attr('data-state', 'achieved');

		}
		if(password.match(/\d/)) {
			passwordReqs++;
			$('.pass-num').attr('data-state', 'achieved');

		}
		if(password.match(/[^a-zA-Z0-9]/)) {
			passwordReqs++;
			$('.pass-symbol').attr('data-state', 'achieved');

		}

	});

	$('.country').on('click', function() {
		var country = $(this);

		if(country.val() == "canada") {
			$('#address').load('country.html #CanadaProvince');
			$('#IndiaStates').toggleClass('hidden');
		}
		if(country.val() == "india") {
			$('#address').load('country.html #IndiaStates');
			$('#CanadaProvince').toggleClass('hidden');
		}

	});

	$('form').on('submit', function (ev) {
		if(userAvailable.attr('status') =="unchecked"|| userAvailable.attr('status') == "unavailable"|| passwordReq < 5 ) {
			ev.preventDefault();
		}

	});

});