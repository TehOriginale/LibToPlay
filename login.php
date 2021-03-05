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
<link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
</head> 

<body class="text-center">
    <main class="form-signin">
        <form>
            <img >
            <h1>Login</h1>
            <label for="inputEmail" class="visually-hidden">
                Email adress
            </label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
            <label for="inputPassword" class="visually-hidden">
                Password
            </label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

            
        </form>
        <div class="box-signin">
        New to LibToPlay? 
        <div class="divider"></div>
        <a>Create an account</a>
        </div>
        
    </main>
</body>
</html>