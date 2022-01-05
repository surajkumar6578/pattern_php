<?php
for($row=1;$row<=5;$row++)
{
    for($col=1;$col<=9;$col++)
    {
        if($col>=6-$row && $col<=4+$row){
            // echo"$row";
            echo"$col";
        }
        else{
            echo" ";
        }
    }
    echo "\n";
}
?>