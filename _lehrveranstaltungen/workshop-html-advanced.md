---
titel: HTML Advanced
kuerzel: w-htmlbadvanced
verantwortlich: cn,jk,fj,vs
typ: workshop
pflicht: false
termine: 2017-10-26 14:00|0.501|http://bit.ly/2hZk3xp,2017-10-26 14:00|0.502|http://bit.ly/2yGCGhB,2017-11-02 09:00|0.501|http://bit.ly/2xXTZh7,2017-11-02 09:00|0.502|http://bit.ly/2xZJJF1
empfohlene-voraussetzungen: t-tooling, w-htmlbasics, w-cssbasics
published: true
dauer: 240
raum: 3.102
info: Introducing Tables; Styling Tables; Introducing Forms; Form Control Elements; Table and Form Accessibility; Microformats
---

## Über den Workshop

### An wen richtet sich der Workshop?
Teilnehmer mit Vorkenntnissen in HTML und CSS. Sie sollten in der Lage sein, gutes semantisches Markup zu schreiben und ihr Markup mit grundlegendem CSS zu gestalten. Darüber hinaus sollten Sie ihre Website über Ihren ADV Server zugänglich können.

### Worum geht es?
Kennenlernen von komplexeren HTML Strukturen für Formulare und tabellarische Inhalte.

### Was muss ich mitbringen?
Eigenen Computer mit Web-Editor, FTP Client, Zugang zum eigenen ADV Account, gutes semantisches HTML Markup aus dem Workshop HTML Basics Workshop.

### Material
- [HTML Tables and Forms - Folien](../../download/Chapter05-HTMLTablesAndForms.pdf)


## Übung 1 

Laden Sie sich folgendes  [Verzeichnis](../../download/html-basics-material/rheinpark-marpkup) herunter. In diesem befindet sich das Markup von der Übung aus dem Workshop „HTML Basics”. Es soll als Basis für diese und die folgenden Übungen dienen.

Öffnen Sie die Datei `index.html` und erzeugen Sie aus der Liste mit der Headline „Spielplätze in der Nähe” eine Tabelle. Die erste Spalte soll ein kleines Vorschaubild zu dem Spielplatz enthalten. Referenzieren Sie dazu auf die Bilder von *spielplatztreff.de*. Die zweite Spalte soll die Bezeichung des Spielplatzes und die dritte Spalte die Entfernung in km enthalten.

Im Fuß der Tabelle fügen Sie eine Zeile mit zwei Zellen ein, wobei die erste Zelle über zwei Spalten laufen soll. Die erste Zelle soll „Spielplätze im Umkreis von” enthalten und die zweite Zeile die Ziffer „2”.

Erzeugen Sie ein ein möglichst reichhaltiges semantsiches Markup.

## Übung 2

Erzeugen Sie eine Datei mit dem Namen `style.css` in dem heruntergeladenen Ordner und binden Sie diese in der HTML-Datei ein.

Definieren in dieser Datei, für die aus Übung 1 erzeugten Tabelle, folgende CSS-Regeln:

* Alle Zellen sollen links und rechts einen *einfachen* schwarzen Rahmen von 1px Stärke haben und einen inneren Abstand von 0.8rem.

* Die Schrift in den Tabellenköpfen  sollen einen fetten Schriftschnitt haben und hellorange unterlegt sein.

* Die Headline der Tabelle soll im Mittelachssatz gesetzt sein, und eine sinnvolle Schriftgröße und einen sinnvollen Abstand zum nächsten Element haben.

* Die Vorschaulbilder sollen eine Breite von 100px haben, wobei sich die Höhe proportional anpassen soll.

* Die Tabellenreihen sollen abwechselnd eine weiße und hellgraue Hingergrundfarbe haben

* und bei einem Mousehover farblich hervorgehoben werden

* Die Werte Zellen in der dritten Spalte sollen rechtsbündig ausgerichtet sein

  ​

## Übung 3

Erzeugen Sie am Ende der HTML-Datei eine Sektion mit der Headline „Spielplatz eintragen.”

Fügen Sie in diese Sektion ein Formular zum Eintragen eines Spielplatzes hinzu. Setzen Sie dazu das folgende Wireframe in möglichst semantisch reichhaltigem Markup um.

![Spielplatz eintragen](../../images/spielplatz-eintragen.png)

## Übung 4

Fügen Sie dem Formular nun weitere Elemente zum Eintragen eines Ansprechpartners hinzu und gruppieren Sie die Elemente entsprechend, wie auf dem folgenden Wireframe zu sehen.

![Spielplatz eintragen](../../images/spielplatz-eintragen-ansprechpartner.png)





