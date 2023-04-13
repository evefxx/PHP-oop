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
    <h1>PHP OOP - ค่าคงที่ของคลาส</h1>
    <p>ไม่สามารถเปลี่ยนแปลงค่าคงที่ได้เมื่อมีการประกาศแล้ว <br>

ค่าคงที่ของคลาสจะมีประโยชน์หากคุณต้องการกำหนดข้อมูลค่าคงที่ภายในคลาส<br>

ค่าคงที่ของคลาสถูกประกาศภายในคลาสด้วยconst คีย์เวิร์ด<br>

ค่าคงที่ของคลาสจะคำนึงถึงขนาดตัวพิมพ์ อย่างไรก็ตาม ขอแนะนำให้ตั้งชื่อค่าคงที่เป็นตัวอักษรพิมพ์ใหญ่ทั้งหมด<br>

เราสามารถเข้าถึงค่าคงที่จากภายนอกคลาสได้โดยใช้ชื่อคลาสตามด้วยตัวดำเนินการแก้ไขขอบเขต ( ::) ตามด้วยชื่อค่าคงที่ เช่นที่นี่</p>
<?php
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbye();
$goodbye->byebye();
?>
</body>
</html>