<?php
// - Property
// 1. mempresentasikan data/keadaan dari sebuah object
// 2. variable yang ada di dalam object (member variable)
// 3. sama seperti variable didalam PHP, ditambah dengan visibility didepannya

// - Method
// 1. Merepresentasikan perilaku dari sebuah object
// 2. Function yang ada di dalam object
// 3. Sama seperti function di PHP, ditambah visibility didepannya


// Contoh membuat property dan method dalam class mobil
class Mobil{
  // ini adalah property
  public $nama;
  public $merk;
  public $warna;

  // ini adalah method
  public function tambahKecepatan(){
  }
  public function kurangiKecepatan(){
  }
}

// Studi kasus
class Produk{
  // Property dalam class produk
  // bisa seperti ini jika modifier/visibility-nya sama
  public  $judul      = "judul",
          $penulis    = "penulis",
          $penerbit   = "penerbit",
          $harga      = 0;

  // Method dalam class Produk
  public function display(){
    // kenapa harus menggunakan this-> ? karena didalem function tidak bisa mengambil
    // variable diluar, jadi harus menggunakan this->
    return "$this->judul, $this->penulis from $this->penerbit | Price $this->harga";
  }
}
// kondisi dimana value object dari class-nya, bisa langsung muncul hasilnya
$produk0 = new Produk();
// var_dump($produk0);

// kondisi dimana value objectnya di timpa dengan yang baru
$produk1 = new Produk();
$produk1->judul = "Bumi";
$produk1->penulis = "Tere Liye";
$produk1->penerbit = "Gramedia";
$produk1->harga = 100000;
// var_dump($produk1);
// echo "Novel : $produk1->judul By : $produk1->penulis, Price $produk1->harga";

$produk2 = new Produk();
$produk2->judul = "Kami (bukan) Sarjana Kertas";
$produk2->penulis = "JS Khairen";
$produk2->penerbit = "Gramedia";
$produk2->harga = 120000;

echo "Novel : " . $produk1->display();
echo "<hr>";
echo "Novel : " . $produk2->display();

// Kesimpulan
// sudah membuat property & method di dalam class Produk()
// menampilkan output dari property & method