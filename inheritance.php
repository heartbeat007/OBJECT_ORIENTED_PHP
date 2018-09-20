<?php
//this example of the inheritance

class Car{
    
    var $wheels = 4;
    var $doors = 4;
    
    //function adding
    function wheel_doors(){
        
        //we will return this function propertise so
        //the parameter this will going to get added
        return $this->wheels+$this->doors;
    }
}


$car1 = new Car();
echo $car1->wheel_doors();

class CompactCar extends Car{
    //add thwe new propertise but 
    //we can use their same method 
    //without even mention that
    var $wheels = 8;
    var $doors = 5;
    
    
    
}

//now instansiete the compact car
$cmpcar = new CompactCar();
echo $cmpcar->wheel_doors();

?>