<?php
session_start();

$conn=mysqli_connect("localhost","root","","play");

if (isset($_POST['login_user'])) {
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $password= mysqli_real_escape_string($conn, $_POST['password']);

    // $errors = array();

    // if(empty($email)) {
    //     array_push($errors, "email required");

    // }

    // if(empty($password)) {
    //     array_push($errors, "password required");
        
    // }

   


        $query = "select * from admins where email='$email' and password='$password'";
        $result = mysqli_query($conn,$query);

        if (mysqli_num_rows($result)== 1) {
            echo $email;
            $_SESSION['email']=$email;
           
            header('location: index.php');

        }else {
            //array_push($errors,"wrong email and password");
            echo "Error";

        }
    
}


?>







<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />


</head>

<body>



    <div class="vh-100 d-flex justify-content-center align-items-center bg-secondary ">
        <div class="col-md-4 p-5 shadow-sm border rounded-5  bg-dark border-primary">
            <h2 class="text-center mb-4 text-primary">Login Form</h2>
            <form action="login.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-primary">Email address</label>
                    <input type="email " class="form-control text-light bg-info bg-opacity-10 border border-primary" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-primary">Password</label>
                    <input type="password text-light" class="form-control  text-light bg-info bg-opacity-10 border border-primary" id="exampleInputPassword1" name="password">
                </div>
                <div class="d-grid justify-content-center align-items-center">
                  
                      <button type="submit" name="login_user" class="btn btn-primary">login</button>
                   
                </div>
            </form>
            <div class="mt-3">
                
            </div>
        </div>
    </div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>


</html>