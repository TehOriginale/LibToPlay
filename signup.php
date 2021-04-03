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
        <form action="includes/signup.inc.php" method="post">
            <a href="index.php"><img class="mb-4"src="content/test_logo.png" alt="" width="140" height="200"></a>
            <h1>Sign up</h1>
            <label for="inputEmail" class="visually-hidden">
                Email adress
            </label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required>
            <label for="inputUsername" class = "visualy-hidden">Username</label>
            <input type="username" name="user" id="inputUsername" class="form-control" placeholder="Username" required>
            <label for="inputPassword" class="visually-hidden">
                Password
            </label>
            <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Password" required>
            <label for="confirmPassword" class="visually-hidden"> Confirm Password </label>
            <input type="password" name="pwdrepeat" id="confirmPassword" class="form-control" placeholder="Confirm Password" required>
            <button class="w-100 btn btn-lg btn-primary" name="submit" type="submit">Sign Up</button>
            <?php
            if (isset($_GET["error"])) {
                if($_GET["error"] == "invalidUid") {
                    echo "<p>Choose a valid username!</p>";
                }
                else if($_GET["error"] == "passwordsdontmatch") {
                    echo "<p>Passwords don't match!</p>";
                }
                else if($_GET["error"] == "usernametaken") {
                    echo "<p>Username or Email already taken</p>";
                }
                else if($_GET["error"] == "stmtfailed") {
                    echo "<p>Something went wrong! Try again</p>";
                }
                else if($_GET["error"] == "none") {
                    echo "<p>You have signed up!</p>";
                }
            }
        ?>
        </form>
        <div class="box-signin">
        Already have an account? 
        <div class="divider"></div>
        <a id="signin" href="login.php">Login</a>
        </div>

        
    </main>
</body>
</html>