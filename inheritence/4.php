<php?
class Kendaraan {
    public $jumlahRoda;

    public function bergerak() {
        echo "Kendaraan sedang bergerak";
    }
}

class Mobil extends Kendaraan {
    public function bukaPintu() {
        echo "Pintu mobil kebuka";
    }
}