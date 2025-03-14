<?php
class Fruit{
    public $name;
    public $colore;
    public $fam;
    function __construct($name,$colore){
        $this->name = $name;
        $this->colore = $colore;

    }
    function intro(){
        echo "The fruie is {$this->name} and its Colore is {$this->colore}";
    }

}
class M extends Fruit{
    public $weight;
    function __construct($name,$colore,$weight)
    {
        $this->name = $name;   
        $this->colore = $colore;   
        $this->weight = $weight;   
    }
    function intro(){
        echo "THe colore is {$this->colore} The Name is{$this->name} and the weight is {$this->weight}";
    }
}
$obj = new M("Banana","yellow","10Kg");
echo $obj->intro();