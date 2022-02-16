<?php
    // Pertemuan 13 : Auto Loading
    // Memanggil Class (File) tanpa harus menggunakan require

    spl_autoload_register(function ($class)
    {
        require_once __DIR__.'/App/Produk/'.$class.'.php';
    });

    $produk1 = new Anime("Attack On Titan", "MAPPA", "Action", 30000, 80);
    $produk2 = new Game("Grand Theft Auto", "Rockstar Studio", "Gangster Life", 50000, 50);
    
    $cetakProduk = new CetakInfoProduk();
    $cetakProduk->addProduk($produk1);
    $cetakProduk->addProduk($produk2);
    echo $cetakProduk->cetak();