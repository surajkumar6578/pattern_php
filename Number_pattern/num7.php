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
for($row=1;$row<=5;$row++){
    for($k=4;$k>=$row;$k--){
        echo" ";
    }
        for($col=1;$col<=5;$col++){
            if($col<=$row){
                echo"$col";
            }
        }
    echo"\n";
}
?>

<?php
for($row=1;$row<=5;$row++){
    for($k=5;$k>=$row;$k--){
        echo" ";
    }
        for($col=1;$col<=5;$col++){
            if($col<=$row){
                echo"$col";
                echo " ";
            }
        }
    echo"\n";
}
?>

