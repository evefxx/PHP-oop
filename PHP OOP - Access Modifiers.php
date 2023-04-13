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
    <h1>PHP OOP - ตัวแก้ไขการเข้าถึง</h1>
    <?php
        echo "<font color='#FF3333'><p>public- คุณสมบัติหรือวิธีการสามารถเข้าถึงได้จากทุกที่ นี่เป็นค่าเริ่มต้น</p>";
        echo "<font color='#FF3333'><p>protected- คุณสมบัติหรือเมธอดสามารถเข้าถึงได้ภายในคลาสและโดยคลาสที่ได้รับจากคลาสนั้น </p>";
        echo "<font color='#FF3333'><p>private- คุณสมบัติหรือเมธอดสามารถเข้าถึงได้ภายในคลาสเท่านั้น</p>";
    ?>
    <h3>ในตัวอย่างถัดไป เราได้เพิ่มตัวแก้ไขการเข้าถึงให้กับสองฟังก์ชัน ที่นี่ หากคุณพยายามเรียกใช้ฟังก์ชัน set_color() หรือ set_weight() จะทำให้เกิดข้อผิดพลาดร้ายแรง 
        (เนื่องจากทั้งสองฟังก์ชันได้รับการคุ้มครองและเป็นส่วนตัว) แม้ว่าคุณสมบัติทั้งหมดจะเป็นแบบสาธารณะก็ตาม:</h3>
    <?php
class Fruit {
  public $name;
  public $color;
  public $weight;

  function set_name($n) {  // a public function (default)
    $this->name = $n;
  }
  protected function set_color($n) { // a protected function
    $this->color = $n;
  }
  private function set_weight($n) { // a private function
    $this->weight = $n;
  }
}

$mango = new Fruit();
$mango->set_name('Mango'); // OK
// $mango->set_color('Yellow'); // ERROR
// $mango->set_weight('300'); // ERROR
?>

</body>
</html>