<?php
for($row=1;$row<=5;$row++){
    for($col=1;$col<=5;$col++){
        if($col<=$row){
            echo"$col";
        }
        else{
            echo" ";
        }
    }
    echo"\n";
}
?>

<?php
for($row=5;$row>=1;$row--){
    for($col=1;$col<=5;$col++){
        if($col<=$row){
            echo"$col";
        }
        else{
            echo" ";
        }
    }
    echo"\n";
}
?>

----------------------------------------------------------------

<?php
for($row=5;$row>=1;$row--){
    for($col=5;$col>=1;$col--){
        if($col>=$row){
            echo"$col";
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
    for($col=5;$col>=1;$col--){
        if($col>=$row){
            echo"$col";
        }
        else{
            echo" ";
        }
    }
    echo"\n";
}
?>

----------------------------------------------------------------

