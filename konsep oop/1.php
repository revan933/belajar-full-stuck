<php?
class Product
{
    public $name;
    public $price;
    public $description;

    public function _construct($name, $price, $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

}

$product1 = new Product('Smartphone', 5000000,'Smartphone terbaru dengan kamera berkualitas tinggi');
$product1 = new Product('infinix', 1000000,'Smartphone terbaru dengan kamera berkualitas rendah');