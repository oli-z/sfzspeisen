<?php
  include('sfz.php');
  $sp1=getspeise(1);
  $sp2=getspeise(2);
  $sp3=getspeise(3);
  $sp4=getspeise(4);
 ?>

<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
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
          if ($sp4)
            echo'<li class="list-group-item">'.$sp4.'</li>';
        ?>
  </ul>
</div>

</body>
