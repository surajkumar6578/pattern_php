<?php
for($row=1;$row<=5;$row++){
    for($col=1;$col<=5;$col++){
       if($row==1||$row==5 || $col==1 || $col==5) {
           echo"*";
           echo" ";
           
       }
       else{
           echo"  ";
       }
    }
    echo "\n";
}
?>

<?php
for($row=1;$row<=5;$row++){
    for($col=1;$col<=5;$col++){
       if($row==5||$col==1||$row==$col){
           echo"*";
       }
       else{
           echo" ";
       }
    }
    echo "\n";
}
?>