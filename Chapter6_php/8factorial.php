<?php declare(strict_types=1);?>
<?php
function Factorial($n){
    if($n==0||$n==1)
        return 1;
    else    
        return $n*Factorial($n-1);
}
echo Factorial(5);
?>