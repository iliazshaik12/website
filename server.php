<?php
    $host='localhost';
    $dbname='php login';
    $user='root';
    $pass='';
    session_start();
    

    $con=mysqli_connect($host,$user,$pass);
    if(!$con)
    {
        
        echo  "connection failed";
    }
    else
    {
        echo '<script>';
        echo 'alert("server connected")';
        echo "</script>";
        echo "server connected";
    }
    mysqli_select_db($con,'php login');
    $email=$_POST['email'];
    $password=$_POST['password'];
    if($email==''||$password=='')
    {
        header('location:error.php');
    }
    $q="SELECT * FROM clients WHERE email='$email'";
    $result = mysqli_query($con,$q);
    $num= mysqli_num_rows($result);
    if($num==1)
    {
        echo '<script>';
        echo 'alert("email already in use")';
        echo "</script>";
        if(password!=results[0].password)
        {
            echo '<script>';
            echo 'alert("email or password incorrect")';
            echo "</script>";
        }
        header('location:error.php');
    }
    else
    {
        $qy= "INSERT INTO clients(email,password) values('$email','$password')";
        mysqli_query($con,$qy);
        echo 'registration successful';
        header('location:login.php');
    }
?>