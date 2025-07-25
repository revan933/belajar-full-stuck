<php?
trait LuasLingkaran {
    public function luasLingkaran(jari2){
        return $jari2*$jari2*22/7;
    }
}

class Lingkaran {
    use luasLingkaran;
}

$lingkaran = new Lingkaran;
$lingkaran->luasLingkaran(jari2);


class Lingkaran {
    public function luasLingkaran(jari2){
        return $jari2*jari2*22/7;
    }
}