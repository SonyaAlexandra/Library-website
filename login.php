<?php

session_start();  

include("./includes/connection.php");
include("./includes/functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['loginButton'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; 

    if (!empty($username) && !empty($password)) {
        $query = "SELECT * FROM accounts WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($con, $query); 

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            if ($user_data['password'] === $password) {
                $_SESSION['accountId'] = $user_data['accountId'];
                header("Location: index.php");
                exit;
            } 
        } 
        
        echo '<script>alert("Wrong Username or Password");</script>';
    } else {
        echo '<script>alert("Please enter a username and password");</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/book.js" defer></script>
    <script src="https://kit.fontawesome.com/b0f29e9bfe.js" crossorigin="anonymous"></script>
    <title>Library Readwise</title>
    
</head>
<body>
    <section id="loginbg">
        <div class="container-xxl d-flex justify-content-center align-items-center min-vh-100">
            <div class="row box-area">
                <div class="col-md-5 offset-md-3 leftbox p-5 welcome shadow rounded-3">
                    <div class="row align-items-center ">
                        <div class="head-text mb-4 ">
                            <h1 class="logo text-center fs-1 fw-bold">LIBRARY READWISE</h1>
                            <form class="container p-3 bg-white rounded-3 pt-4 mt-5" method="post">
                                <h5 class="p-3">Login to your account</h5>
                                <div class="mb-3">
                                  <label for="username" class="form-label pt-3">Username</label>
                                  <input type="text" class="form-control form-control-lg bg-light fs-6" id="username" name="username">
                                </div>
                                <div class="mb-3">
                                  <label for="password" class="form-label pt-2">Password</label>
                                  <input type="password" class="form-control form-control-lg bg-light fs-6" id="password" name="password">
                                </div>

                                <div class="d-grid gap-2">
                                    <input class="btn btn-primary p-3 my-3 rounded-5" type="submit" value="Log in" name="loginButton">
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <p>No account? <a href="signup.php"class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Create one!</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
</body>
</html>

<?php
mysqli_close($con);
?>