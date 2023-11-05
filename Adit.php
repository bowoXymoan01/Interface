<?php
    require_once "Man.php";
    class Adit implements Man
    {
        public function getNama():void
        {
            echo"Nama Saya Aprila Aditia<br>";
        }
        public function getUmur():void
        {
            echo"Umur saya 19 tahun<br>";
        }
        public function getHoby():void
        {
            echo"Hoby saya Nonton Anime dan Bermain Game<br>";
        }
    }

?>