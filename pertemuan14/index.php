<?php
    require_once 'App/init.php';

    // Pertemuan 14 : Namespace
    // sebuah cara untuk mengelompokkan program ke dalam sebuah package tersendiri
    // ada juga yang menyebutnya teknik Encapsulation

    // $produk1 = new Anime("Attack On Titan", "MAPPA", "Action", 30000, 80);
    // $produk2 = new Game("Grand Theft Auto", "Rockstar Studio", "Gangster Life", 50000, 50);
    
    // $cetakProduk = new CetakInfoProduk();
    // $cetakProduk->addProduk($produk1);
    // $cetakProduk->addProduk($produk2);
    // echo $cetakProduk->cetak();

    // Alias
    use App\Produk\User as ProdukUSer;
    use App\Service\User as ServiceUser;

    new ProdukUSer();
    new ServiceUser();