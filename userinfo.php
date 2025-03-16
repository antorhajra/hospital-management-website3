<?php
$conn=mysqli_connect("localhost","root","","project32");

if($conn){
    echo"Connection Successfully";
}else{
    echo "Connection Failed";
}

mysqli_select_db($conn, 'project32');
$user =$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comments=$_POST['comments'];

$query="insert into userinfodata(user,email,mobile,comment) 
values ('$user','$email','$mobile','$comments')" ;
mysqli_query($conn,$query);

header('location:index.php');

?>