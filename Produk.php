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
$produk1 = new Produk('Naruto', 'Rifaldi Ardan');
print $produk1->get_label();