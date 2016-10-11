<?php
$spnr=$_GET['nr'];

function getspeise($nr){
   $wday=date(N);
   //$wday=1;
   $page = file_get_contents('http://www.sfz.rcs.de/');
   $regexstr = '/(?s)(?<=menue-Menue'.$nr.' weekday-'.$wday.'">)(.+?)(?=<div class="menueIconContain">)/';
   preg_match (($regexstr),$page,$treffer);
   $speise=str_replace("<br />", " ", $treffer['0']);
   $speise=str_replace("- ","-",$speise);
   $speise = substr($speise, 0, strpos($speise, "/"));
   return $speise;

}



if($spnr){
   $speise=getspeise($spnr);
   print($speise);
}else{
   if(!$tg){
      print('Usage: sfz.php?nr=[Speisennummer von 1 bis 4]');
   }
}

?>
