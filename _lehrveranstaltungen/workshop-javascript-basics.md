---
titel: Javascript Basics
kuerzel: w-jsbasics
verantwortlich: cn,jk,fj,vs
typ: workshop
pflicht: false
termine: 2017-11-02 14:00|0.501|http://bit.ly/2h1jXFS,2017-11-02 14:00|0.502|http://bit.ly/2z2PSjS
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
- [Arbeitspaket (Link folgt)](../../download/js-basics-material.zip)
- [JavaScript Language Fundamentals - Folien](../../download/Chapter08-JavaScript1LanguageFundamentals.pdf)
- [W3: JavaScript and HTML DOM Reference - Dokumentation](https://www.w3schools.com/jsref/default.asp)

## Übungen

### Übung 1

Laden Sie die Dateien aus dem Arbeitspaket auf die ADVM1 in Ihren Unterordner `/public_html/jsbasics/`. Öffnen Sie die Seite im Browser und danach die Web Development Tools Ihres Browser. Navigieren Sie zur Konsole dieser. Erreichen Sie nun mit JavaScript-Befehlen folgende Ziele und dokumentieren Sie Ihre Eingaben:
* Ändern Sie den Titel der Seite in *„You have been hacked!“*
* Ändern Sie die erste Überschrift im Inhalt der Seite auf *„You have been hacked!“*. Es kann sinnvoll sein, mehrere Befehle und die Verwendung von Variablen dafür auszunutzen.
* Berechnen Sie die Summe aus den Zeichen der jetzigen Überschrift mit 42 und schreiben Sie das Ergebnis ans Ende des Inhalts der Seite. 
* Definieren Sie eine Funktion `tableRowCount` die einen Dialog mit der aktuellen Anzahl an Tabellenzeilen ausgibt und rufen Sie diese auf.

### Übung 2

* Definieren Sie eine Funktion `readInputs`, die ein JavaScript-Objekt zurückgibt, welches die Eingaben des Formulars enthält. Zahlenwerte sollen als Zahlen repräsentatiert werden!
* Definieren Sie dann eine Funktion `resetForm`, die das Formular zurücksetzt (Hierbei gibt es mehr als eine Lösung - sehen sie mal in die JavaScript-Dokumentation!).

Rufen Sie diese Funktionen auf, zum Beispiel über die Konsole, um ihre korrekte Arbeitsweise zu prüfen. Benutzen Sie Variablen im globalen Scope, um wiederkehrend anzusprechende HTML-Nodes schneller zu referenzieren. Verändern Sie bei dieser Aufgabe nicht das HTML, sondern passen Sie das Dokument nur innerhalb der `script`-Tags an.

### Übung 3

* Lagern Sie Ihr aktuelles Skript in eine externe `.js`-Datei aus und prüfen Sie, ob Ihr Skript weiterhin funktioniert.
* Definieren Sie nun eine Funktion `insertIntoTable(object)`, die den Inhalt der Formularfelder (in Form des erzeugten Objekts) als neue Zeile in die vorhandene, aber leere Tabelle einfügt. Ersetzen Sie den Wert des `select`-Felds (`playground-type`) eines Spielplatzes beim Einfügen mit einem „lesbaren“ String (hierfür gibt es einen langen und einen sehr kurzen Weg).
* Aktualisieren Sie dabei auch die Anzeige der Anzahl der angezeigten Spielplätze im Tabellen-Footer.

Verwenden Sie Ihre bereits definierten Funktionen aus **Aufgabe 2**. Der Ablauf soll aufgerufen werden, sobald der Benutzer den Button des Formulars klickt. Auch hier gilt: ändern Sie nicht das Markup, sondern nur Ihre Skriptdatei! Machen Sie sich dazu u.a. mit `window.onload` bekannt.