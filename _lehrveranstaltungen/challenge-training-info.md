---
titel: Vorstellung Challenge Training
kuerzel: p-challengetraining-info
verantwortlich: alle
typ: vortrag
pflicht: false
termine: 2017-11-16 09:00
empfohlene-voraussetzungen: 
published: true
anzahl: 120 Teilnehmer
dauer: 30
raum: 3.102
info: Vorstellung des Challenge Trainings
---

## Ziel der Trainings

Das Training dient zur Vorbereitung auf die ganztägige finale Challenge, die als praktischer Prüfungsteil gewertet wird. Bei der finalen Challenge werden wir Ihnen eine Aufgabe stellen, die Sie in einem 5-er Team lösen müssen. Ziel dieser Challenge ist es, die in WBA1 vorgestellten Konzepte und Technologien eigenverantwortlich in einer **freien** und **kreativen** Art und Weise zielführend anzuwenden. Darüber hinaus bietet die finale Challenge den Raum, neben den erworbenen fachlichen Skills, Soft-Skills und bereits erworbene Fertigkeiten und Fähigkeiten anzuwenden und zu festigen, z.B.: Arbeit in der Gruppe, Nutzung des Webs für das Lösen von Fragestellungen, erarbeiten von kreativen Lösungsansätzen usw.

Als Vorbereitung für die finale Challenge und Benchmark für Sie und uns, werden wir Sie am heutigen Trainings(vormit)tag mit einem offenen Thema/ Problem konfrontieren. Bislang waren die Übungen in den Workshop stark strukturiert. Wir stehen Ihnen dann in den nächsten 3 Stunden für Support und Feedback bereit. Das Thema/ Problem ist so dimensioniert, dass Lösungen innerhalb von 3 Stunden erarbeitet werden könnten. Es gelten folgende Spielregeln:

- Sie können alleine oder im Team agieren
- Sie können uns Ihr Ergebnis und etwaige Zwischenergebnisse vorstellen, müssen dies aber nicht
- Sie können die bereitgestellten Räume nutzen, aber sich auch einen eigenen Arbeitsraum suchen

## An wen richtet sich das Training?

An alle, die sich und ihr Team auf die finale Challenge vorbereiten möchten. Bitte beachten Sie:
- dies ist keine Prüfung
- es gibt keine Abgabe
- es gibt kein richtig oder falsch
 
## Unsere Empfehlung
- nutzen Sie das Training, um mal eine freie Aufgabe im WBA Kontext zu bearbeiten
- agieren Sie im Training schon als Team und lernen Sie die Stärken und Schwächen des Teams kennen
- nutzen Sie unbedingt GIT und GitHub, damit Sie hier Ihre Skills vertiefen können. In der finalen Challenge ist der Einsatz von GitHub erforderlich

## Die Aufgabe

Die Trainingsaufgabe besteht darin eine Team bzw. [Employer Branding Seite](https://de.wikipedia.org/wiki/Employer_Branding) für ein bestehendes oder fiktives Unternehmen zu erstellen. Die Seite soll grundsätzlich 2 Kriterien erfüllen: 

- es sollen interaktive Inhalte über eine API via Javascript eingebunden werden (z.B. [Twitter](https://dev.twitter.com/web/javascript))
- es sollen statische Inhalte in Form von Bildern und Texten auf der Seite erscheinen

Wie schon erwähnt, kann es eine fiktive Seite sein, oder sie benutzen eine bestehende Team-Page eines Unternehmens und programmieren diese nach erweitern diese sinnvoll. Der reverse-engenieering Ansatz ist ein Skillset, dass im späteren Berufsbild nicht unwichtig ist. Nutzen Sie z.B. Tools wie den Inspector im Browser.

Anbei eine Auswahl von Seiten die sie z.B. verwenden können:

- [https://karriere.pixum.com/mitarbeiter/](https://karriere.pixum.com/mitarbeiter/)
- [https://www.railslove.com/team](https://www.railslove.com/team)
- [http://www.klickmeister.de/klickmeister-website/about-us](http://www.klickmeister.de/klickmeister-website/about-us)
- [https://www.solarisbank.de/en/careers/](https://www.solarisbank.de/en/careers/)
- [https://giantswarm.io/company/](https://giantswarm.io/company/)
- [https://about.travis-ci.com/](https://about.travis-ci.com/)

**!!! Sehr sehr Wichtig: Wenn Sie eine bestehende Seite als Grundlage verwenden, ändern Sie bitte den Namen der Firma in einen fiktiven Namen (bitte überall im Quellcode ersetzen: Meta-Tags, Titel, usw.), bevor sie den ersten Commit machen, bzw. die Seite online stellen. Es kann im Nachhinein unangenehme SEO-Konsequenzen geben die wir vermeiden wollen !!!**

### Weitere Hinweise:

- Machen Sie sich bis kommende Woche Gedanken über die Seite, Umsetzung. Skribbeln Sie Ihre Ideen auf Papier, bringen Sie diese mit. 
- Probieren Sie die Einbindung von APIs mal aus
- Nutzen Sie [Google](http://google.com), [Stackoverflow](http://stackoverflow.com) wenn es Fragen gibt - das Netz ist eine sehr hilfreiche Ressource um viele Herausforderungen aus dem Weg zu räumen

### Hinweise zum Einbinden von interaktiven Inhalten:

Idealerweise nutzen Sie eine API (z.B.: Twitter) um z.B.: Tweets der Mitarbeiter auf der Seite zu integrieren. Eine andere Möglichkeit besteht darin, dass Sie sich eine fiktive JSON-Datei erstellen und diese Einbinden, falls die Nutzung von APIs Ihnen zu schwierig erscheint. Eine Beispiel-Datei könnte so aussehen:

```json
{
      "text": "RT @PostGradProblem: In preparation for the NFL lockout, I will be spending twice as much time analyzing my fantasy baseball team during ...", 
      "truncated": true, 
      "in_reply_to_user_id": null, 
      "in_reply_to_status_id": null, 
      "favorited": false, 
      "source": "<a href=\"http://twitter.com/\" rel=\"nofollow\">Twitter for iPhone</a>", 
      "in_reply_to_screen_name": null, 
      "in_reply_to_status_id_str": null, 
      "id_str": "54691802283900928", 
      "entities": {
            "user_mentions": [
                  {
                        "indices": [
                              3, 
                              19
                        ], 
                        "screen_name": "PostGradProblem", 
                        "id_str": "271572434", 
                        "name": "PostGradProblems", 
                        "id": 271572434
                  }
            ], 
            "urls": [ ], 
            "hashtags": [ ]
      }, 
      "contributors": null, 
      "retweeted": false, 
      "in_reply_to_user_id_str": null, 
      "place": null, 
      "retweet_count": 4, 
      "created_at": "Sun Apr 03 23:48:36 +0000 2011", 
      "retweeted_status": {
            "text": "In preparation for the NFL lockout, I will be spending twice as much time analyzing my fantasy baseball team during company time. #PGP", 
            "truncated": false, 
            "in_reply_to_user_id": null, 
            "in_reply_to_status_id": null, 
            "favorited": false, 
            "source": "<a href=\"http://www.hootsuite.com\" rel=\"nofollow\">HootSuite</a>", 
            "in_reply_to_screen_name": null, 
            "in_reply_to_status_id_str": null, 
            "id_str": "54640519019642881", 
            "entities": {
                  "user_mentions": [ ], 
                  "urls": [ ], 
                  "hashtags": [
                        {
                              "text": "PGP", 
                              "indices": [
                                    130, 
                                    134
                              ]
                        }
                  ]
            }, 
            "contributors": null, 
            "retweeted": false, 
            "in_reply_to_user_id_str": null, 
            "place": null, 
            "retweet_count": 4, 
            "created_at": "Sun Apr 03 20:24:49 +0000 2011", 
            "user": {
                  "notifications": null, 
                  "profile_use_background_image": true, 
                  "statuses_count": 31, 
                  "profile_background_color": "C0DEED", 
                  "followers_count": 3066, 
                  "profile_image_url": "http://a2.twimg.com/profile_images/1285770264/PGP_normal.jpg", 
                  "listed_count": 6, 
                  "profile_background_image_url": "http://a3.twimg.com/a/1301071706/images/themes/theme1/bg.png", 
                  "description": "", 
                  "screen_name": "PostGradProblem", 
                  "default_profile": true, 
                  "verified": false, 
                  "time_zone": null, 
                  "profile_text_color": "333333", 
                  "is_translator": false, 
                  "profile_sidebar_fill_color": "DDEEF6", 
                  "location": "", 
                  "id_str": "271572434", 
                  "default_profile_image": false, 
                  "profile_background_tile": false, 
                  "lang": "en", 
                  "friends_count": 21, 
                  "protected": false, 
                  "favourites_count": 0, 
                  "created_at": "Thu Mar 24 19:45:44 +0000 2011", 
                  "profile_link_color": "0084B4", 
                  "name": "PostGradProblems", 
                  "show_all_inline_media": false, 
                  "follow_request_sent": null, 
                  "geo_enabled": false, 
                  "profile_sidebar_border_color": "C0DEED", 
                  "url": null, 
                  "id": 271572434, 
                  "contributors_enabled": false, 
                  "following": null, 
                  "utc_offset": null
            }, 
            "id": 54640519019642880, 
            "coordinates": null, 
            "geo": null
      }, 
      "user": {
            "notifications": null, 
            "profile_use_background_image": true, 
            "statuses_count": 351, 
            "profile_background_color": "C0DEED", 
            "followers_count": 48, 
            "profile_image_url": "http://a1.twimg.com/profile_images/455128973/gCsVUnofNqqyd6tdOGevROvko1_500_normal.jpg", 
            "listed_count": 0, 
            "profile_background_image_url": "http://a3.twimg.com/a/1300479984/images/themes/theme1/bg.png", 
            "description": "watcha doin in my waters?", 
            "screen_name": "OldGREG85", 
            "default_profile": true, 
            "verified": false, 
            "time_zone": "Hawaii", 
            "profile_text_color": "333333", 
            "is_translator": false, 
            "profile_sidebar_fill_color": "DDEEF6", 
            "location": "Texas", 
            "id_str": "80177619", 
            "default_profile_image": false, 
            "profile_background_tile": false, 
            "lang": "en", 
            "friends_count": 81, 
            "protected": false, 
            "favourites_count": 0, 
            "created_at": "Tue Oct 06 01:13:17 +0000 2009", 
            "profile_link_color": "0084B4", 
            "name": "GG", 
            "show_all_inline_media": false, 
            "follow_request_sent": null, 
            "geo_enabled": false, 
            "profile_sidebar_border_color": "C0DEED", 
            "url": null, 
            "id": 80177619, 
            "contributors_enabled": false, 
            "following": null, 
            "utc_offset": -36000
      }, 
      "id": 54691802283900930, 
      "coordinates": null, 
      "geo": null
}
```

### Weitere Hinweise

- Schauen sie sich das [Jekyll-Tutorial](https://jekyllrb.com/docs/quickstart/) an: ein Bestandteil der finalen Challenge ist es eine Seite auf Github zu publizieren indem die Arbeit dokumentiert wird
- Beschäftigen Sie sich mit [Reveal.js](http://lab.hakim.se/reveal-js/#/). Die Endpräsentation am Tag der Challenge sollte idealerweise damit erstellt werden.

### Kreative Arbeit soll auch Spaß machen...

Die das Training und die finale Challenge soll auch Spaß machen - schauen Sie sich Videos an wie ein typischer Hackathon/Challeng abläuft in dem man zusammen, in kurzer Zeit ein kreatives Ergebniss auf die Beine stellt. Ein paar Videos dazu finden Sie hier: [https://www.youtube.com/channel/UCW9cG_uqdaPPXRXGVaRqgyg/videos](https://www.youtube.com/channel/UCW9cG_uqdaPPXRXGVaRqgyg/videos)

<div class="js-video [vimeo, widescreen]">
<iframe width="560" height="315" src="https://www.youtube.com/embed/k6eZhdoRdZM" frameborder="0" allowfullscreen></iframe>
</div>

## Material
- [What are the pre requisites to participating in a Hackathon?](https://www.quora.com/What-are-the-pre-requisites-to-participating-in-a-Hackathon?share=1)
- [Vorlage für eine sinnvolles Projektverzeichnis](../../download/project-template.zip)
