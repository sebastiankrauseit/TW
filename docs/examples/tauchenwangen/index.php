<?php
include 'daten/daten.php';
include "daten/funktionen.php";
$produkliste = new SimpleXMLElement($produktliste);
$navigationsliste = new SimpleXMLElement($navigationsliste);
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Tauchen Wangen im Allgäu">
    <meta name="author" content="Frank Krause">
    <link rel="icon" href="favicon.ico">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <title>Tauchen Wangen - Start</title>

    <!-- Bootstrap -->
    <link href="src/tauchenwangen.min.css" rel="stylesheet">
    <link href="src/tauchenwangen-prefix.css" rel="stylesheet">
    <link href="src/tauchenwangen-theme.min.css" rel="stylesheet">
    <!-- Unterstützung für Media Queries und HTML5-Elemente in IE8 über HTML5 shim und Respond.js -->
    <!-- ACHTUNG: Respond.js funktioniert nicht, wenn du die Seite über file:// aufrufst -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div id="tauchenwangen">
      <div class="container">
        <!-- Headerlogo -->
        <div class="row">
          <div class="col-md-12">
            <h1 class="hidden">Tauchschule Wangen - Deep Blue Horizon</h1>
            <img class="img-responsive" src="img/logo3.png" width="240px" />
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
      <div class="container">
        <!-- Banner -->
        <div class="row" id="startbanner">
          <div class="col-lg-12 ">
            <img class="img-responsive" src="img/BigBanner.jpg" />
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row beginnhere">
          
          <div class="col">
            <div class="col">

              <div class="col-sm-4 background-cols">
                <div class="col-md-12">
                  <div class="panel panel-default">
                    <div class="panel-body">
                      Ausbildung
                    </div>
                  </div>
                  <img class="img-responsive" src="img/owd.jpg" alt="Tauchausbildung Open Water Diver" />
                  <p> 
                    <span class="visible-xs"><br></span>
                    <span class="visible-lg"><br></span>
                    Einen Tauchschein bekommst du auch im Urlaub. Doch hier lernst du es in Ruhe bis du alles verstanden hast. Sei es in der Theorie oder in der Praxis.                        
                  </p>
                </div>
              </div>

              <div class="col-sm-4 background-cols">
                <div class="col-md-12">
                  <div class="panel panel-default">
                    <div class="panel-body panel-body-symbol panel-body-symbol--hand">
                      Schnupperkurse
                    </div>
                  </div>
                  <img class="img-responsive" src="img/learn.jpg" alt="Schnuppern" />
                    <p>
                      <span class="visible-xs"><br></span>
                      <span class="hidden-xs hidden-sm"><br></span> 
                      Schnupperkurse 
                      <span class="hidden-xs"><br><br></span> 
                      <span class="visible-lg"><br></span>
                      <span class="visible-lg"><br></span>
                      <span class="visible-sm"><br></span>  
                    </p>
                </div>
              </div>

              <div class="col-sm-4 background-cols">
                <div class="col-md-12">
                  <div class="panel panel-default">
                    <div class="panel-body panel-body-symbol panel-body-symbol--gear">
                      Ausflüge
                    </div>
                  </div>
                  <img class="img-responsive" src="img/bergsee.jpg" alt="Ausflüge" />
                  <p>
                      <span class="visible-xs"><br></span>
                      <span class="hidden-xs hidden-sm"><br></span> 
                      Tagesausflüge oder Urlaub. Hier bekommst du es. 
                      <span class="hidden-xs"><br><br></span> 
                      <span class="visible-lg"><br></span>
                      <span class="visible-lg"><br></span>
                      <span class="visible-sm"><br></span> 
                    </p>
                </div>
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
    <script src="src/tauchenwangen.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="src/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="src/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>