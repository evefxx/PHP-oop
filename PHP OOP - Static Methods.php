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
    <h1>PHP OOP - วิธีการคงที่</h1>
    <h3>PHP - วิธีการคงที่</h3>
    <p>สามารถเรียกใช้เมธอดสแตติกได้โดยตรง - โดยไม่ต้องสร้างอินสแตนซ์ของคลาสก่อน <br>
เมธอดสแตติกประกาศด้วยstatic คีย์เวิร์ด</p>

<!----->
<?php
class domain {
  protected static function getWebsiteName() {
    return "W3Schools.com";
  }
}

class domainW3 extends domain {
  public $websiteName;
  public function __construct() {
    $this -> websiteName = parent::getWebsiteName();
  }	
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;
?>

</body>
</html>