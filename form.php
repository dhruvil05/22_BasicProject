<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Fill The Form</title>
    <style>
    .btnbox {}
    </style>
    <style>
    .error {
        color: red
    }
    </style>
</head>

<body>
<?php include "insert.php"?>

    <h1>Fill The Form</h1>
    <div class="container">
        <form action="/php/project/form.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <span class="error">*<?php echo $nameErr;?></span>
                <input type="name" class="form-control" name="username" id="username">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <span class="error">*<?php echo $emailErr; ?></span>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">

                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <span class="error">*<?php echo $passErr; ?></span>
                <input type="password" class="form-control" name="pass" id="password">

            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault2"
                    checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Female
                </label>
            </div>

            <div class="mb-3 ">
                <label for="inputColor" class="form-label ">Choose Color</label><br>
                <select name="colors" id="colors" class="color">
                    <option name="colors" value="Red">Red</option>
                    <option name="colors" value="Green">Green</option>
                    <option name="colors" value="Blue">Blue</option>
                    <option name="colors" value="Black">Black</option>
                </select>
                </ul>
            </div>
            <div class="mb-3">
                <input class="checkbtn" type="checkbox" name="season[]" value="winter" id="checkBox1">
                <label class="form-check-label" for="flexCheckIndeterminate">
                    winter
                </label>
            </div>
            <div class="mb-3">
                <input class="checkbtn" type="checkbox" name="season[]" value="summer" id="checkBox2">
                <label class="form-check-label" for="flexCheckIndeterminate">
                    summer
                </label>
            </div>
            <div class="mb-3">
                <input class="checkbtn" type="checkbox" name="season[]" value="monsoon" id="checkBox3">
                <label class="form-check-label" for="flexCheckIndeterminate">
                    monsoon
                </label>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Birth Date</label>
                <span class="error">* <?php echo $birthdateErr;?></span>
                <input type="date" class="form-control" id="birthdate" name="birthdate">

            </div>

            <div class="form-floating">

                <textarea class="form-control" placeholder="Leave a comment here" name="address"
                    id="floatingTextarea"></textarea>
                <label for="floatingTextarea">Address<span class="error">* <?php echo $addressErr;?></span></label>
                

            </div>

            <button type="submit" class="btn btn-primary mt-3 ">Submit</button>

        </form>
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