<?php
class Mobil {
    private $warna;
    private $merk;
    private $tahun;
    private $acmobil;

    // Konstruktor harus __construct, bukan _construct
    public function __construct($warna, $merk, $tahun) {
        $this->warna = $warna;
        $this->merk = $merk;
        $this->tahun = $tahun;
        $this->acmobil = $acmobil;
    }

    public function getWarna() {
        return $this->warna;
    }

    public function setWarna($warna) {
        $this->warna = $warna; // harus menyimpan nilai ke properti
    }

    public function getMerk() {
        return $this->merk;
    }

    public function getTahun() {
        return $this->tahun;
    }
}