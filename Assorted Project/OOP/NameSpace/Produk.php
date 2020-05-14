<?php
abstract class Produk
{

    protected  $judul = "judul",
        $penerbit = "penerbit",
        $penulis = "penulis";

    protected   $harga = 0,
        $diskon = 0;

    public function __construct(
        $judul,
        $penerbit,
        $penulis,
        $harga
    ) {
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->penulis = $penulis;
        $this->harga = $harga;
    }
    public function getLabel()
    {
        return "$this->penulis , $this->penerbit";
    }
    // abstract public function getInfoProduk();

    abstract public function getInfo();

    public function setJudul($judul)
    {
        if (!is_string($judul)) {
            throw new Exception("Judul harus String");
        }
        $this->judul = $judul;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setPenulis($penulis)
    {
        if (!is_string($penulis)) {
            throw new Exception("penulis harus String");
        }
        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenerbit($penerbit)
    {
        if (!is_string($penerbit)) {
            throw new Exception("penerbit harus String");
        }
        $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getHarga()
    {
        return $this->harga - (($this->harga * $this->diskon) / 100);
    }
}
