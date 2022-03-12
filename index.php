<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>

    </style>
</head>

<body>
    <h1>Please, Add Data</h1>

    <div class="mb-3">
        <a type="button" href="form.php" class="btn btn-success float-right">ADD DATA</a>
    </div>
    <div class="container">
        <table class="table table-bordered border-primary">
            <tr>
                <!-- <th>id</th> -->
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Color</th>
                <th>Season</th>
                <th>Birthdate</th>
                <th>Address</th>
                <th>delete or update</th>
            </tr>
            <?php
                include "fetch.php";
                $row = mysqli_num_rows($result);
                echo "Total no of rows:" .$row . "=";
                
                while( $data = mysqli_fetch_array($result)){
            ?>
            <tr class="data">
                <?php echo $data['id'] ?>
                <td><?php echo $data['name'] ?></td>
                <td><?php echo $data['email'] ?></td>
                <td><?php echo $data['gender'] ?></td>
                <td><?php echo $data['color'] ?></td>
                <td><?php echo $data['season'] ?></td>
                <td><?php echo $data['birthdate'] ?></td>
                <td><?php echo $data['address'] ?></td>
                <td>
                    <a href="delete.php?id=<?php echo $data['id']; ?>">delete</a>

                    <a href="updateform.php?id=<?php echo $data['id']; ?>" name="edit" >Edit</a>
                    </td>

            </tr>
            <?php          
                     }
            ?>
        </table>
        

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>