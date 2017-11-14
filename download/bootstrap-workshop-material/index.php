<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <title> Bootstrap-Workshop </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Unterstützung für Media Queries und HTML5-Elemente in IE8 über HTML5 shim und Respond.js -->
    <!-- ACHTUNG: Respond.js funktioniert nicht, wenn du die Seite über file:// aufrufst -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


    <nav class="navbar navbar-static-top navbar-default">
    <div class="container">
      <!-- Titel und Schalter werden für eine bessere mobile Ansicht zusammengefasst -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Navigation ein-/ausblenden</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"> TH Köln </a>
      </div>

      <!-- Alle Navigationslinks, Formulare und anderer Inhalt werden hier zusammengefasst und können dann ein- und ausgeblendet werden -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#"> Startseite </a></li>
          <li><a href="#"> Über Uns </a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Info <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#"> Seite 1 </a></li>
              <li><a href="#"> Seite 2 </a></li>
              <li><a href="#"> Seite 3 </a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->



    </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div class="jumbotron eigenschaften">
            <h2> Willkommmen an der TH KÖLN </h2>
            <br><br>
            <p>
                Dieser Workshop richtet sich an Teilnehmer, die bereits sicher im Umgang mit ihren Web-tools sind, die in der Lage sind sauberes und semantisches Markup zu schreiben und sicher in Arbeit mit IDs und Klassen sind.
            </p>

            <p><a class="btn btn-success" href="#" role="button">Mehr erfahren</a></p>
            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><strong> Weitere Informationen auch <a href="mailto:kontakt@th-koeln.de">per Mail</a></strong><br>
        </div>
    </div>

    <div class="container register">
      <div class="row">
          <h3> Registration </h3>
            <div class="col-sm-5 col-md-5">

                <form>
                    <div class="form-group">
                        <label for="beispielFeldEmail1">Email-Adresse</label>
                        <input type="email" class="form-control" id="beispielFeldEmail1" placeholder="Email-Adresse">
                    </div>
                    <div class="form-group">
                        <label for="beispielFeldPasswort1">Passwort</label>
                        <input type="password" class="form-control" id="beispielFeldPasswort1" placeholder="Passwort">
                    </div>
                    <div class="form-group">
                        <label for="beispielFeldPasswort1">Passwort wiederholen</label>
                        <input type="password" class="form-control" id="beispielFeldPasswort1" placeholder="Passwort">
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Indem du auf „Konto erstellen“ klickst, erklärst du dich mit unseren Nutzungsbedingungen einverstanden und bestätigst, dass du unsere Datenrichtlinie einschließlich unserer Cookie-Richtlinie gelesen hast. Eventuell erhältst du SMS-Benachrichtigungen von Facebook, die du jederzeit abbestellen kannst.
                        </label>
                    </div>
                        <button type="submit" class="btn btn-default"> Konto erstellen </button>
                </form>
            </div>
            <div class="col-sm-6 col-md-6 col-md-offset-1">
                <img src="images/campus_gm.jpg" class="img-responsive" alt="Responsives Bild">
            </div>
        </div>
    </div>


        <div class="container">

        <div class="page-header text-center">
            <h1> Blogeinträge </h1>
        </div>

        <div class="row">
            <div class="col-sm-4 col-md-4">
                <div class="thumbnail">
                    <img src="images/3.jpg" alt="...">
                    <div class="caption">
                      <h3> Die Bachelorarbeit </h3>
                      <p>
                          Den Abschluss des Studiums bildet die Bachelorarbeit. In dieser bearbeiten die Studierenden selbstständig
                          eine praxisorientierte Aufgabe aus einem gewünschten Fachgebiet. Diese können sie in Kooperation mit einem
                          Unternehmen schreiben.
                      </p>
                      <p><button type="button" class="btn btn-info"> weiter </button></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="thumbnail">
                    <img src="images/2.jpg" alt="...">
                    <div class="caption">
                      <h3> Das Bachelor-Studium </h3>
                      <p>
                          Das Bachelor-Studium der Medieninformatik hat drei Ziele:
                          Kommunikations- und Methodenkompetenz aufbauen,
                          ein umfassendes Technologieverständnis vermitteln und
                          Geschäftsprozesse und Kernaktivitäten der Medienwirtschaft kennenlernen.
                      </p>
                      <p><button type="button" class="btn btn-info"> weiter </button></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="thumbnail">
                    <img src="images/1.jpg" alt="...">
                    <div class="caption">
                      <h3> Das Grundstudium </h3>
                       <p>
                           Das Grundstudium der Medieninformatik vermittelt in den ersten beiden Semester die mathematischen,
                           theoretischen und technischen Grundlagen mit Lehrveranstaltungen wie Mathematik, Algorithmen und
                           Programmierung und Theoretische Informatik.
                      </p>
                      <p><button type="button" class="btn btn-info"> weiter </button></p>
                    </div>
                </div>
            </div>
        </div>
        </div>

      <div class="container video-breite">
        <div class="embed-responsive embed-responsive-16by9">
           <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/aFNRpbs-e50" frameborder="0"></iframe>
        </div>
      </div>



      <footer class="footy">
          <div class="container">
              <ul class="nav nav-pills">
                  <li><a href="#"> Über uns </a></li>
                  <li><a href="#"> Blog </a></li>
                  <li><a href="#"> Über uns </a></li>
                  <li><a href="#"> impressum </a></li>
                  <li><a href="#"> Datenschutz </a></li>
              </ul>
          </div>
      </footer>


    <!-- jQuery (wird für Bootstrap JavaScript-Plugins benötigt) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Binde alle kompilierten Plugins zusammen ein (wie hier unten) oder such dir einzelne Dateien nach Bedarf aus -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>