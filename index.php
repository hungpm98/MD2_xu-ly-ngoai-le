<?php
include_once "DivideByZeroException.php";
function divide($numerator,$denominator){
    if($denominator == 0){
        throw new Exception();
    }
    return $numerator/$denominator;
}

try {
    $result = divide(100,5);
    echo $result."<br>";
    $result = divide(100,0);
    echo $result;

}catch (Exception $exception){
    echo "Co loi xay ra :" .$exception;
}

