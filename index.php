<?php
    require_once "Andre.php";
    require_once "Naila.php";
    require_once "Adit.php";

    $andre = new Andre();
    $andre->getNama();
    $andre->getUmur();
    $andre->getHoby();
    echo ("<br>");

    $naila = new Naila();
    $naila->getNama();
    $naila->getUmur();
    $naila->getHoby();
    echo ("<br>");

    $adit = new Adit();
    $adit->getNama();
    $adit->getUmur();
    $adit->getHoby();
    echo ("<br>");
?>