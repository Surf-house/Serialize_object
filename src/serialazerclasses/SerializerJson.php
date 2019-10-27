<?php

declare(strict_types = 1);

namespace src\serializerclasses;

class SerializerJson implements SerializerInterface {
     public function serialize($object) : string  {
         
        return json_encode($object);
     }
}