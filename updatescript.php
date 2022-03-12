<?php
    require "_dbconnect.php";
    
    
    if(isset($_GET['edit'])){
      $id= $_GET['id']; 
      $query= "SELECT * FROM `data` WHERE id= $id";
      $sql = mysqli_query($connection, $query);
      $row= mysqli_fetch_array($sql);
      echo $row;
      return $row;
    }

    if(isset($_POST['update']) && isset($_GET['edit'])){
        

        $name= legal_input($_POST['username']);
        $email= legal_input($_POST['email']);
        $gender = legal_input($_POST['gender']);
        $color = legal_input($_POST['colors']);
        $season = legal_input($_POST['season']);
        $address = legal_input($_POST['address']);
        $birthdate = legal_input($_POST['birthdate']);
        $sql="UPDATE `data` SET `name`='$name', email='$email',gender= '$gender',color='$color', season = 'season', birthdate = '$birthdate', `address`='$address' WHERE id=$id";
        
        $result = mysqli_query($conn, $sql);
    }
?>