<?php
for($row=1;$row<=5;$row++){
    for($col=1;$col<=5;$col++){
        if($col<=$row){
            echo $col%2;
        }
        else{
            echo" ";
        }
    }
    echo"\n";
}
?>

<?php
for($row=1;$row<=5;$row++){
    for($col=1;$col<=5;$col++){
        if($col<=$row){
            echo $row%2;
        }
        else{
            echo" ";
        }
    }
    echo"\n";
}
?>


<?php
$k=1;
for($row=1;$row<=5;$row++)
{
    for($col=1;$col<=$row;$col++){
       echo $k++%2;
       echo " ";
    }
    echo "\n";
}
?>
