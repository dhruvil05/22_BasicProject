<?php
    include "_dbconnect.php";
    // include "form.php";

    $nameErr = $emailErr = $passErr = $birthdateErr = $addressErr = "";
    $name = $email = $pass = $birthdate = $address = "";
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        if(empty($_POST["username"])){
            $nameErr="Name is required";
        }else{
            $name = $_POST['username'];   
        }
        if(empty($_POST["email"])){
            $emailErr="Email is required";
        }else{
            $email = $_POST['email'];
        }
        if(empty($_POST["pass"])){
            $passErr="Password is required";
        }else{
            $pass = $_POST['pass'];
        }
        if(empty($_POST["birthdate"])){
            $birthdateErr="Birthdate is required";
        }else{
            $birthdate = $_POST['birthdate'];
        }
        if(empty($_POST["address"])){
            $addressErr="Address is required";
        }else{
            $address = $_POST['address'];
        }
       
        $gender = $_POST['gender'];
        $color = $_POST['colors'];
        $season = $_POST['season'];
        $chk = implode("," , $season);
       
        $sql =  "INSERT INTO `form`.`data` (`name`, `email`, `pass`, `gender`, `color`, `season`, `birthdate`, `address`) VALUES ('$name', '$email', '$pass', '$gender', '$color', '$chk', '$birthdate', '$address' )";

                if(mysqli_query($conn, $sql)){
                    echo "new record has been added succesfully!";

                }else{
                    echo "Error:" . $sql . ":-" . mysqli_query($conn, $sql);

                }header ("location: /php/project/index.php");
                
    }    
    
?>