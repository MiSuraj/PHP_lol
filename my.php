
    <?php 

     class Car{
         public $color;
         public $price;

         public function __construct($color,$price){
            $this ->color=$color;
             $this ->price=$price;
         }
         public function getMessage(){
             return "color is :".$this->color ." and "."Price : ".$this->price."!";
         }
        }

         $myCar=new Car("Red",2333);
         //echo $myCar->getMessage();
         $x;
         //var_dump($x);
        //  echo $_SERVER['SERVER_NAME']
        setcookie("user",phpinfo(32),time()+84000*30);

        if(isset($_COOKIE["user"])){
            echo $_COOKIE["user"];

        }

     
    ?>
