<!doctype html>
<html lang="en">
    

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href ="style.css" rel="stylesheet">
    <title>LOGIN DULU!</title>
</head>

<body>
<?php
if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
        echo "<script type='text/javascript'>alert('Login gagal, Username atau Password salah');</script>";

    } else if ($_GET['pesan']=="logout"){
        echo "<script type='text/javascript'>alert('Anda telah Logout');</script>";
    }
}
?>
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-title text-center">LOGIN</h1>
            </div>
            <div class="card-text">
                <form action="login-check.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputUsername" class="form-label">Username</label>
                        <input type="username" class="form-control" id="exampleInputUsername" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>