<?php

class Produk
{

    public $judul = "Judul", $penulis = "Penulis", $harga = "harga", $penerbit = "penerbit";

    public function get_label()
    {
        return $this->judul.' '.$this->penerbit;
    }
}
$produk1 = new Produk();
$produk1->judul = 'Naruto';
print_r($produk1);
print 'Label '.$produk1->get_label();
