<?php
$regexp="/^[a-z0-9-_]{2,20}$/i";
if(preg_match_all($regexp,$_POST["login"])){
        $login=$_POST["login"];
        $color=$_POST["color"];
        setcookie("login", $login,time()+300);
        $_SESSION["color"]=$color;
}
else
    echo "<p>Логін повинен містити тільки латинські букви, цифри, тире і нижнє тире.<br>Довжина має бути в межах від 2 до 20 символів!!!</p>";
  if($_COOKIE["login"]){
    echo "<div>Привіт {$_COOKIE["login"]}! Ви ввели {$_SESSION["color"]}</div>";
}
else
    echo "кукі з таким ім'ям не існує!!";
?>
