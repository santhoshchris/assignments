jQuery(function ($) {
	

var $circle = $('#circle')
		, $object = $('#object')
		, $color = $('#color')
	;


$('#show-hide').on('click', function (e) {
		$circle.toggle();
	});

	$('form').on('submit', function (e) {
		var color = $color.val();

		e.preventDefault();

		if (color) {
			$circle.css($object.val(), color);
		}
	});
	
	
	
});
