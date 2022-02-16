<?php
    class CetakInfoProduk
    {
        public $daftarProduk = [];

        public function addProduk(Produk $produk)
        {
            $this->daftarProduk[] = $produk;
        }

        public function cetak()
        {
            $str = "DAFTAR PRODUK : <br>";
            
            foreach ($this->daftarProduk as $dp) {
                $str .= " - {$dp->getInfoProduk()}<br>";
            }

            return $str;
        }
    }