
alert('Welcome to the letter game eh');

	var letter;

	while (!letter) {
		letter = prompt('Enter your favorite letter for some fun! :)');
	}

	for (var i = 0; i < 10; i++) {
		for (var j = 0; j <= i; j++) {
			document.write(letter);
		}

		document.write('<br>');
};