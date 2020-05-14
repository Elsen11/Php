<?php

class Node
{
	var $x;
	var $y;
	var $kelas;
	public function __construct($x, $y, $kelas)
	{
		$this->x = $x;
		$this->y = $y;
		$this->kelas = $kelas;
	}
}
function distance($a, $b)
{
	return sqrt(pow($a->x - $b->x, 2) + pow($a->y - $b->y, 2));
}

//NODE = DATASET
$x = [7, 6, 8, 5, 9, 9.5, 8.3];
$y = [1.2, 1.7, 1.5, 1.3, 1, 1.4, 0.8];
$kelas = ['BAGUS', 'KURANG', 'BAGUS', 'KURANG', 'BAGUS', 'BAGUS', 'KURANG'];

$node = [];

foreach ($x as $key => $value) {
	$node[$key] = new Node($x[$key], $y[$key], $kelas[$key]);
}


// $node[0] = new Node(7,1.2,'bagus');
// $node[1] = new Node(6,1.7,'kurang');
// $node[2] = new Node(8,1.5,'bagus');
// $node[3] = new Node(5,1.3,'kurang');
// $node[4] = new Node(9,1,'bagus');
// $node[5] = new Node(9.5,1.4,'bagus');
// $node[6] = new Node(8.3,0.8,'kurang');

$cari = (object) ['x' => 7.5, 'y' => 1.1];
$hasil = []; //hasil distance/jarak
$k = 3; //  jumlah tetangga 
$kelas = []; //total kelas sejumlah K

//hitung jarak
foreach ($node as $key => $value) {
	$hasil[$key] = (object) ['jarak' => distance($value, $cari)];
	$hasil[$key]->kelas = $value->kelas;
}
//sort jarak
sort($hasil);

//ambil kelas sesuai jumlah K
for ($i = 0; $i < $k; $i++) {
	$kelas[$i] = $hasil[$i]->kelas;
}
$values = array_count_values($kelas);
print_r($values);
echo max($values);
$mode = array_search(max($values), $values);
echo "<pre>";

echo "<pre>";
echo 'Kelas H adalah ' . $mode;
// print_r($hasil);
echo "</pre>";
