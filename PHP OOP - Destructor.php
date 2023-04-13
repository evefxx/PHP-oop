<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            .color{
                color: #000066;
            }
            div.a {
                text-align: center;
            }
    </style>
</head>
<body>
<div class = "a">
    <h1 class = "color">PHP OOP - ตัวทำลาย</h1>
    <h3>PHP - ฟังก์ชัน __destruct</h3>
    <p>ตัวทำลายถูกเรียกเมื่อวัตถุถูกทำลายหรือสคริปต์หยุดทำงานหรือออก</p>
    <p>หากคุณสร้าง__destruct()ฟังก์ชัน PHP จะเรียกใช้ฟังก์ชันนี้โดยอัตโนมัติเมื่อสิ้นสุดสคริปต์</p>
    <p>ขอให้สังเกตว่าฟังก์ชัน destruct เริ่มต้นด้วยขีดล่าง (__) สองตัว!</p>
    <p>ตัวอย่างด้านล่างมีฟังก์ชัน __construct() ที่ถูกเรียกใช้โดยอัตโนมัติเมื่อคุณสร้างออบเจกต์จากคลาส และฟังก์ชัน __destruct() ที่ถูกเรียกใช้โดยอัตโนมัติเมื่อสิ้นสุดสคริปต์</p>
<?php
class Fruit {
  // Properties
  var $name;
  var $color;

  // Methods
  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  function __destruct() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

$apple = new Fruit("Apple", "red");
?>
</body>
</html>