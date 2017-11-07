document.addEventListener('DOMContentLoaded', function () {
	fillTable();
});

function fillTable () {
	var request = new XMLHttpRequest();
	request.open('GET', 'https://rawgit.com/th-koeln/mi-bachelor-wba1/master/download/spielplatz-data.json');

	request.onload = function (e) {
		if (request.status >= 200 && request.status < 400) {
			// Success!
			var data = JSON.parse(request.responseText);
			var tbody = document.querySelector('[data-table-playgrounds-tbody]');
			var i = 0;
			for (var i; i < data.spielplaetze.length; i++) {
				var spielplatz = data.spielplaetze[i];
				tbody.innerHTML +=
					'<tr>' +
					'<td><img src="' + spielplatz.bild + '" alt="' + spielplatz.bildAltText + '"</td>' +
					'<td>' + spielplatz.bezeichnung + '</td>' +
					'<td>' + spielplatz.entfernung + '</td>' +
					'</tr>';
			}
		}

		 else {
			 console.log(e);
			// We reached our target server, but it returned an error
			document.querySelector('[data-error]').innerHTML = 'Es ist ein Feheler aufgetreten';

		}
	};

	request.onerror = function () {
		// There was a connection error of some sort
		document.querySelector('[data-error]').innerHTML = 'Es konnte keine Verbindung zum Server hergestellt werden';
	};

	request.send();
	
}