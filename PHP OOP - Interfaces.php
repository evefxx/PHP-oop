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
    <h1>PHP OOP - อินเทอร์เฟซ</h1>
    <h3>PHP - อินเทอร์เฟซคืออะไร?</h3>
    <p>อินเทอร์เฟซช่วยให้คุณระบุวิธีการที่คลาสควรใช้ <br>
อินเทอร์เฟซทำให้ง่ายต่อการใช้คลาสต่างๆ ที่หลากหลายในลักษณะเดียวกัน เมื่อหนึ่งคลาสขึ้นไปใช้อินเทอร์เฟซเดียวกัน จะเรียกว่า "ความหลากหลาย"<br>
อินเตอร์เฟสถูกประกาศด้วยinterfaceคีย์เวิร์ด</p>

<?php
// Interface definition
interface Animal {
  public function makeSound();
}

// Class definitions
class Cat implements Animal {
  public function makeSound() {
    echo " Meow ";
  }
}

class Dog implements Animal {
  public function makeSound() {
    echo " Bark ";
  }
}

class Mouse implements Animal {
  public function makeSound() {
    echo " Squeak ";
  }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach($animals as $animal) {
  $animal->makeSound();
}
?>

</body>
</html>