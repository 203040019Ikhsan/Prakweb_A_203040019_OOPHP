<?php

class produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function __constructor( $judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getlabel() {
        return "$this->penulis, $this->penerbit";
    }

}

$produk1  = new Produk ("Naruto", "Masahi Kishimoto", "Shonen Jump", 30000);
$produk1  = new Produk ("Uncharted", "Neil Druckmann", "Sony Computer", 25000);
$produk1  = new Produk ("Dragon Ball");

echo "Komik : " . $produksi1->getlabel();
echo "<br>" ;
echo "Game  : " . $produksi2->getlabel();
echo "<br>" ;
var_dump($produksi3)
?>