<?php

    if(isset($_POST['uname'])){
        $un = $_POST['uname'];
        $em = $_POST['uemail'];
        $pwd = $_POST['upassword'];

        $host = "localhost";
        $user = "root";
        $passwrd = ""; 
        $db = "bhp";            // name on our data base

        $link = mysqli_connect($host,$user,$passwrd,$db);
        if($link){
            $sql = "INSERT INTO employee (emp_username,emp_email,emp_password) VALUES ('$un','$em','$pwd')";   // here employee is the name of the table in our database 
            $result = mysqli_query($link,$sql);      
            if($result){
                echo "<h3>Successfull!!</h3>";
            }
            else{
                echo "<h3>".mysqli_error($link)."</h3>";
            }
        }
        else{
            echo "<h3>Failed to connect to server!</h3>";
        }

    }

?>