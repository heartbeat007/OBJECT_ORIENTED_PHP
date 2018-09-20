<?php

class Person
{
    
    function say_hello(){
        //this function will refer itselg the class
        echo "hello from inside the class ".get_class($this)."</br>";
        
        
    }
    
    
    function hello(){
        //we will execute the function inside the class 
        //in a function inside the class
        $this->say_hello();
        
        
    }
}


$person = new Person();
$person->say_hello();
$person->hello();
?>

