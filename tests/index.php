<?php

namespace Src\SerializerClasses;

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

// first serialization
$new_one = new SerializerClass(new SerializerJson);
$new_one->Setname("Alexander","Rozenbaum","Rozen@ukr.net","Kyiv");
$new_one->object_to();

// second method Yaml serialization
echo "Next method";
$new_one->choosemethod(new SerializerYAML);
$new_one->object_to();




?>