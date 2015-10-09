<?php
$pageNumber = $pageN;
$numberP = PNUMBER;

$startItem = ($pageNumber-1)*$numberP;



$result = $mysqli->query("SELECT * FROM newsarticles LIMIT $startItem, $numberP");
$result = resultToArray($result);
