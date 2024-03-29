<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;300&display=swap" rel="stylesheet">
</head> 

<body class="text-center">
    <main class="form-signin">
        <form action="includes/login.inc.php" method="post">
            <a href="index.php"><img class="mb-4"src="content/test_logo.png" alt="" width="140" height="200"></a>
            <h1 style = "color: #008fff; font-style: Italic">Login</h1>
            <label for="inputLogin" class="visually-hidden">
                Email adress / Username
            </label>
            <input type="login" name="uid" id="inputLogin" class="form-control" placeholder="Email address / Username" required>
            <label for="inputPassword" class="visually-hidden">
                Password
            </label>
            <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Password" required>
    
            <button class="w-100 btn btn-lg btn-primary" name="submit"  type="submit">Login</button>

            <?php
            if (isset($_GET["error"])) {
                if($_GET["error"] == "wronglogin") {
                    echo "<p>Incorrect login information!</p>";
                }
            }
            ?>
        </form>
        <?php
        if($_GET["error"] == "nones") {
                    echo "<p>You have signed up!</p>";
                }
        ?>
        <div class="box-signin">
        New to LibToPlay? 
        <div class="divider"></div>
        <a id="signin" class="Logintext" href="signup.php" style = "color: #ef0cdf">Create an account</a>
        </div>
        
    </main>
</body>
</html>