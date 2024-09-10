<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP課題16</title>
 </head>
 
 <body>
     <p>
     <body>
     <p>
         <?php
         // クラスを定義する
         class Food {

            // プロパティを定義する
            private $name;
            private $price;

            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }   

            // メソッドを定義する
            public function show_price() {
                echo $this->price . '<br>';
            }
        }

        // インスタンス化する
        $food = new Food('potato', 250);
       // インスタンス$userの各プロパティの値を出力する
        print_r($food);
       // プロパティにアクセスし、値を出力する
       echo $food->show_price();
       
       ?>

         <?php
         // クラスを定義する
         class Animal {

            // プロパティを定義する
            private $name;
            private $height;
            private $weight;

            // コンストラクタを定義する
            public function __construct(string $name, int $height, string $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
                
            }   

            // メソッドを定義する
            public function show_height() {
                echo $this->height . '<br>';
            }
        }

        // インスタンス化する
        $animal = new Animal('dog', 60, 5000);
       // インスタンス$userの各プロパティの値を出力する
        print_r($animal);
       // プロパティにアクセスし、値を出力する
       echo $animal->show_height();
       
       ?>
       </p>
</body>

</html>

    