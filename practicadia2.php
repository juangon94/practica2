<?php
$num1 =$_GET["num1"];
$num2 =$_GET["num2"];
$a = $_GET["operacion"];

if ($a == '+') {
    echo $num1 + $num2;

}
elseif ($a == '-' ) {
    echo $num1 - $num2;
}
elseif ($a == '*') {
    echo $num1 * $num2;
}
elseif ($a == '/') { 
    echo $num1 / $num2;
    
}
?>