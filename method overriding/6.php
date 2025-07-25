<php?
class Animal {
    public function makeSound() {
        echo "Suara hewan";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Gonggong";
    }
}

$dog = new Dog();
$dog->makeSound(); // Output: Gonggong