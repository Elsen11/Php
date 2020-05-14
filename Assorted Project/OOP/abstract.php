<?php

interface InfoProduk
{
    public function getInfoProduk();
}

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

class Game extends Produk implements InfoProduk
{
    public $waktuMain;
    public function __construct(
        $judul,
        $penerbit,
        $penulis,
        $harga,
        $waktuMain
    ) {
        parent::__construct(
            $judul,
            $penerbit,
            $penulis,
            $harga
        );
        $this->waktuMain = $waktuMain;
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} Rp. {$this->harga} ";
        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . "~ {$this->waktuMain} jam.";
        return $str;
    }
}

class CetakInfoProduk
{
    public $daftarProduk = array();

    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }
    public function cetak()
    {
        $str = "Daftar Produk : <br>";
        foreach ($this->daftarProduk as $p) {
            $str .= "{$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}

$comic = new Komik("naruto uzumaki", "Japan",  "rollins", 45000, 100);
$game = new Game("Sinchan", "Korea",  "rollins", 92000, 50);

$cetak = new CetakInfoProduk();
$cetak->tambahProduk($comic);
$cetak->tambahProduk($game);
echo $cetak->cetak();
echo "hai";
