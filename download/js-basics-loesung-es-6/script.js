// Uebung 3

window.onload = () => {
	document.querySelector('form#playground-form').onsubmit = (event) => {
		event.preventDefault();
		insertValuesIntoTable(readInputs());
		resetForm();
	}
};

function insertValuesIntoTable(object) {
	const tableBody = document.querySelector('table#playground-table tbody');
	var typeString;

	/*
	// Klassisch (Problem: hier werden schneller mal nicht alle Fälle abgedeckt):
	switch(object.type) {
		case 'playground-type-normal':
			typeString = "Normal";
			break
		case 'playground-type-slide':
			typeString = "Mit Rutsche";
			break
		case 'playground-type-sandbox':
			typeString = "Mit Sandkasten";
			break
	}
	*/

	// Cool (ggf. zeigen, wenn die Studenten hauptsächlich die obere Lösung verwendet haben):
	typeString = document.querySelector(`select option[value="${object.type}"]`).innerText;

	tableBody.innerHTML += `<tr>
			<td>${object.name}</td>
			<td>${typeString}</td>
			<td>${object.size}</td>
			<td>${object.location}</td>
		</tr>`;

	updateTableCount();
}

function updateTableCount() {
	const countSpan = document.querySelector('span#playground-count');
	countSpan.innerText = document.querySelectorAll('tbody tr').length;
}

// Uebung 2

function readInputs() {
	const nameInput = document.querySelector('input[name="playground-name"]');
	const typeSelect = document.querySelector('select[name="playground-type"]');
	const sizeInput = document.querySelector('input[name="playground-size"]');
	const locationInput = document.querySelector('input[name="playground-location"]');

	return {
		name: nameInput.value,
		type: typeSelect.value,
		size: parseFloat(sizeInput.value) || 0,
		location: locationInput.value
	}
}

function resetForm() {
	// Hier ist der offensichtliche weg alle Felder manuell zurückzusetzen, aber... 
	document.getElementById('playground-form').reset();
}