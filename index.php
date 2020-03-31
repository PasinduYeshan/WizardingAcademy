<?php

$email = $password = "";
$errors = array("email" => '' , "password" => '');

if (isset($_POST["submit"])){
    if (empty($_POST["email"])){
        $errors["email"] = "Username can not be empty";
    }
    else{
        $email = $_POST["email"];
        if (!preg_match('/^[a-zA-Z\s]+$/',$email)){
            $errors["email"] = "Username is not valid";
        }
    }
    if (empty($_POST["password"])){
        $errors["password"] = "Password can not be empty";
    }else{
        $password = $_POST["password"];
        if (!preg_match('/^[a-zA-Z\s]+$/',$password)){
            $errors["password"] = "Password is not valid";
        }
    }
    if (!array_filter($errors)){
        header("Location: Homepage.html");
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Log In to PCCS Traffic System">
        <meta name="keywords" content="HTML,CSS,JavaScript">
        <meta name="author" content="PCCS">
        <meta name = "viewport" content = "width=device-width, initial scale=1.0">
        <link rel = "stylesheet" href = "Styles/LogInStyle.css">
        <script src="https://kit.fontawesome.com/35acfd843f.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Baloo+2:500&display=swap" rel="stylesheet">
        <title>Log in page</title>
    </head>

    <body onload="listFunction()">
        <img class = "background" src = "Sources/watercolor.jpg">
        <div class = "container">
            <div class = "img">
                <img src = "Sources/personalization.svg">
            </div>
            <div class = "login-container">
                <div class = "form">
                    <form action = "LogIn.php" method = "POST">

                        <img class = "avatar" src = "Sources/profile_avatar.svg">
                        <h2>Welcome</h2>

                        <div class = "input-div one focus">
                            <div class = "i">
                                <i class = "fas fa-user"></i>
                            </div>
                            <div>
                                <!--h5>Username</h5-->
                                <input class = "input" name = "email" type = "text" placeholder="Username" 
                                value = "<?php echo htmlspecialchars($email); ?>"> 
                            </div>
                            
                        </div>
                        <div class = 'error1' id = "user_error">
                                <?php echo $errors["email"]; ?>
                        </div>

                        <div class = "input-div two focus">
                            <div class = "i">
                                <i class = "fas fa-lock"></i>
                            </div>
                            <div>
                                <!--h5>Password</h5-->
                                <input class = "input" name = "password" type = "password" placeholder="Password" 
                                id = "myPassword" value = "<?php echo htmlspecialchars($password); ?>">
                            </div>
                            <div class = "i-eye">
                                <input type="checkbox" onclick="showPassword()">
                                <i class="far fa-eye"></i>
                            </div>

                            
                        </div>
                        <div class = 'error' id = "password_error">
                            <?php echo $errors["password"]; ?>
                        </div>
                        <a href = "#">Forgot Password?</a>
                        <input type ="submit" class = "btn" value = "Login" name = "submit"> 
                    </form>
                </div>
            </div>
        </div>
        <script type = "text/javascript" src = "js/LogIn.js"></script>        
    </body>
</html>