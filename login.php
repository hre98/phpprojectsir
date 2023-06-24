<?php
    session_start();
     if(isset($_POST['uname'])){
    $un = $_POST["uname"];
    $pw = $_POST["upassword"];

     $host = "localhost";
     $user = "root";
     $password = "";
     $database = "bhp";

        $connection = mysqli_connect($host, $user, $password, $database);
        if($connection){
            try{
                $query = "SELECT * FROM employee WHERE emp_username='$un' AND emp_password='$pw'";
                $result = mysqli_query($connection, $query);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0){
                    // while($row = mysqli_fetch_assoc($result)){
                    //     echo "uname: ".$row['username'];
                    //     echo "<br>pwd: ".$row['password'];
                    // }
                    //header("Location:dashboard.html");
                    echo "USER FOUND!!!";
                    $_SESSION['username'] = $_POST["uname"];
                    echo $_SESSION['username'];
                }
                else
                    echo "USER not FOUND!!!!";
            }
            catch(Exception $ex){
                echo $ex->getMessage();
            }
        }
        else{
            echo "Failed to connect with Database";
        }
    }
    ?>