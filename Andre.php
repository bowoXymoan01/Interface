<?php
    require_once "Man.php";
    class Andre implements Man
    {
        public function getNama():void
        {
            echo"Nama Saya Andre Wibowo<br>";
        }
        public function getUmur():void
        {
            echo"Umur saya 19 tahun<br>";
        }
        public function getHoby():void
        {
            echo"Hoby saya bermain musik<br>";
        }
    }

?>