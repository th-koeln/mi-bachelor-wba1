---
titel: HTML Basics
kuerzel: w-htmlbasics
verantwortlich: cn,jk,fj,vs
typ: workshop
pflicht: false
termine: 2017-10-19 15:30|0.501|http://bit.ly/2hECiIt, 2017-10-19 15:30|0.502|http://bit.ly/2g6TpCt
empfohlene-voraussetzungen: t-tooling
published: true
dauer: 180
raum: 3.102
info: HTML Defined and its History; HTML Syntax; Semantic Markup; Structure of HTML; Quick Tour of HTML; HTML Semantic Elements; Validation.
--- 

## Über den Workshop

### An wen richtet sich der Workshop?
Anfänger im Bereich Web-Technologien, HTML & Co.

### Worum geht es?
Kennenlernen von HTML, Semantischem Markup und dem Schreiben von einfachen HTML Dokumenten.

### Was muss ich mitbringen?
Eigenen Computer mit Web-Editor, FTP Client, Zugang zum eigenen ADV Account.

### Material
- [Introduction to HTML - Folien](../../download/Chapter03-IntroductionToHTML.pdf)
- [HTML Tutorial bei w3schools.com](https://www.w3schools.com/html/default.asp)
- [Learn HTML bei codecademy.com](https://www.codecademy.com/learn/learn-html)
- [Codebeispiele in Codepen](http://codepen.io/collection/DJGrme/)
- [HTML Elemente alphabetisch](http://www.w3schools.com/tags/default.asp)
- [HTML Elemente nach Kategorie](http://www.w3schools.com/tags/ref_byfunc.asp)
- [Liste der HTML Attribute](http://www.w3schools.com/tags/ref_standardattributes.asp)
- [Mozilla Developer Network](https://developer.mozilla.org/de/)
- [HTML Workshop W3Schools](https://www.w3schools.com/html/default.asp)
- [Mozilla HTML Element Referenz](https://developer.mozilla.org/de/docs/Web/HTML/Element)
- [W3C](http://www.w3.org)
- [W3C - HTML5 Spezifikation](http://www.w3.org/TR/html5/)

### Editoren
- [Brackets](http://brackets.io/)
- [Atom](https://atom.io/)
- [Visual Studio Code](https://code.visualstudio.com/)

### Codeplaygrounds
- [Codepen](http://codepen.io)
- [JSFiddle](http://jsfiddle.net)

## Übung 1: Aufbau von einfachem, semantischen Markup
Wir haben den [Inhalt einer Spielplatzseite](../../download/html-basics-material/rheinpark-screenshot.png) von Spielplatztreff.de als Basis genommen und auf die basalen Bausteine reduziert. Das Ergebnis können Sie diesen [PDF](../../download/html-basics-material/rheinpark.pdf) oder der [Markdown Datei](../../download/html-basics-material/rheinpark.md) entnehmen. 

Bitte legen Sie ein Verzeichnis mit dem Namen "rheinpark-spielplatz" an und erzeugen Sie für diese Spielplatzseite sauberes semantisches Markup, jedoch noch ohne Strukturelemente wie *header*, *div* oder *section*. 

Laden Sie die zugehörigen Bilder herunter und legen diese in ein Unterverzeichnis unterhalb von "rheinpark-spielplatz". Bitte nennen Sie das Unterverzeichnis "img" und binden Sie die Bilder via relativer Referenzierung in ihr HTML Dokument ein.

## Übung 2: Nutzung von Strukturelementen

Strukturieren Sie nun das Dokument mit semantischen Strukturelementen wie *nav*, *section* und *header*.

## Übung 3: Hyperlinks

Ergänzen Sie Ihr Dokument um eine Navigation mit den folgenden Links:

| Linkname             | Linkziel                           | Art                      |
| -------------------- | ---------------------------------- | ------------------------ |
| Spielplatz eintragen | eintragen.htm                      | Link auf der Website     |
| Bewertungen anzeigen | #bewertungen                       | Link innerhalb der Seite |
| Facebookseite        | http://facebook.de/spielplatztreff | Externer Link            |

## Übung 4: Deployment

Machen Sie die Seite jetzt über den ADV Server unter dem Verzeichnis **wba1/rheinpark-spielplatz/index.htm** verfügbar. Eine Hilfe dazu finden Sie auf der [ADV Website](http://www.gm.fh-koeln.de/advlabor/dienste/homepage.shtml). 

## Übung 5: Passwortschutz

Schützen Sie die Seite jetzt mit Hilfe einer **.htaccess** Datei. Verwenden Sie bitte als Nutzername und Passwort **wba1**. Eine Hilfe dazu finden Sie auf der [Bingo e.V. Website](https://www.bingo-ev.de/~ub304/htaccess.htm)


