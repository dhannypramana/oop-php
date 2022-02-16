<?php

    /**
     * Pertemuan 10 : Constant
     */

    define('NAME', 'Dhanny Adhi Pramana'); //define hanya bisa disimpan di luar (global)
    const UMUR = 21; //const bisa disimpan di dalam class

    echo NAME."<br>";
    echo UMUR."<br>";

    class Coba
    {
        const NAME = "Dhanny";
    }
    
    echo Coba::NAME."<br>";