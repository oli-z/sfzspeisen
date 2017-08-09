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
  
   $string = str_replace("&amp;","&",$string); // passt so
   //$string = substr($speise, 0, strpos($string, "/"));
   $string = array_shift(explode("/", $string));
   //$string = array_shift(explode("(", $string));
   return($string);
}

function emojify($string){
  $string = str_replace('Ei', '🥚', $string);
  $string = str_replace('Käse', '🧀', $string);
  $string = str_replace('Kuchen', '🍰', $string);
  $string = str_replace('Pasta', '🍝', $string);
  $string = str_replace('Salat', '🥗', $string);
  $string = str_replace('Tomate', '🍅', $string);
  $string = str_replace('Wasser', '🥤', $string);
  return($string);
}

function getspeise($nr){
   $wday=date(N);
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
   if(!$tg){
      //print('Usage: sfz.php?nr=[Speisennummer von 1 bis 4]');
   }
}

?>
