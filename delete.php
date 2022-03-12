<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $name=$_GET['deleteid'];

    $sql="delete from crud where Name='$name'";

    $result=mysqli_query($con,$sql);
    if($result){
      //  echo "Deleted Successfull";
      header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}