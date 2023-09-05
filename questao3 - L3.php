<?php

$inicial = $_POST ["inicial"];
$final = $_POST ["final"];
$combus = $_POST ["combus"];

$mediaKM = $final + $inicial / $combus;
$mediaKM = number_format($mediaKM, 1);

echo "A média de KM por litro foi de $mediaKM";
