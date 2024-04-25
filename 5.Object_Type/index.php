<?php
// - Object Type
// 1. Tipe data biasanya ada dua, yaitu Primitive & Composite
// 2. Object Type termasuk ke jenis Composite tipe data

class Produk{
  public  $judul      = "judul",
          $penulis    = "penulis",
          $penerbit   = "penerbit",
          $harga      = 0;

  public function __construct($InputJudul, $InputPenulis, $InputPenerbit, $InputHarga){
    $this->judul    = $InputJudul;
    $this->penulis  = $InputPenulis;
    $this->penerbit = $InputPenerbit;
    $this->harga    = $InputHarga;
  }
  
  public function display(){
    return "$this->judul, $this->penulis from $this->penerbit | Price $this->harga";
  }
}

// membuat kelas CetakDetailProduk untuk menampilkan informasi detail saja
class CetakDetailProduk{
  // terdapat method show dengan parameter $produk
  // harapannya bisa menampilkan informasi dari class Produk
  // tetapi harus ditambahkan juga detailnya berasal dari mana
  public function show( Produk $produk ){
    $str = "{$produk->display()}";
    return $str;
  }
}

$produk1 = new Produk("Bumi", "Tere Liye", "Gramedia", 100000);
$produk2 = new Produk("Bulan", "Tere Liye", "Gramedia", 90000);

echo "Novel : " . $produk1->display();
echo "<hr>";
echo "Novel : " . $produk2->display();
echo "<hr>";

// membuat object baru dari class CetakDetailProduk
// lalu menampilkan hasilnya menggunakan method show dengan paramater dari object lainnya
$detailProduk1 = new CetakDetailProduk();
// method show dengan paramater instance dari class Produk
echo $detailProduk1->show($produk2);

// Kesimpulan
// dengan memahami Object Type, value dari class CetakDetailProduk khusus diambil dari class Produk
// lebih terfokus ke class-nya saja !
// perhatikan lagi codenya di line 29
