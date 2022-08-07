<form action="login1.php" method="post">
    enter your email
    <input type="text" name="uname" id="fname"> <br>
    enter your password
    <input type="text" name="password" id="lname" > <br>
    <input type="submit" name="submit" value="login" >
</form>

<?php 
        $servername="127.0.0.1:3307";
        $username="root";
        $password="";
        $dbname="pbl1";

        $conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("connection failed  ".mysqli_error($conn));

}
if(isset($_POST['submit'])){
    $uname=$_POST['uname'];
    $password=$_POST['password'];

    $sql="select * from register where email='$uname' and password='$password' ";
    $que=mysqli_query($conn,$sql);
    if(mysqli_num_rows($que)>0){
        echo "login succes";
    }    
    else{
        echo "wrong password";
    }
}



?>

