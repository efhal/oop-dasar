<?php

class Produk
{

    public $judul = "Judul", $penulis = "Penulis";

    public function __construct($judul, $penulis)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function get_label()
    {
        return $this->judul . ' ' . $this->penulis;
    }
}

class InfoProduk
{

    public function cetak_info(Produk $produk)
    {
        return "Judul : {$produk->judul} . {$produk->get_label()}";
    }
}

$infoProduk = new InfoProduk();

echo $infoProduk->cetak_info(new Produk('Naruto', 'Rifaldi Ardan'));
