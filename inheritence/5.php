<php?
class Kendaraan {
    public $jumlahRoda;
    public $merk;

    public function bergerak() {
        echo "kendaraan mulai bergerak";
    }
}

class Mobil extends kendaraan {
    public function bukaKap(){
        echo "kap mesin dibuka";
    }
}

class Motor extends kendaraan {
    public function standar(){
        echo "standar motor diturunkan";
    }
    public function bukaJok(){
        echo "Jok motor dibuka "
    }
}

class Tipemotor extends Motor{
    echo "ini tipe motor indonesia";
}

