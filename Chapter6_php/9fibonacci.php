<?php declare(strict_types=1);?>
<?php
function Fibonacci(int $n){
    if($n==0||$n==1)
        return 1;
    else    
        return Fibonacci($n-1)+Fibonacci($n-2);
}
echo "The fibonacci of 10 terms = <br>";
for($i=0;$i<10;$i++){
    echo Fibonacci($i) . " ";
}
?>