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
    <h1>PHP OOP - ลักษณะ</h1>
    <h3>PHP - ลักษณะคืออะไร?</h3>
    <p>PHP รองรับการสืบทอดเดียวเท่านั้น: คลาสลูกสามารถสืบทอดจากพาเรนต์เดียวเท่านั้น <br>
แล้วถ้าคลาสต้องการสืบทอดพฤติกรรมหลายอย่างล่ะ คุณสมบัติของ OOP ช่วยแก้ปัญหานี้ได้ <br>
คุณลักษณะใช้เพื่อประกาศวิธีการที่สามารถใช้ได้ในหลายคลาส คุณลักษณะสามารถมีเมธอดและนามธรรมเมธอดที่สามารถใช้ได้ในหลายคลาส และวิธีการสามารถมีตัวแก้ไขการเข้าถึงใดๆ (สาธารณะ ส่วนตัว หรือป้องกัน)<br>
ประกาศลักษณะด้วยtrait คำหลัก</p>

<?php
trait message1 {
public function msg1() {
    echo "OOP is fun! ";
  }
}

class Welcome {
  use message1;
}

$obj = new Welcome();
$obj->msg1();
?>

</body>
</html>