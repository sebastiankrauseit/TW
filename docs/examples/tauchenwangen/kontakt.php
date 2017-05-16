<?php
include 'daten/daten.php';
include "daten/funktionen.php";
$produkliste = new SimpleXMLElement($produktliste);
$navigationsliste = new SimpleXMLElement($navigationsliste);
// require 'mailer.php';

?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="LOWA GmbH Abfüll- und Verschließsysteme">
  <meta name="author" content="Frank Pesci, Walter Vogler">
  <link rel="icon" href="favicon.ico">
  <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
  <title>Lowa GmbH - Kontakt</title>

  <!-- Bootstrap -->
  <link href="src/lowagmbh.min.css" rel="stylesheet">
  <link href="src/lowagmbh-prefix.css" rel="stylesheet">
  <link href="src/lowagmbh-theme.min.css" rel="stylesheet">
  <!-- Unterstützung für Media Queries und HTML5-Elemente in IE8 über HTML5 shim und Respond.js -->
  <!-- ACHTUNG: Respond.js funktioniert nicht, wenn du die Seite über file:// aufrufst -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <div id="lowa-gmbh">
        <div class="container">
          <!-- Headerlogo -->
          <div class="row">
            <div class="col-md-12">
              <h1 class="hidden">Kontakt</h1>
              <img class="img-responsive" src="img/logo.png" width="240px" />
            </div>
          </div>
        </div>
        <div class="container">
          <!-- Nav -->
          <div role="nav" class="row">
            <div class="col-md-12" id="headerlogo">
              <nav class="navbar navbar-default">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-controls="bs-example-navbar-collapse-1">
                    <span class="sr-only">Navigation ein-/ausblenden</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>

                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <?php
                    foreach($navigationsliste->navimainitem as $navimainitem) {
                      $visible = $navimainitem->visible;
                      if($visible == false) {
                        continue;
                      }
                      $navititel = $navimainitem->titel;
                      $untertitel = $navimainitem->untertitel;
                      $link = $navimainitem->link;

                      $subnavi = $navimainitem->Subnaviliste;
                      drawNavigationMain($navititel, $untertitel, $link, $subnavi);
                    }
                    ?>
                  </ul>
                </div>


              </nav>
            </div>
          </div>
        </div>

        <!-- Weiß Container -->
        <div class="container">
          <div class="row">
            <div class="col-md-12" >
              <div class="col-md-12 col-md-12--weisscontainer" >
                <div class="panel panel-default">
                  <div class="panel-body">
                    Kontakt
                  </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                  <div class="embed-responsive embed-responsive-4by3">
                    <iframe
                    id="googlemaps"
                    width="600"
                    height="250"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyADe3yL-cFc0M5EPx4c-CeRYa3i5CUKgvI&q=lowa+gmbh,neukirch+D&zoom=12" allowfullscreen>
                  </iframe>
                  <br>
                </div>
                <h2 class="hidden">Kontakt aufnehmen</h2>
                <form class="hidden" id="contact-form" method="post" action="contact.php" role="form">
                  <div class="messages"></div>
                  <div class="controls">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="form_name">Firmenname oder Ansprechpartner *</label>
                          <input id="form_name" type="text" name="name" class="form-control" placeholder="Bitte tragen Sie Ihren Namen ein *" required="required" data-error="Feld: Firma / Ansprechpartner bitte ausfüllen.">
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="form_email">Email *</label>
                          <input id="form_email" type="email" name="email" class="form-control" placeholder="Bitte tragen Sie Ihre E-Mail Adresse ein *" required="required" data-error="Kontrollieren Sie bitte die E-Mail Adresse.">
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="form_message">Nachricht</label>
                          <textarea id="form_message" name="message" class="form-control" placeholder="Optional: Nachricht an Lowa GmbH" rows="4"></textarea>
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <input type="submit" class="btn btn-success btn-send" value="Senden">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <p class="text-muted"><strong>*</strong> Pflichtangaben</p>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </div>  
        </div>
      </div>

      <?php include 'inc/footer.php' ?>
    </div>





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="src/lowagmbh.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="src/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="src/ie10-viewport-bug-workaround.js"></script>



    
  </body>
  </html>