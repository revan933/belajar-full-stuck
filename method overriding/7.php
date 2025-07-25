<php?
class Kendaraan {
    public $jumlahRoda;
    public $merk;

    public function suaraKendaraan() {
        echo "Brumbrum";
    }
}

class Mobil extends kendaraan {
    public function bukaKap(){
        echo "kap mesin dibuka";
    }
     public function suaraKendaraan() {
        echo "ngengg";
    }
}

class Motor extends kendaraan {
    public function suaraKendaraan() {
        echo "trektrek";
    }
}
public function standar(){
    echo "standar motor diturunkan";
}
public function bukaJok(){
    echo "Jok motor dibuka "
}

$mobil = new Mobil();
$kendaraan = new Kendaraan();
$motor = new motor();

$kendaraan -> suaraKendaraan(); // output "Brumbrum"
$mobil -> suaraKendaraan(); // output "ngengg"
$motor -> suaraKendaraan(); // output "trektrek"