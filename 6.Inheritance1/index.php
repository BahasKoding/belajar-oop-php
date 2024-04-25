<?php
// - Inheritance
// 1. sebuah konsep untuk menciptakan hierarki antar kelas (Parent & Child)
// 2. Child Class, mewarisi semua properti dan method dari Parent-nya (yang visible/public)
// 3. Child Class, memperluas (extends) fungsionalitas dari parent-nya

// Contoh Inheritance sederhana dalam kasus class Mobil
// class Mobil sebagai Parent
class Mobil{
    public  $nama,$merek,$warna,
            $kecepatanMaksimal,
            $jumlahPenumpang;

  public function tambahKecepatan(){
    return "Kecepatan Bertambah";
  }

  public function kurangiKecepatan(){
    return "Kecepatan Berkurang";
  }
}
// Catatan

// class MobilSport sebagai Child
// keywordnya adalah "extends"
// class MobilSport extends Mobil{
//   public $turbo = false;

//   public function jalankanTurbo(){
//     return "Turbo Dijalankan";
//   }
// }
// // disaat membuat object baru atau intasiasi dari child-nya
// // method parentnya bisa diambil
// // contohnya Mobil Sport mengambil method tambahKecepatan()
// $mobilMcLaren = new MobilSport();
// echo $mobilMcLaren->tambahKecepatan();
// echo "<br>";
// echo $mobilMcLaren->jalankanTurbo();
// echo "<hr>";

// End Catatan

// Studi Kasus
class Produk{
  public  $judul,
          $penulis,
          $penerbit,
          $harga,
          $jmlHalaman,
          $waktuMain,
          $tipe
          ;

  public function __construct($InputJudul, $InputPenulis, $InputPenerbit, $InputHarga, 
  $InputjmlHalaman, $InputWaktuMain, $InputTipe){
    $this->judul      = $InputJudul;
    $this->penulis    = $InputPenulis;
    $this->penerbit   = $InputPenerbit;
    $this->harga      = $InputHarga;
    $this->jmlHalaman = $InputjmlHalaman;
    $this->waktuMain  = $InputWaktuMain;
    $this->tipe       = $InputTipe;
  }
  
  public function display(){
    return "$this->judul, $this->penulis from $this->penerbit | Price $this->harga";
  }

  public function displayInfoDetail(){
    // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - Halaman
    $str = "{$this->tipe} : {$this->display()}";
    if ( $this->tipe == "Novel" ){
      $str .= " - {$this->jmlHalaman} Halaman.";
    } else if ( $this->tipe == "Game"){
      $str .= " ~ {$this->waktuMain} Jam.";
    }
    
    return $str;
  }
}


class CetakDetailProduk{
  public function show( Produk $produk ){
    $str = "{$produk->display()}";
    return $str;
  }
}

$produk1 = new Produk("Bumi", "Tere Liye", "Gramedia", 100000, 400, 0, "Novel");
$produk2 = new Produk("Bulan", "Tere Liye", "Gramedia", 90000, 325, 0, "Novel");
$detailProduk1 = new CetakDetailProduk();

echo "ini adalah output dari class Produk menggunakan method DisplayInfoDetail()";
echo "<br>";
echo $produk1->displayInfoDetail();
echo "<br>";
echo $produk2->displayInfoDetail();
echo "<hr>";
echo "ini adalah output dari class CetakDetailProduk menggunakan method show()";
echo "<br>";
echo $detailProduk1->show($produk1);

// Kesimpulan
// dengan memahami Object Type, value dari class CetakDetailProduk khusus diambil dari class Produk
// lebih terfokus ke class-nya saja !
// perhatikan lagi codenya di line 29
