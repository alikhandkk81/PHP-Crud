<?php

   $stu_name = $_POST['sname'];
   $stu_address = $_POST['saddress'];
   $stu_class = $_POST['class'];
   $stu_phone = $_POST['sphone'];

 include "config.php";
 $sql = "INSERT INTO student(sname,saddress,sclass,sphone)
 VALUES('$stu_name','$stu_address','$stu_class','$stu_phone')";
 $result = mysqli_query($conn,$sql);
 if($sql == TRUE){
 	echo 'DATA inserted succesfuly';
 }else{
 	echo 'Errror can not inserted'.mysqli_error($conn);
 }

 header("Location:http://localhost/crud/index.php");
 mysqli_close($conn);
?>
