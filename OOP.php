<?php
class yabets{
    public $name;
    public $id;
    //construct functions
    function __construct($name,$id)
    {
        $this->name = $name;
        $this->id =$id;
        
        echo "Name {$name}";
        echo "Age {$id}";
    }
    //destruct functions
    function __destruct()
    {
        echo "This is th end of {$this->name}";
    }
    function getname(){
        return $this->name;
    }
}
//instantiation of the objects
$obj = new yabets("yabets","1040");
echo $obj->getname();