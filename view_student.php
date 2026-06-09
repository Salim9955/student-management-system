<?php
include("php/db_connect.php");
$sql="SELECT * FROM students";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
echo $row['id']." ";
echo $row['name']." ";
echo $row['email']." ";
echo $row['course']." ";
echo $row['mobile'];
echo "<br><br>";
}
?>