<?php
    session_start();
    $host='localhost';
    $dbname='php login';
    $user='root';
    $pass='';

    $con=mysqli_connect($host,$user,$pass);
    mysqli_select_db($con,'php login');

    $email=$_POST['email'];
    $password=$_POST['password'];

    $q ="SELECT * FROM clients WHERE email='$email'&&password='$password'";
    $result=mysqli_query($con,$q);
    $num=mysqli_num_rows($result);
    if($num==1)
    {
        $_session['email']= $email;
        echo '<script language="javascript">alert("login successful")</script>';
        header('location:welcome.html');
    }
    else 
    {
        header('location:error403.php');
    }
?>