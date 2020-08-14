<?php
    include "ADMIN/connection/connection.php";

    session_start(); 
    if (isset($_POST['submit']) 
        && isset( $_POST['username'])
        && isset( $_POST['password'])) {

        if (empty($_POST['username']) || empty($_POST['password'])) {
            # code...
            header("location:loginPage.php?empty username or password");
        }
        else{
            $sql = "SELECT * FROM user WHERE `username` = :username AND `password` = :password ";

                $stmt = $conn->prepare($sql); 
                $stmt->execute(array(':username' => $_POST['username'], ':password'=> $_POST['password']));
                $fetch=$stmt->fetch(PDO::FETCH_ASSOC);


                $num=$stmt->rowCount();
                if($num > 0)
                    {
                        $_SESSION["role"] = $fetch["role"];
                        header("location:ADMIN/home.php");
                    }
                else
                    {
                        header("location:loginPage.php?username Or password are wrong");
                    }

        }
            
        }
?>