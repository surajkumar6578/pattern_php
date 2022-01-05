<?php
$alpha = range('A','Z');
/**loop for row */
for($row=0;$row<=3;$row++)
{    
/**loop for column */
    for($col=0;$col<=4;$col++)
     {
        // echo "$row";
        echo $alpha[$row];
    }
    echo "\n";
}
?>