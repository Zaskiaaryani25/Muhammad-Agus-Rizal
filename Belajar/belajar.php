<?php
class Buah {
  public $nama;
  public $warna;
  public $berat;

  public function __construct($nama, $warna, $berat) {
    $this->nama = $nama;
    $this->warna = $warna;
    $this->berat = $berat;
  }

  public function tampilkanInfo() {
    echo "Buah ini adalah " . $this->nama . ", warnanya " . $this->warna . " dan beratnya " . $this->berat . " gram.";
  }

  public function apakahBerat() {
    return $this->berat > 500;
  }
}

$apel = new Buah("Apel", "Merah", 150);
$apel->tampilkanInfo();
?>
