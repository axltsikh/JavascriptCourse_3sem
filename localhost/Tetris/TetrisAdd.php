<?php
    $Name=$_POST['Name'];
    $Score=$_POST['Score'];
    $ID=$_POST['ID'];
    echo $Score;
    echo $Name;
    $link =new mysqli("localhost","root","naziwin","records");
    if($link->connect_error){
     die("Ошибка: " . $link->connect_error);
    }
    $DEL="DELETE FROM tetris where ID='$ID'";
    $link->query($DEL);
    $INSERT="INSERT INTO tetris(name,points,ID)values('$Name',$Score,$ID)";
    $link->query($INSERT);
?>