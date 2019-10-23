<?php

declare(strict_types = 1);

namespace Src\SerializerClasses;





class SerializerClass {
    
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

    public function object_to()
    {    $object = (object) array("Alexander","Rozenbaum","Rozen@ukr.net","Kyiv");
        // $new_one->Setname("Alexander","Rozenbaum","Rozen@ukr.net","Kyiv");
        $result = $this->method->serialize($object);
        echo "Here our result";
        echo "<hr>";
        var_dump($result);
        echo "<hr>";
    }
    
    
   
    public  function Setname($name, $second_name, $email, $city) {
        $this->name = $name;
        $this->second_name = $second_name;
        $this->email = $email;
        $this->city = $city;
        }
}

