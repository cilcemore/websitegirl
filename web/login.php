
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">

    <title>Registration Form Abil</title>
</head>

<body>

      <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  

   
      <div class="boxlogin">
    
    <div class="container">
        <div class="row mt-3">
            <div class="col text-center">
                <h1>Login</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="username">Email Address</label>
                    <input type="email" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
              
                <div class="text-center">
                    <button type="submit"  class="btn" name="btn-login">Login</button>
                </div>
                <div class="text-center">
                    <span><a href="registrasi.php" class="btn2">Create Account</a></span>
                </div>

            </form>
        </div>
        </div>
    </div>



  </body>
</html>