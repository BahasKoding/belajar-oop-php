<?php
// - Constructor
// 1. method ini adalah method spesial atau method yang khusus didalam sebuah class
// 2. karena method ini yang otomatis dijalankan ketika sebuah class dibuatkan instasiasi-nya/class-nya
// 3. kenapa kita perlu method ini? agar lebih ringkas lagi kodingannya, karena kedepannya akan lebih banyak data

class Produk{
  public  $judul     = "judul",
          $penulis    = "penulis",
          $penerbit   = "penerbit",
          $harga      = 0;

  // membuat function constructor
  // kenapa underscore-nya ada dua? karena construct merupakan bagian dari magic/spesial method dari PHP
  // kasi paramater-nya, itu bukan diambil dari property diatas tpi sesuaikan saja dengan propertynya
  public function __construct($InputJudul, $InputPenulis, $InputPenerbit, $InputHarga){
    // this->judul buat ngambil di property
    // InputJudul diambil dari parameter dari method construct
    $this->judul    = $InputJudul;
    $this->penulis  = $InputPenulis;
    $this->penerbit = $InputPenerbit;
    $this->harga    = $InputHarga;
  }
  
  public function display(){
    return "$this->judul, $this->penulis from $this->penerbit | Price $this->harga";
  }
}

$produk1 = new Produk("Bumi", "Tere Liye", "Gramedia", 100000);
$produk2 = new Produk("Bulan", "Tere Liye", "Gramedia", 90000);

echo "Novel : " . $produk1->display();
echo "<hr>";
echo "Novel : " . $produk2->display();
echo "<hr>";

// Kesimpulan
// dengan menggunakan method constructor, membuat object baru bisa lebih ringkas

