var todos = document.getElementById('todolist');
var item = document.getElementById('item');

document.getElementsByTagName('form')[0].addEventListener('submit', function (e) {
	e.preventDefault();

	if (item.value != '') {
		var newItem = document.createElement('li');

		newItem.innerHTML = item.value;
		todos.appendChild(newItem);
	}

	item.value = '';
}, false);

todos.addEventListener('click', function (e) {
	if (e.target.className == 'strikedout') {
		e.target.className = '';
	} else {
		e.target.className = 'strikedout';
	}
}, false);
