---
titel: CSS Basics
kuerzel: w-cssbasics
verantwortlich: cn,jk,fj,vs
typ: workshop
pflicht: false
termine: 2017-10-26 09:00|0.501|http://bit.ly/2isZb5A, 2017-10-26 09:00|0.502|http://bit.ly/2xf9Bby, 2017-11-02 09:00|0.501|http://bit.ly/2z2OduE|cn, 2017-11-02 09:00|0.502|http://bit.ly/2xZbiJY|fj
empfohlene-voraussetzungen: t-tooling, w-htmlbasics
published: true
dauer: 240
raum: 3.102
info: What is CSS?; CSS Syntax; Location of Styles; Selectors; The Cascade - How Styles Interact; The Box Model; CSS Text Styling; Font Embedding
--- 

## Über den Workshop

### An wen richtet sich der Workshop?
Anfänger im Bereich Web-Technologien mit Basiskenntnissen in HTML. Sie sollten in der Lage sein, gutes semantisches Markup zu schreiben und Ihre Website auf Ihrem ADV Account zu deployen.

### Worum geht es?
Kennenlernen von CSS, Selektoren und dem Gestalten von semantischem Markup mit Hilfe von Cascading Stylesheets.

![HTML to CSS](../../images/html-to-css.jpg)

### Was muss ich mitbringen?
Eigenen Computer mit Web-Editor, FTP Client, Zugang zum eigenen ADV Account, gutes semantisches HTML Markup aus dem Workshop HTML Basics Workshop.

### Material
- [Introduction to CSS - Folien](../../download/Chapter04-IntroductionToCSS.pdf)
- **[Dozentenempfehlung: CSS-Grundlagen bei MDN](https://developer.mozilla.org/de/Learn/Getting_started_with_the_web/CSS_basics)**
- [CSS Tutorial bei w3schools.com](https://www.w3schools.com/css/default.asp)
- [Learn HTML bei codecademy.com](https://www.codecademy.com/learn/learn-css)
- [CSS Lernbereich bei Mozilla](https://developer.mozilla.org/de/Learn/CSS)
- [Beispiel Markup](../../download/css-basics-material/markup.zip)
- [Bilder für das Markup](../../download/css-basics-material/images.zip)
- [weitere Beispiele](../../download/css-basics-material.zip)
- [CSS Referenz nach Kategorien](https://www.w3schools.com/CSSref/)
- [CSS Referenz alphabetisch](https://developer.mozilla.org/de/docs/Web/CSS/CSS_Referenz)


## Übung 1
Binden Sie im <head> Ihrer HTML Datei ein Stylesheet ein und definieren Sie folgende Regeln mit Hilfe von Elementselektoren und ggf. Kombinatoren:
- der Body soll einen Innenabstand von 3rem haben
- das komplette Dokument soll eine serifenlose Schrift verwenden
- alle Headlines sollen eine Serifenschrift verwenden
- alle Texte sollen einen sinnvollen Zeilenabstand verwenden
- alle Headlines sollen einen Zeilenabstand von 100% haben

## Übung 2
Verschieben Sie die CSS Angaben in eine externe CSS Datei mit dem Namen *style.css* und binden Sie diese CSS Datei ein. Binden Sie vor Ihrer CSS Datei eine "reset.css" oder "normalize.css" aus einem Content Delivery Network ein.

Definieren Sie sinnvolle Regeln mit Hilfe von Elementselektoren und ggf. Kombinatoren für Ihr Markup.

## Übung 3
Binden Sie via Google Fonts die Schriften **Permanent Marker** und **Open Sans** in Ihr Dokument ein. Definieren Sie folgende Regeln mit Hilfe von Elementselektoren und ggf. Kombinatoren:
- alle Texte sollen die Schrift **Open Sans** verwenden
- alle Headlines verwenden die Schrift **Permanent Marker**
- definieren Sie sinnvolle Schriftgrößen für die Headlines
- definieren Sie sinnvolle Abstände
- bringen Sie die Bilder auf die selbe Breite wie die Texte

## Übung 4
Erweitern Sie Ihr HTML dahingehend, dass semantisch zusammengehörige Elemente in Container eingeschlossen sind. Ergänzen Sie Ihr CSS dahingehend, dass zwischen den einzelnen Containern horizontale Trennlinien angezeigt werden.

## Übung 5
Ergänzen Sie Ihr Stylesheet um einen Regelsatz, mit dessen Hilfe die Navigation in einer Zeile und mit einer Hintergrundfarbe angezeigt wird.

## Übung 6
Definieren Sie ein CSS Klasse, die Textblöcke hevorhebt. Die Hervorhebung soll folgende Eigenschaften haben:
- hellgrauer Hintergrund
- dunkle Linie an der linken Seite des Blocks

Nutzen Sie die Klasse für zwei Textblöcke.

## Übung 7: Deployment

Machen Sie die Seite jetzt über den ADV Server unter dem Verzeichnis **wba1/rheinpark-spielplatz/index.htm** verfügbar. Eine Hilfe dazu finden Sie auf der [ADV Website](http://www.gm.fh-koeln.de/advlabor/dienste/homepage.shtml). 

## Übung 8: Passwortschutz

Schützen Sie die Seite jetzt mit Hilfe einer **.htaccess** Datei. Verwenden Sie bitte als Nutzername und Passwort **wba1**. Eine Hilfe dazu finden Sie auf der [Bingo e.V. Website](https://www.bingo-ev.de/~ub304/htaccess.htm)

 
