<?php
$alpha = range('A','Z');
for($row=0;$row<=4;$row++){
    for($col=0;$col<=4;$col++){
        echo $alpha[$row];
        echo" ";
    }
    echo"\n";
}
?>

<?php
$alpha = range('A','Z');
for($row=0;$row<=4;$row++){
    for($col=0;$col<=4;$col++){
        echo $alpha[$col];
        echo" ";
    }
    echo"\n";
}
?>