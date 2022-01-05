<?php
$alpha = range('A','Z');
for($row=0;$row<=5;$row++)
{
    for($col=0;$col<=9;$col++)
    {
        if($col>=6-$row && $col<=6+$row){
            // echo"$row";
            echo $alpha[$row];
        }
        else{
            echo" ";
        }
    }
    echo "\n";
}
?>