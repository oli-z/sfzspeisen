<?php
  include('sfz.php');
  $sp1=getspeise('Menue_1');
  $sp2=getspeise('Menue_2');
  $sp3=getspeise('Menue_3');
  $spsalat=getspeise('Salat');
  $splbh=getspeise('Lunchbox_herzhaft');
  $splbs=getspeise('Lunchbox_suess');
  $spvs=getspeise('Verpflegungsbeutel_S');
 ?>

<head>
<meta charset="utf-8">
<link rel="stylesheet" href="./css/bootstrapcustom.min.css">
<!--<link rel="stylesheet" href="./css/bootstrapcustom-theme.min.css">-->
</head>
<body align="center" style="background-color: #fafafa;">


<div class="panel panel-primary">
      <ul class="list-group">
        <?
          if ($sp1)
            echo'<li class="list-group-item">'.$sp1.'</li>';
          if ($sp2)
            echo'<li class="list-group-item">'.$sp2.'</li>';
          if ($sp3)
            echo'<li class="list-group-item">'.$sp3.'</li>';
          if ($spsalat)
            echo'<li class="list-group-item">'.$spsalat.'</li>';
          if ($splbh)
            echo'<li class="list-group-item">'.$splbh.'</li>';
          if ($splbs)
            echo'<li class="list-group-item">'.$splbs.'</li>';
          if ($spvs and $spvs != " ")
            echo'<li class="list-group-item">'.$spvs.'</li>';
          if(!$sp1 and !$sp2 and !$sp3)
            echo'<li class="list-group-item">Keine Daten verfügbar. Ferien oder Wochenende?</li>';
        ?>
  </ul>
</div>
</body>
