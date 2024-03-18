<?php
$denidno = $_POST['denidno'];
$denname = $_POST['denname'];
$con=new mysqli("localhost","root","","db_clinic");
if(!$con)
{
echo "COULD NOT CONNECT TO THE DATABASE";
}
$sql="INSERT INTO dentist VALUES('$denidno','$denname')";
$result=$con->query($sql);
echo "record successfully added";
?>