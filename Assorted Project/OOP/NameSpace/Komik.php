<?php
class Komik extends Produk implements InfoProduk
{
    public $jumhal;
    public function __construct(
        $judul,
        $penerbit,
        $penulis,
        $harga,
        $jumhal
    ) {
        parent::__construct(
            $judul,
            $penerbit,
            $penulis,
            $harga
        );
        $this->jumhal = $jumhal;
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} Rp. {$this->harga} ";
        return $str;
    }
    public function getInfoProduk()
    {
        $str = "Komik : " . $this->getInfo() . "~ {$this->jumhal} Halaman";
        return $str;
    }
}
