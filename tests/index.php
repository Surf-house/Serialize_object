<?php

declare(strict_types = 1);

namespace src\serializerclasses;

require_once '../vendor/autoload.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Serializer</title>
</head>
<body>

<form method="post" action="index.php">
<!-- What format do you want  -->
<h3>Choose type of format</h3>
<p><input type="radio" id="radioButton_del" name="format" value="Json">Json format</p> 

<p><input type="radio" id="radioButton_del" name="format" value="XML">XML format</p>

<p><input type="radio" id="radioButton_del" name="format" value="YAML">YAML format</p>
 
<p><input type="submit" name="Submit"><p> 
</form>
</body>
</html>

<?php
if(!isset($_POST['format']))
   {
    $_POST['format'] = "";
   }



switch ($_POST['format']) {
    case 'Json':
            $object = new Serializer(new SerializerJson);   
            $object->setname("Victor","Rozenbaum","Rozen@ukr.net","Setname");
            $object->objectto($object);
            break;
    case 'XML':
            $object = new Serializer(new SerializerXML);   
            $object->setname("Victor","Rozenbaum","Rozen@ukr.net","Setname");
            $object->objectto($object);
            break;
    case 'YAML':
            $object = new Serializer(new SerializerYAML);   
            $object->setname("Victor","Rozenbaum","Rozen@ukr.net","Setname");
            $object->objectto($object);
            break;
}
?>