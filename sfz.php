<?php
// KEINE FEHLER ANZEIGEN //
//error_reporting(0);
//@ini_set('display_errors', 0);
$spnr=$_GET['nr'];

function cleanupstring($string){
   $string = str_replace("<br />", " ", $string);
   $string = str_replace("- ","-",$string);
   $string = str_replace("- ","-",$string);
  
   $string = str_replace("(M1) ","",$string);
   $string = str_replace("(M2) ","",$string);
   $string = str_replace("(M3) ","",$string);
   $string = str_replace("(Salat) ","",$string);
   $string = str_replace("(L1) ","",$string);
   $string = str_replace("(L2) ","",$string);
  
   $string = str_replace("&amp;","&",$string);
   $string = str_replace("&quot;",'"',$string);
   //$string = substr($speise, 0, strpos($string, "/"));
   $string = array_shift(explode("/", $string));
   //$string = array_shift(explode("(", $string));
   return($string);
}

function emojify($string){
  $string = str_ireplace('Brot', 🍞, $string);
  $string = str_ireplace('China', 🇨🇳, $string);
  $string = str_ireplace('Donut', 🍩, $string);
  $string = str_replace('Ei', '🥚', $string);
  $string = str_ireplace('Gurke', '🥒', $string);
  $string = str_ireplace('Hähnchen', '🐔', $string);
  $string = str_ireplace('Käse', '🧀', $string);
  $string = str_ireplace('Kuchen', '🍰', $string);
  $string = str_ireplace('Kuh', '🐄', $string);
  $string = str_ireplace('Mais', '🌽', $string);
  $string = str_ireplace('Paprika', '🌶', $string);
  $string = str_ireplace('Pasta', '🍝', $string);
  $string = str_ireplace('Salat', '🥗', $string);
  $string = str_ireplace('Schoko', '🍫', $string);
  $string = str_ireplace('Schwein', '🐷', $string);
  $string = str_ireplace('Sonne', '🌞', $string);
  $string = str_ireplace('Tomate', '🍅', $string);
  return($string);
}

function getspeise($nr){
   $wday=date('N');
   //$wday=7; // für Tests am Wochenende
   $page = file_get_contents('http://www.sfz.rcs.de/');
   $regexstr = '/(?s)(?<=menue-'.$nr.' weekday-'.$wday.'">)(.+?)(?=<div class="menueIconContain">)/';
   preg_match (($regexstr),$page,$treffer);
   $speise=$treffer['0'];
   $speise=cleanupstring($speise);
   return $speise;
}



if($spnr){
   $speise=getspeise($spnr);
   print($speise);
}else{
   if(!$nr){
      print('Usage: sfz.php?nr=[Speise]');
   }
}

?>
