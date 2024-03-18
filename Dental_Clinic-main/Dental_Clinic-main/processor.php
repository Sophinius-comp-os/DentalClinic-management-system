<?php
$con=new mysqli("localhost","root","","db_clinic");
if(!$con)
{
echo "COULD NOT CONNECT TO THE DATABASE";
}
$sql="SELECT * FROM dentist";
$result=$con->query($sql);
echo "<table border=1>";
echo"<th>";
echo"denidno";
echo"</th>";
echo"<th>";
echo"denname";
echo"</th>";
while($row=$result->fetch_array())
{
echo"<tr>";
echo"<td>".$row['denidno']."</td>";