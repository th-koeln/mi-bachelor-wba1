---
titel: Javascript Basics
kuerzel: w-jsbasics
verantwortlich: cn,jk,fj,vs
typ: workshop
pflicht: false
termine: 2017-11-02 14:00|0.501|http://bit.ly/2h1jXFS|vs,2017-11-02 14:00|0.502|http://bit.ly/2z2PSjS|fj, 2017-11-09 09:00|3.217|http://bit.ly/2zcSISL|vs
empfohlene-voraussetzungen: t-tooling, w-htmlbasics, w-htmlbadvanced
published: true
dauer: 240
raum: 3.102

info: What is JavaScript; JavaScript Design; Using JavaScript; Syntax; Objects; DOM; Events
--- 

## Über den Workshop

### An wen richtet sich der Workshop?
Anfänger im Bereich Web-Technologien.

### Worum geht es?
In diesem Workshop werden die Grundlagen zu JavaScript in Zusammenhang mit Web Development vermittelt. Zunächst werden wir über ein wenig Theorie und Hintergrund zu JavaScript sprechen, uns dann ein wenig die Syntax und die Verwendung im Website-Kontext ansehen um danach in praktische Übungen einzusteigen.

### Was muss ich mitbringen?

Voraussetzungen sind mindestens Grundkenntnisse in folgenden Bereichen:
* HTML und DOM (Workshop HTML Basics)
* Algorithmen und Programmierung
* Umgang mit benötigten Tools (Workshop Tooling)

Folgendes muss zum Workshop mitgebracht werden:
* Eigener Rechner mit Browser (inkl. Web Development Tools, z.B. Chrome, Safari), Code Editor, Internetzugang (z.B. VPN, eduroam)

### Material
- [Arbeitspaket](../../download/js-basics-material.zip)
- [JavaScript Language Fundamentals - Folien](../../download/Chapter08-JavaScript1LanguageFundamentals.pdf)
- [Using Javascript - Folien](../../download/Chapter09-JavaScript2UsingJavaScript.pdf)
- [JavaScript Guide bei MDN](https://developer.mozilla.org/de/docs/Web/JavaScript/Guide)
- [W3: JavaScript and HTML DOM Reference - Dokumentation](https://www.w3schools.com/jsref/default.asp)

## Übungen

### Übung 1
Laden Sie die Dateien aus dem Arbeitspaket herunter und öffnen Sie die Datei *uebung-1-2.htm* im Editor und im Browser. Öffnen Sie bitte auch die Web Development Tools Ihres Browsers.

* Lassen Sie sich den Inhalte von *aktuelleStadt* und *prefix* ausgeben. Lassen Sie die Strings in einer Zeile ausgeben.
* Lassen Sie sich mit Hilfe einer Schleife jeden Wert des Arrays *staedte* ins Browserfenster ausgeben.
* Iterieren Sie durch das Objekt *spielplaetze* und lassen Sie für jeden Spielplatz den Namen, die Bewertung und die Spielgeräte anzeigen.

### Übung 2

* Erzeugen Sie eine Funktion, übergeben Sie das Objekt *spielplaetze* und lassen Sie wieder für jeden Spielplatz den Namen, die Bewertung und die Spielgeräte anzeigen.
* Erweitern Sie Ihre Funktion dahingehend, dass als zweiter Parameter *aktuelleStadt* übergeben wird und dass die Funktion nur die Spielplätze ausgibt, bei denen *aktuelleStadt* mit der Stadt des Spielplatzes übereinstimmt.

### Übung 3

Öffnen Sie die Datei `index.html` im Browser und die Web Development Tools Ihres Browser. Navigieren Sie zur Konsole. Erreichen Sie nun mit JavaScript-Befehlen folgende Ziele und dokumentieren Sie Ihre Eingaben:
* Ändern Sie den Titel der Seite in *„You have been hacked!“*
* Ändern Sie die erste Überschrift im Inhalt der Seite auf *„You have been hacked!“*. Es kann sinnvoll sein, mehrere Befehle und die Verwendung von Variablen dafür auszunutzen.
* Berechnen Sie die Summe aus den Zeichen der jetzigen Überschrift mit 42 und schreiben Sie das Ergebnis ans Ende des Inhalts der Seite. 
* Definieren Sie eine Funktion `tableRowCount` die einen Dialog mit der aktuellen Anzahl an Tabellenzeilen ausgibt und rufen Sie diese auf.

### Übung 4

* Definieren Sie eine Funktion `readInputs` die ein JavaScript-Objekt zurückgibt, welches die Eingaben des Formulars enthält. Zahlenwerte wie die Größe sollen als Zahlen repräsentiert werden und müssen daher geparst werden.
* Definieren Sie dann eine Funktion `resetForm`, die das Formular zurücksetzt (Hierbei gibt es mehr als eine Lösung - schauen Sie dazu in die JavaScript-Dokumentation).

Verändern Sie bei dieser Aufgabe nicht das HTML, sondern passen Sie das Dokument nur innerhalb der `script`-Tags an.

### Übung 5

* Lagern Sie Ihr aktuelles Skript in eine externe `.js`-Datei aus und prüfen Sie, ob Ihr Skript weiterhin funktioniert.
* Definieren Sie nun eine Funktion `insertIntoTable(object)`, die den Inhalt der Formularfelder (in Form des erzeugten Objekts) als neue Zeile in die vorhandene, aber leere Tabelle einfügt. Ersetzen Sie den Wert des `select`-Felds (`playground-type`) eines Spielplatzes beim Einfügen mit einem „lesbaren“ String (hierfür gibt es einen langen und einen sehr kurzen Weg).
* Aktualisieren Sie dabei auch die Anzeige der Anzahl der angezeigten Spielplätze im Tabellen-Footer.

### Übung 6

* Erzeugen Sie einen Eventlistener, so dass bei einem Mausklick auf die Schalfläche „Spielplatz eintragen”, die Werte aus dem Formular in eine neue Reihe in der Tabelle eingetragen werden und das Formular zurückgesetzt wird. Verwenden Sie dazu ihre bereits definierten Funktionen.
* Stellen Sie sicher, dass das DOM geladen ist, wenn Sie den Eventlistener hinzufügen. Ändern Sie bitte dazu nicht das Markup, sondern nur ihre Skriptdatei.
