<?php

class addtwo
{
    function __construct($one,$two){
       
        $this->one=$one;
        $this->two = $two;
    }
    
    
    function add_them(){
        
        return $this->one+$this->two;
    }
    
    function sub_them(){
        return $this->one-$this->two;
        
    }
}
//instantiate the class
$adtwo = new addtwo(2,3);
echo $adtwo->add_them();
echo $adtwo->sub_them();
//just like the python and java



?>