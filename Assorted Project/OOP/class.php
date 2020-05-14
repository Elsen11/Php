<?php
class Produk
{

    private  $judul = "judul",
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
    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} Rp. {$this->harga} ";
        return $str;
        // if ($this->tipe == "komik") {
        //     $str .= "-{$this->jumhal} halaman";
        // } else {
        //     $str .= "-{$this->waktuMain} jam";
        // }
    }

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

class Komik extends Produk
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

    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . "~ {$this->jumhal} Halaman";
        return $str;
    }
}

class Game extends Produk
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

    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . "~ {$this->waktuMain} jam.";
        return $str;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} Rp. {$produk->harga}";
        return $str;
    }
}

$comic = new Komik("naruto uzumaki", "Japan",  "rollins", 45000, 100);
$game = new Game("Sinchan", "Korea",  "rollins", 92000, 50);
// $b = new Produk("dragon ball");
// $a->penerbit = "budi";
// $a->judul = "naruto";
// var_dump($a);
// echo $a->getLabel();
// var_dump($b);

// $info1 = new CetakInfoProduk();
// echo $info1->cetak($a);

echo $comic->getInfoProduk();
echo "<br>";
echo $game->getInfoProduk();
echo "<hr>";
$comic->setDiskon(10);
echo $comic->getHarga();
echo "<hr>";
$game->setJudul("Judul Baru");
echo $game->getPenulis();
