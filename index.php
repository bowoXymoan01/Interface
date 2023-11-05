<?php
    require_once "Man.php";
    $andre = new Andre();
    $andre->getNama();
    $andre->getUmur();
    $andre->getHoby();
    echo ("<br>");

    $adit = new Adit();
    $adit->getNama();
    $adit->getUmur();
    $adit->getHoby();
    echo ("<br>");
?>