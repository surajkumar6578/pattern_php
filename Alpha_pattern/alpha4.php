<?php
$alpha = range('A','Z');
for($row=0;$row<=4;$row++){
    for($col=0;$col<=4;$col++){
        if($col<=$row){
            echo $alpha[$col];
        }
    }
    echo"\n";
}
?>


<?php
$alpha = range('A','Z');
for($row=0;$row<=4;$row++){
    for($col=0;$col<=4;$col++){
        if($col<=$row){
            echo $alpha[$row];
        }
    }
    echo"\n";
}
?>