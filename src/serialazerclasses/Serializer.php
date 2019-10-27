<?php

declare(strict_types = 1);

namespace src\serializerclasses;





class Serializer {

    public $name;

    public $second_name;

    public $email;

    public $city;
    
  

    public function __construct(SerializerInterface $method) 
    {
        $this->method = $method;
    }
    
    //Usually, the Context allows replacing a Strategy object at runtime
    public function choosemethod(SerializerInterface $method) 
    {
        $this->method = $method;
    }

    public function objectto($object)
    {    
        
        $result = $this->method->serialize($object);
       
        echo "<hr>";
        var_dump($result);
        echo "<hr>";
        
    }

    

    public  function setname($name, $second_name, $email, $city) {
        $this->name = $name;
        $this->second_name = $second_name;
        $this->email = $email;
        $this->city = $city;
    }
       
}

