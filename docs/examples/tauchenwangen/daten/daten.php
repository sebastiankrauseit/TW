<?php
$produktliste = <<<XML
<?xml version='1.0' standalone='yes'?>
<produkliste>

 <produkt>
  <in_produktuerbsicht_anzeigen>1</in_produktuerbsicht_anzeigen>
  <produkttitel>Handsiegelgeräte (HS)</produkttitel>
  <kategorie>Einzelgeräte</kategorie>
  <bilddatei>IMG_0012_Handsiegelgeraet.jpg</bilddatei>
  <beschreibung>sind manuell zu bedienende Geräte, mit denen vorgefertigte Becher, 
    Schalen, Flaschen und Gläser mit vorgefertigten Deckeln (Platinen) luftdicht verschweißt werden.
  </beschreibung>
 </produkt>

 <produkt>
  <in_produktuerbsicht_anzeigen>1</in_produktuerbsicht_anzeigen>
  <produkttitel>Dosiergeräte (DG)</produkttitel>
  <kategorie>Einzelgeräte</kategorie>
  <bilddatei>IMG_0013_Dosiergeraet.jpg</bilddatei>
  <beschreibung>sind manuell zu bedienende Geräte, mit denen flüssig bis pastöse Produkte gewichtsgenau in 
    vorgefertigte Behältnisse (z.B. Becher, Schalen, Gläser, Flaschen) abgefüllt werden.
  </beschreibung>
 </produkt>

 <produkt>
  <in_produktuerbsicht_anzeigen>1</in_produktuerbsicht_anzeigen>
  <produkttitel>Dosierpumpen</produkttitel>
  <kategorie>Einzelgeräte</kategorie>
  <bilddatei>LOWA_Dosiergeraet_Bearbeitung_Engelmann_DSC1715_web.jpg</bilddatei>
  <beschreibung>sind manuell zu bedienende Geräte, mit denen flüssige bis cremige Produkte dosiergenau in 
    vorgefertigte Behältnisse (z.B. Flaschen, Kanister) abgefüllt werden.
  </beschreibung>
 </produkt>

 <produkt>
  <in_produktuerbsicht_anzeigen>1</in_produktuerbsicht_anzeigen>
  <produkttitel>Rundläufer (RL)</produkttitel>
  <kategorie>Maschinen</kategorie>
  <bilddatei>IMG_0002_Rundlaeufer.jpg</bilddatei>
  <beschreibung>sind vollautomatische Maschinen, mit denen flüssige, pastöse und feste 
    Produkte in vorgefertigte Behältnisse (z.B. Dosen, Schalen) abgefüllt werden.<![CDATA[ <br><br><br>]]>
  </beschreibung>
 </produkt>

 <produkt>
  <in_produktuerbsicht_anzeigen>1</in_produktuerbsicht_anzeigen>
  <produkttitel>Längsläufer (LL)</produkttitel>
  <kategorie>Maschinen</kategorie>
  <bilddatei>Bild_02 001-Flaschenfueller.jpg</bilddatei>
  <beschreibung>sind vollautomatische Maschinen, mit denen flüssige, pastöse und feste Produkte in vorgefertigte Behältnisse 
    (z.B. Gläser, Flaschen, Becher) gewichtsgenau abgefüllt, verschlossen 
    (verschraubt, gestülpt) und gekennzeichnet (z.B. mit Datum) werden. Weitere Optionen sind möglich.</beschreibung>
 </produkt>

 <produkt>
  <in_produktuerbsicht_anzeigen>1</in_produktuerbsicht_anzeigen>
  <produkttitel>Dosiermaschinen</produkttitel>
  <kategorie>Maschinen</kategorie>
  <bilddatei>Bild1 004_3-fach-Doseur.jpg</bilddatei>
  <beschreibung>sind vollautomatische Maschinen, mit denen flüssige, pastöse und feste Produkte 
    in vorgefertigte Behältnisse (z.B. Dosen, Schalen) abgefüllt werden. <![CDATA[ <br><br><br>]]>
  </beschreibung>
 </produkt>

 <produkt>
  <in_produktuerbsicht_anzeigen>1</in_produktuerbsicht_anzeigen>
  <produkttitel>Sonderlösungen</produkttitel>
  <kategorie>Sonderlösungen</kategorie>
  <bilddatei>sonderloseungen.jpg</bilddatei>
  <beschreibung>Wir bieten individuelle Lösungen rund um das Abfüllen und Verschließen 
    von Produkten, speziell auf den Kunden zugeschnitten.
  </beschreibung>
 </produkt>

 <produkt>
  <in_produktuerbsicht_anzeigen>1</in_produktuerbsicht_anzeigen>
  <produkttitel>Zubehör</produkttitel>
  <kategorie>Zubehör</kategorie>
  <bilddatei>P5030123-Ruehrwerk.jpg</bilddatei>
  <beschreibung>um das Thema Abfüllen und Verschließen
  </beschreibung>
 </produkt>

</produkliste>
XML;

$navigationsliste = <<<XML
<?xml version='1.0' standalone='yes'?>
<navigationsliste>

 <navimainitem>
  <titel>Home</titel>
  <untertitel></untertitel>
  <link>index.php</link>
  <visible>1</visible>
 </navimainitem>

 

</navigationsliste>
XML;

$downloads = <<<XML
<?xml version='1.0' standalone='yes'?>
  <downloads>
    <produkt name="Einzelgeräte" kurzname="Einzel">
      <hauptgruppe name=" Handsiegelgeräte(HS)">
        <datei anzeigename="HS-L">1HSL_Prospekt_Handsiegelgeraet_1_light.pdf</datei>
        <datei anzeigename="HS">2HSProspekt_Handsiegelgeraet_1.pdf</datei>
        <datei anzeigename="HS-M">3HSMProspekt_Menue_Schalensiegler_1.pdf</datei>
      </hauptgruppe>
      <hauptgruppe name="Dosiergeräte(DG)">
        <datei anzeigename="DG-S">4DGSProspekt Dosiergeraet_1.pdf</datei>
        <datei anzeigename="DG-L">5DGLProspekt Dosiergeraet_liegend_1.pdf</datei>
      </hauptgruppe> 
      <hauptgruppe name="Dosierpumpen">
        <datei anzeigename="DP">6DPProspekt _Produktpumpe_1.pdf</datei>
      </hauptgruppe> 
      <hauptgruppe name="Wiegetechnik">
        <datei anzeigename="DP">Wiegetechnik.pdf</datei>
      </hauptgruppe> 
    </produkt>

    <produkt name="Maschinen" kurzname="Maschinen">
      <hauptgruppe name=" Rundläufer(RL)  ">
        <datei anzeigename="RL-1">8RL1Prospekt_Rundlaeufer_1.pdf</datei>
      </hauptgruppe>
      <hauptgruppe name="Längsläufer(LL)">
        <datei anzeigename="LL-F">9LLFProspekt_Flaschenabfuellanlage_1.pdf</datei>
      </hauptgruppe>
      <hauptgruppe name="Dosiermaschinen">
        <datei anzeigename="">pdf</datei>
      </hauptgruppe> 
    </produkt>
    <produkt name="Sonderlösungen" kurzname="Sonder">
      <Hauptgruppe>
        <datei anzeigename="PDF">pdf</datei>
      </Hauptgruppe>
    </produkt>
    <produkt name="Zubehör" kurzname="Zubehör">
      <Hauptgruppe>
        <datei anzeigename="PDF">pdf</datei>
      </Hauptgruppe>
    </produkt>
  </downloads>
XML;
?>