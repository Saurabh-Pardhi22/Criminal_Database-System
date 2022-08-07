<?php
$firstname =$_POST['firstname'];
$lastname =$_POST['lastname'];
$policestation =$_POST['policestation'];
$email =$_POST['email'];
$password =$_POST['password'];

$conn = new mysqli('localhost:3307','root','','sem4project');
if($conn->connect_error){
    die('connection failed : ' .$conn->connect_error);

}
else{
    $stmt = $conn->prepare("insert into reg(firstname,lastname,policestation,email,password) values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$firstname,$lastname,$policestation,$email,$password);
    $stmt->execute();
    echo "registration succesfully....";
    $stmt->close();
    $conn->close();
}

?>