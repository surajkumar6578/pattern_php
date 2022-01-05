<?php
for($row=1;$row<=5;$row++){
    for($col=1;$col<=5;$col++){ 
        if($col<=$row){
            echo"$col";
        }
    }
    
    echo"\n";
}
for($row=4;$row>=1;$row--){
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
    for($col=1;$col<=5;$col++){ 
        if($col<=$row){
            echo"$col";
        }
        if($col<$row){
            echo "*";
        }
    }
    echo"\n";
}
for($row=4;$row>=1;$row--){
    for($col=1;$col<=5;$col++){
        if($col<=$row){
            echo"$col";
        }
        if($col<$row){
            echo "*";
        }
    }
    echo"\n";
}
?>