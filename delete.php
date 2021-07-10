<?php
    extract($_REQUEST);
    $s="localhost";
    $u="root";
    $p="";
    $db="user_info";
    $c=mysqli_connect($s,$u,$p,$db);
    echo $del;
    $sql="select * from user_image where indexNo='$del'";
    $result=mysqli_query($c,$sql);
    $row=mysqli_fetch_array($result);

     unlink("upload/$row[name]");
     $res="delete from user_image where indexNo='$del'";
    $delete=mysqli_query($c,$res);

     header("Location:User_profile.php");
    ?>


