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
    <h1><br>PHP OOP - คลาสและวัตถุ</h1>
    <p>ในตัวอย่างด้านล่าง เราเพิ่มเมธอดอีกสองเมธอดในคลาส Fruit สำหรับการตั้งค่าและรับคุณสมบัติ $color</p>
    <?php
       class Fruit {
        // Properties
        public $name;
        public $color;
      
        // Methods
        function set_name($name) {
          $this->name = $name;
        }
        function get_name() {
          return $this->name;
        }
        function set_color($color) {
          $this->color = $color;
        }
        function get_color() {
          return $this->color;
        }
      }
      
      $apple = new Fruit();
      $apple->set_name('Apple');
      $apple->set_color('Red');
      echo "Name: " . $apple->get_name();
      echo "<br>";
      echo "Color: " . $apple->get_color();

    ?>
</body>
</html>

