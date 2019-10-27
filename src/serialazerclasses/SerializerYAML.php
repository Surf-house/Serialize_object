<?php

declare(strict_types = 1);

namespace src\serializerclasses;

use Symfony\Component\Yaml\Yaml;


class SerializerYAML implements SerializerInterface 
{
     public function serialize($object) : string 
     {
         
        return Yaml::dump(get_object_vars($object));
     }
}