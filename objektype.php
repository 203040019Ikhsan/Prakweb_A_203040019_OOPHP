<?php

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
        return $str; 
    }

    $produk1  = new Produk ("Naruto", "Masahi Kishimoto", "Shonen Jump", 30000);
    $produk1  = new Produk ("Uncharted", "Neil Druckmann", "Sony Computer", 25000);


echo "Komik : " . $produksi1->getlabel();
echo "<br>" ;
echo "Game  : " . $produksi2->getlabel();
echo "<br>" ;
}

$infoProduk1 = new CetakInfoProduk();
echo $infoProduksi->cetak($produk);
?>