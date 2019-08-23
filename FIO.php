<?php

$fio = "Генсицкий Юрий Александрович";
$Fio = explode(" ", $fio);
$name = $Fio[1];
$father = $Fio [2];
$Name = mb_substr($name, 0, 1);
$Fath = mb_substr($father, 0, 1);
echo $Fio[0] ." ".$Name . '. ' .$Fath . '.';