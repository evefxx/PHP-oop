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
    <h1>PHP OOP - คุณสมบัติคงที่</h1>
    <p>สามารถเรียกคุณสมบัติสแตติกได้โดยตรง - โดยไม่ต้องสร้างอินสแตนซ์ของคลาส <br>
ประกาศคุณสมบัติคงที่ด้วยstatic คำหลัก</p>

<?php
class pi {
  public static $value=3.14159;
}

class x extends pi {
  public function xStatic() {
    return parent::$value;
  }
}

// Get value of static property directly via child class
echo x::$value;

// or get value of static property via xStatic() method
$x = new x();
echo $x->xStatic();
?>

</body>
</html>