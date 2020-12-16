<?php

class Produk
{

    public $title, $harga;

    public function __construct($title = '', $harga = 0)
    {
        $this->title = $title;
        $this->harga = $harga;
    }
}

class ProdukBuku extends Produk
{

    public $halaman = 0, $penerbit = '';

    public function __construct($title, $harga,$halaman, $penerbit)
    {
        $this->halaman = $halaman;
        $this->penerbit = $penerbit;
        parent::__construct($title, $harga);
    }
}

class ProdukSpidol extends Produk
{

    public $warna = '';

    public function __construct($title, $harga,$warna)
    {
        $this->warna = $warna;
        parent::__construct($title, $harga);
    }
}

$a = new ProdukSpidol('SPIDOL ',20000,'Merah');
print_r($a);

