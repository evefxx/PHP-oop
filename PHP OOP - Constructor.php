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
    <h1>PHP OOP - ตัวสร้าง</h1>
    <h3>PHP - ฟังก์ชัน __construct</h3>
    <p>ตัวสร้างช่วยให้คุณสามารถเริ่มต้นคุณสมบัติของวัตถุได้เมื่อสร้างวัตถุ</p>
    <p>หากคุณสร้าง__construct()ฟังก์ชัน PHP จะเรียกใช้ฟังก์ชันนี้โดยอัตโนมัติเมื่อคุณสร้างวัตถุจากคลาส</p>
    <p>ขอให้สังเกตว่าฟังก์ชันสร้างเริ่มต้นด้วยขีดล่าง (__) สองตัว!</p>
    <p>เราเห็นในตัวอย่างด้านล่างว่าการใช้ตัวสร้างช่วยให้เราไม่ต้องเรียกเมธอด set_name() ซึ่งจะลดจำนวนโค้ด:</p>
</body>
<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit("Apple", "red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
?>
</html>