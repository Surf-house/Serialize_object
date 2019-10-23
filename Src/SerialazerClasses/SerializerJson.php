<?php

declare(strict_types = 1);

namespace Src\SerializerClasses;

class SerializerJson implements SerializerInterface {
     public function serialize($object) : string  {
         
        return json_encode($object);
     }
}