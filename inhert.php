<?php
class ABC{
    public $name;
    public $age;
    public $gender;
    function __construct($name,$age,$gender){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        // echo "Name: $this->name <br>";
        // echo "Age: $this->age <br>";
        // echo "Gender: $this->gender <br>";
    }
    function intro(){
        echo "Name {$this->name} Age: {$this->age} Gender: {$this->gender}";
    }
    
}
class DEF extends ABC{
    function check(){
        echo "This is the sub class function";
    }
}
$obj = new DEF("YABETS","23","MALE");
echo $obj->intro();
echo $obj->check();