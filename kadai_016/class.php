<!DOCTYPE html>
<html lang="ja">
 
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
 
<body>
    <p>
        <?php
        // Foodクラスを定義する
        class Food {
            private $name;
            private $price;

        // プロパティに値を代入するコンストラクタを定義する
            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }


            // メソッドを定義する
            public function show_price(){
                echo $this->price .'<br>';
            }
        }
        // 引数を渡してインスタンス化する  potato 250  dog 60 5000
        $food = new Food('potato', 250);

        // print_r関数でインスタンスを出力する 
        print_r($food);      
        ?>
    </p>
    <p>
        <?php
        // Animalクラスを定義する
        class Animal {
            private $name;
            private $height;
            private $weight;

            // プロパティに値を代入するコンストラクタを定義する
            public function __construct(string $name, int $height, int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // メソッドを定義する
            public function show_height(){
                echo $this->height .'<br>';
            }   
        }    
        // 引数を渡してインスタンス化する
        $animal = new Animal('dog', 60, 5000);
        // print_r関数でインスタンスを出力する        
        print_r($animal);        
        ?>
    </p>
    <p>
        <?php        
        // メソッドへのアクセス
        $food->show_price();
        $animal->show_height();
        ?>
    </p>
</body>
</html>