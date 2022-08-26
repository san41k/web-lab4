<?php


    echo "Змінні: <br>";
    $a = 1;
    $b = 2;
    $c = $a + $b;
    $string = "абвгд";
    $string .= $c."<br>";
    echo "змінна а  = ".$a."<br>";
    echo $string;


    echo "<br>Злиття<br>";
    echo 1 + "0";
    echo "<br>";
    echo 2 . "0";
    echo "<br>";
    echo 1 + 2.2;
    echo "<br>";
    echo 1 . 2.2;
    echo "<br>";
    echo "3" + "4";
    echo "<br>";
    echo "5" . "6";
    echo "<br>";


    echo "<br>Деномінація<br>";
    $val = 1;
    $denomination = "val";
    echo $denomination." = ".$val."<br>";
    echo $$denomination." = ".$val."<br>";


    echo "<br>Умовні конструкції:<br>";
    $a = 1;
    $b = 2;
    $c = 1.0;
    echo "Змінна а = ".$a."<br>";
    echo "Змінна c = ".$b."<br>";
    echo "Змінна с = ".$c." (1.0)<br>";
    if ($a > $b)
        echo $a." більше ".$b."<br>";
    else if ($a < $b)
        echo $a." менше ".$b."<br>";

    echo  $a == $b ? $a." рівні ".$b."<br>" : $a." не рівні  ".$b."<br>";

    if ($a == $c)
        echo $a." рівні ".$c."<br>";
    else if ($a != $c)
        echo $a." не рівні  ".$c."<br>";


    echo "<br>Цикли:<br>";

    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    for($i =0; $i<count($array); $i++){
        $array[$i] += $i;
        echo "array[".$i."] = ".$array[$i]."<br>";
    }

    foreach($array as $i)
        echo " ".$i;
    echo  "<br>";


    echo "<br>Хеш масиви:<br>";
    $hasharray = [ "a" => "b",
        "value" => 1,
        "fruit" => "apple"];

    foreach($hasharray as $key => $value)
        echo $key." => ".$value."<br>";


    echo "<br>Експлоди та імплоди:<br>";
    $string = "Груша, яблуко, персик, ананас.";
    $array = explode(" ", $string);
    for($i =0; $i<count($array); $i++){
        echo $array[$i]."<br>";
    }
    $array = implode(" ",$array);
    echo "<br><br>".$array."<br>";


    echo "<br>Класи:<br>";
    require_once "Animal.php";
    $class1 = new Animal("Cat",4);
    echo "<br>".$class1 -> get();
    require_once "Pet.php";
    $class2 = new Pet("Cat", 4,"Murka");
    echo "<br>".$class2 -> get();


    echo "<br>Сінглтон:<br>";
    require_once "Singleton.php";

    $s1 = Singleton::getVar();
    $s2 = Singleton::getVar();
    echo $s1->printTest();
    echo $s2->printTest();
    if($s2 === $s1)
        echo '<br>$s1 === $s2<br>';



?>
