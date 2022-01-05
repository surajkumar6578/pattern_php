<?php
for($row=1;$row<=5;$row++){
    for($col=1;$col<=5;$col++){
        if($col<=$row){
            echo"*";
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
        if($col>=$row){
            echo"*";
        }
    }
    echo"\n";
}
?>

<?php
for($row=1;$row<=5;$row++){
    for($col=1;$col<=5;$col++){
        if($col>=$row){
            echo"*";
        }
        else{
            echo" ";
        }
    }
    echo"\n";
}
?>