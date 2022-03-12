<?php
    require "_dbconnect.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM `data` WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    
    
    if($result){
        $data = mysqli_fetch_array($result);
        if($id == $data['id']){
           $sql = "DELETE FROM `data` WHERE id='$id'";
           $result = mysqli_query($conn, $sql);
            header("location:index.php");
        }
        else{
            echo "sorry! your data not deleted. ";
        }
    }
    
 
?>
