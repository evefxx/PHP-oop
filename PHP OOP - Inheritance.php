<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <style>
            div.a {
                text-align: center;
            }
    </style>
</head>
<body>
<div class = "a">
    <h1>PHP OOP - การสืบทอด</h1>
    <p>การสืบทอดใน OOP = เมื่อคลาสมาจากคลาสอื่น</p>
    <h3>PHP - การสืบทอดและการปรับเปลี่ยนการเข้าถึงที่ได้รับการป้องกัน</h3>
    <?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  protected function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? "; 
  }
}

// Try to call all three methods from outside class
$strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
$strawberry->message(); // OK. message() is public
// $strawberry->intro(); // ERROR. intro() is protected
?>
</body>
</html>