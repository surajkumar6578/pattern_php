<?php
    $Alpha = range('A','Z');
    for($row=0;$row<=4;$row++){
        for($col=4;$col>=0;$col--){
            if($col>=4-$row){
                echo $Alpha[$col];
            }
        }
        echo "\n";
    }
?>

<?php
    $Alpha = range('A','Z');
    for($row=4;$row>=0;$row--){
        for($col=4;$col>=0;$col--){
            if($col>=4-$row){
                echo $Alpha[$col];
            }
        }
        echo "\n";
    }
?>

<?php
$Alpha = range('A','Z'); 
for($row=4;$row>=0;$row--)
{
    for($col=4;$col>=0;$col--){
        if($col<=$row){
            echo $Alpha[$col];
        }
        
    }
    echo "\n";
}
?>