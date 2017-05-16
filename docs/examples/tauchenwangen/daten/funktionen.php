<?php
// VIEWS

// Creates a Product
// Warning: Kategorie Einzelgeräte und Kategorie Maschinen fix programmiert. Besser wäre eine flag im XML: HasCategoriepage:: Dann mit switch oder if einen link erzeugen oder nicht
	function drawxmlProduct($titel="", $kategorie="", $bilddate="", $beschreibung=""){
		$bildpfad ="img/".$bilddate;
    $kategoriepfad = "";

    if($kategorie == "Einzelgeräte"){
      $kategoriepfad = "einzelgeraete.php";
    }else if($kategorie == "Maschinen"){
      $kategoriepfad = "maschinen.php";
    }
		echo "<div class='col-md-6'>";
          echo "<h2>".$titel."</h2>";
          	echo "<figure>";
          	if(file_exists($bildpfad)){
          		echo "<img class='img-responsive' src='".$bildpfad."' alt='".$titel."' >";	
          	}else {
          		echo "<img class='img-responsive' src='../img/produktdummy.jpg' alt='".$titel."' >";
          	}
             
             	if(file_exists($kategoriepfad)) {
             		echo "<figcaption>Kategorie: <a href='$kategoriepfad'>".$kategorie."</a></figcaption>";
             	} else {
             		echo "<figcaption>Kategorie: ".$kategorie."</figcaption>";
             	}
            	
          	echo "</figure>";
          echo "<p>".$beschreibung."</p>";
        echo "</div>";
	}

  function drawNavigation(){
    
  }

	function drawNavigationMain($navititel, $untertitel, $link, $subnavi){
		$item_has_subnavi = property_exists($subnavi, "subitem") ;
		if($item_has_subnavi){
			echo "<li>";
		echo "<a href='$link' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>$navititel <span class='caret'></span></a>";
          echo "<ul class='dropdown-menu'>";
            foreach($subnavi as $item){
			 foreach($item as $subitem){
			 	$subtitel = $subitem->s_titel;
			 	$sublink = $subitem->s_link;
			 	echo "<li><a href='$sublink'>$subtitel</a></li>";
			 }
		}
          echo "</ul>";
        echo "</li>";
    }else {
    	echo "<li><a href='$link'>$navititel</a></li>";
    }
	
	}

  function drawBreadcrump($array) {
    if(is_array($array)){
      echo "<ol class='breadcrumb'>";
      foreach($array as $item) {
        if ($item === end($array) ) {
          echo "<li class='active'>$item</li>";;
        }else {
          echo "<li><a href='".strtolower($item.".php")."'>$item</a></li>";
        }
      }
      echo "</ol>";
    }
  }

  function drawDownloads($downloads){
    
    if(is_object($downloads)){
      $file_dir = "downloads/";
     
      

      foreach($downloads as $produkte){
        // Das ist zu Früh um den Produktnamen festzulegen außerdem sind die Daten falsch daten.php
        $produkt = $produkte["name"];
        $produktkurz = $produkte["kurzname"];
        foreach($produkte as $gruppen){
          $gruppe = $gruppen["name"];
          foreach($gruppen as $datei){
            echo "<tr>  <th scope='row'><span class='hidden-xs'>$produkt</span><span class='visible-xs'>$produktkurz</span></th>";
            $produkt = "";
            $produktkurz = "";
            echo "<td>$gruppe</td>";
            $gruppe = "";
            if(file_exists($file_dir.$datei)){
              echo "<td><a href='$file_dir$datei'>$datei[anzeigename]</a></td>";
            }else {
              echo "<td><span class='hidden-xs'>Dokument in Arbeit</span><span class='visible-xs'>-</span></td>";
            }
            
            
            echo "</tr>";
          }

        }
        
      }
      

    }
  }

?>