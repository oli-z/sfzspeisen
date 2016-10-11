<head>
<meta charset="utf-8">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>

<body align="center" style="background-color: #fafafa;">

<p>Heute gibt es entweder:</p>
<strong>
<?php
$sp=file_get_contents('http://oli-z.tk/sfz.php?nr=1');
echo $sp;
?>
</strong><br>
<p>oder:</p>
<strong>
<?php
$sp=file_get_contents('http://oli-z.tk/sfz.php?nr=2');
echo $sp;
?>
</strong><br>
<p>oder auch:</p>
<strong>
<?php
$sp=file_get_contents('http://oli-z.tk/sfz.php?nr=3');
echo $sp;
?>
</strong>
<p>Alternativ gibt es auch:</p>
<strong>
<?php
$sp=file_get_contents('http://oli-z.tk/sfz.php?nr=4');
echo $sp;
?>
</strong>
<!--
<div class="panel panel-primary">
      <ul class="list-group">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Morbi leo risus</li>
    <li class="list-group-item">Porta ac consectetur ac</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
</div>
<div class="alert alert-danger" role="alert">Update verfügbar:</div>
-->

</body>