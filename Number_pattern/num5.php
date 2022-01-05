<?php
for($row=1;$row<=5;$row++)
{
    for($col=5;$col>=1;$col--){
        if($col<=$row && $col>=1){
            echo "$col";
        }
    }
    echo "\n";
}
?>

<?php
for($row=1;$row<=5;$row++)
{

    for($col=1;$col<=5;$col++){
        if( $col<=$row){
            echo"$col";
        }
    }
    echo"\n";   
}
?>

<?php
for($row=1;$row<=5;$row++){
    for($col=5;$col>=1;$col--){
        if($col<=6-$row){
            echo "$col";
        }
    }
    echo "\n";
}
?>

<?php
$k=1;
for($row=1;$row<=5;$row++)
{
    for($col=1;$col<=$row;$col++){
       echo $k++;
       echo " ";
    }
    echo "\n";
}
?>
