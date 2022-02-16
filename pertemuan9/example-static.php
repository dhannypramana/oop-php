<?php
    // Akses Property/Method tanpa inisialisasi object dengan menggunakan keyword static

    class ContohStatic
    {
        public static $nama = "Dhanny Adhi Pramana";
        
        public static function hello()
        {
            /*
                Memanggil property di dalam class yang sama dengan keyword static
                menggunakan keyword (self::$var_name)
            */
            
            return "Halo!, ".self::$nama;
        }
    }

    echo ContohStatic::hello();