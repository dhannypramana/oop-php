<?php
    /*
        Pertemuan 9 : Static Keyword
        Akses Property/Method tanpa inisialisasi object dengan menggunakan keyword static
        
        Karakteristik:
        1. Member yang terkait dengan class, bukan dengan object
        2. nilai static akan selalu tetap meskinpun object di instansiasi berulang kali
        3. Membuat kode seakan menjadi procedural
        4. biasanya digunakan untuk membuat fungsi bantuan / helper
        5. Atau digunakan di class-class utility pada framework
    */

    class ContohStatic
    {
        public static $angka = 1;
        
        public function hello()
        {
            /*
                Memanggil property di dalam class yang sama dengan keyword static
                menggunakan keyword (self::$var_name)
            */

            return "Halo!, ".self::$angka++." kali";
        }
    }

    echo ContohStatic::hello()."<br>";
    echo ContohStatic::hello()."<br>";
    echo ContohStatic::hello()."<br>";

    echo "<hr>";

    $obj1 = new ContohStatic();
    echo $obj1->hello()."<br>";
    echo $obj1->hello()."<br>";
    echo $obj1->hello()."<br>";

    echo "<hr>";

    $obj2 = new ContohStatic();
    echo $obj2->hello()."<br>";
    echo $obj2->hello()."<br>";
    echo $obj2->hello()."<br>";