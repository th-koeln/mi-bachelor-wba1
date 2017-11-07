---
titel: Javascript Advanced
kuerzel: w-jsadvanced
verantwortlich: cn,jk,fj,vs
typ: workshop
pflicht: false
termine: 2017-11-09 14:00|0.501|http://bit.ly/2z8veMK|vs, 2017-11-09 14:00|0.502|http://bit.ly/2A7v6wN|fj, 2017-11-16 14:30|0.502|
empfohlene-voraussetzungen: t-tooling, w-htmlbasics, w-htmlbadvanced, w-jsbasics
published: true
dauer: 240
raum: 3.102

info: Promises; Functions; Callbacks; AJAX; JSON; APIs
--- 

## Über den Workshop

### An wen richtet sich der Workshop?

Der Workshop richtig sich an Teilnehmer die sicher im Umgang mit ihren Web Development Tools sind. Zudem sollten diese sauberes HTML Markup schreiben können und mit der Syntax von JavaScript und folgenden Konzepten vertraut sein:

* Variablen
* Arrays
* Bedingungen
* Schleifen
* Funktionen
* Zugriff und Manipulation des DOM

### Worum geht es?

Kennenlernen von Events und Event-Handling, Aufbau und Verarbeitung von JSON-Objekten, Kennenlernen des Konzeptes „AJAX”. Erstellen von AJAX-Requests und deren Verarbeitung über Callbacks und Promises.

### Was muss ich mitbringen?

* Eigener Rechner mit Browser (inkl. Web Development Tools, z.B. Chrome, Safari), Code Editor, Internetzugang z.B. via VPN oder Eduroam.
* Sauberes semantisches HTML Markup aus den HTML Workshops

### Material
- [JavaScript Language Fundamentals - Folien](../../download/Chapter08-JavaScript1LanguageFundamentals.pdf)
- [plain JS - Vanilla JavaScript for building powerful web applications](https://plainjs.com)
- [You might not need jQuery](http://youmightnotneedjquery.com)
- [Airbnb JavaScript Style Guide](http://airbnb.io/javascript/)
- [JavaScript - Mozilla Developer Network](https://developer.mozilla.org/de/docs/Web/JavaScript)

## Übungen

Wir werden zunächst die Übungen 3 bis 6 aus dem Javascript Basics Workshop aufarbeiten und darauf dann folgende Übungen aufbauen.

### Übung 1

* Erweitern Sie die Tabelle mit den Spielplätzen um eine weitere Spalte. 
* Erzeugen Sie via JavaScript in dieser Spalte pro Reihe eine Checkbox. 
* Sie können dazu die bereits bestehenden Funktionen erweitern.
* Fügen Sie im Fuß der Tabelle, in die letzte Spalte, eine Schalftfläche mit der Bezeichnung "Markierte Spielplätze löschen" ein.

### Übung 2

* Erstellen Sie einen Event Handler, der bei einem Mausklick auf die Schaltflächen "Markierte Spielplätze löschen", alle Tabellenzeilen löscht, in der die Checkbox selektiert wurde und die Anzeige mit der Anzahl der Spielplätze aktualisiert. 
* Lösen Sie die Aufgabe einmal mit einer anonymen Funktion und einmal mit einer externe Funktion als Event Handler.

### Übung 3

* Öffnen Sie ihren Projektordner aus dem Workshop „HTML advanced”, oder laden Sie sich diesen [Projekt Ordner](../../download/html-advanced-material.zip) herunter.
* Erstellen Sie in diesem Ordner eine JavaScript-Datei und binden Sie diese im Head der `index.html` ein.

### Übung 4

* Erzeugen Sie in der JavaScript-Datei eine Funktion mit der Bezeichnung `fillTable`. 
* In dieser Funktion soll nun über einen AJAX-Request folgende Ressource abgerufen werden: [Platzhalter].
* Beim erfolgreichen Absetzen des Request soll über einen Callback die Tabelle „Spielplätze in der Nähe”, auf Basis der Response aus dem AJAX-Request, befüllt werden.
* Falls der AJAX-Request fehlschlägt, soll eine Fehlermeldung über der Tabelle ausgegeben werden.
* Die Funktion soll nun aufgerufen werden, wenn das DOM in der HTML-Datei fertig initialisert ist.

### Übung 5
* Lösen Sie die Übung 5 mit Hilfe von Promises