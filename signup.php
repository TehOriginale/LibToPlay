<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signup.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;300&display=swap" rel="stylesheet">
</head> 

<body class="text-center">
    <main class="form-signin">
        <form>
            <a href="index.php"><img class="mb-4"src="content/test_logo.png" alt="" width="140" height="200"></a>
            <h1>Sign up</h1>
            <label for="inputEmail" class="visually-hidden">
                Email adress
            </label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
            <label for="inputPassword" class="visually-hidden">
                Password
            </label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <label for="confirmPassword" class="visually-hidden"> Confirm Password </label>
            <input type="confirm" id="confirmPassword" class="form-control" placeholder="Confirm Password" required>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>

            
        </form>
        <div class="box-signin">
        Already have an account? 
        <div class="divider"></div>
        <a id="signin" href="login.php">Login</a>
        </div>
        
    </main>
</body>
</html>