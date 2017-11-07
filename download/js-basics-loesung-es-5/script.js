
//Wir horchen darauf, ob das DOM vollständig intialisiert ist
document.addEventListener('DOMContentLoaded', function () {
	
	/* Übung 3
	 ******************************/
	document.title = "You have been hacked!";

	document.querySelector('title').innerHTML = "You have been hacked!";
	document.getElementsByTagName('title')[0].innerHTML = "You have been hacked!";

	var headline = document.querySelector('h1');
	headline.innerHTML = "You have been hacked!";

	var p = document.createElement('p');
	p.innerHTML = headline.innerHTML.length + 42;
	document.body.appendChild(p);

	/* Übung 6
	 ******************************/
	var form = document.querySelector('#playground-form');
	form.addEventListener('submit', function(e) {
		
		//prevent default action
		e.preventDefault();
		
		//Werte aus Formular einlesen
		var spielplatz = readInputs();
		
		//Tabelle mit Werten aus Formular füllen
		insertIntoTable(spielplatz);
		
		//Formular zurücksetzen
		resetForm();
	});
});

/* Übung 3
 ******************************/
function tableRowCount() {
	var rows = document.querySelectorAll('#playground-table tbody tr');
	//alert(rows.length);
	return rows.length;
}

/* Übung 4
 ******************************/
function readInputs() {

	//Form selektieren
	var form = document.getElementById('playground-form');

	//leeres Objekt erzeugen
	var spielplatz = {};

	//Objekt füllen
	spielplatz.name = form.querySelector('#playground-name').value;

	//Select-Element selektieren
	var selectBox = form.querySelector('#playground-type');

	//Textnode aus des ausgewählten Option-Elements auslesen
	var selectBoxValue = selectBox.options[selectBox.selectedIndex].innerHTML;

	//Objekt füllen
	spielplatz.type    = selectBoxValue;
	spielplatz.groesse = parseInt(form.querySelector('#playground-size').value);
	spielplatz.ort     = form.querySelector('#playground-location').value;

	return spielplatz;
}


function resetForm () {

	//Formular zurücksetzen
	document.getElementById('playground-form').reset();
}

/* Übung 5
 ******************************/
function insertIntoTable(spielplatz) {

	//Wurde der Funktion ein Objekt übergeben?
	if (!spielplatz) {
		return false;
	}

	//tbody mit werten aus dem Objekt füllen
	tableBody = document.querySelector('#playground-table tbody');
	tableBody.innerHTML += '<td>' +spielplatz.name + '</td>'
						 + '<td>' + spielplatz.type +'</td>' 
						 + '<td>' +spielplatz.groesse + '</td>' 
						 + '<td>' + spielplatz.ort + '</td>';
	
	//Zähler "Anzahl Spielplätze" erhöhen
	document.querySelector('#playground-count').innerHTML = tableRowCount();
}





