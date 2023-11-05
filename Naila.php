<?php
    require_once "Man.php";
    class Naila implements Man
    {
        public function getNama():void
        {
            echo"Nama ssaya Naila Fathirani Zain<br>";
        }
        public function getUmur():void
        {
            echo"Umur saya 17 tahun<br>";
        }
        public function getHoby():void
        {
            echo"Hoby saya belajar dan ngoding<br>";
        }
    }

?>