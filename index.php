<?php

$email = $password = "";
$errors = array("email" => '' , "password" => '');

if (isset($_POST["submit"])){
    if (empty($_POST["email"])){
        $errors["email"] = "Username can not be empty";
    }
    else{
        $email = $_POST["email"];
        
            if ($email != "artemis" and $email != "Artemis"){
                $errors["email"] = "Only a goddes can find what you seek";
            }
    }
    if (empty($_POST["password"])){
        $errors["password"] = "Password can not be empty";
    }else{
        $password = $_POST["password"];
        
            if ($password != "alohomora"){
                $errors["password"] = "Muggles are not allowed! Obliviate";
            }
        
    }
    if (!array_filter($errors)){
        if($email = "artemis" and $password = "alohomora"){
            header("Location: MainPage/index.html");
        }
    }
}


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Log in to YeshanWizardWorld">
        <meta name="keywords" content="HTML,CSS,JavaScript">
        <meta name="author" content="Yeshan">
        <meta name = "viewport" content = "width=device-width, initial scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel = "stylesheet" href = "Styles/LogInStyle.css">
        <script src="https://kit.fontawesome.com/35acfd843f.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Baloo+2:500&display=swap" rel="stylesheet">
        <title>Log in page</title>
    </head>

    <body>
        <img class = "background" src = "Sources/hogwarts.jpg">
        <div class = "container">
            <div class = "login-container">
                <div class = "form">
                    <form action = "index.php" method = "POST">

                        <img class = "avatar" src = "Sources/profile_avatar.svg">
                        <h2>Apparition </h2>

                        <div class = "input-div one">
                            <div class = "i">
                                <i class = "fas fa-user"></i>
                            </div>
                            <div class = "inputBox">
                                <!--h5>Username</h5-->
                                <input class = "input" name = "email" type = "text" placeholder="Username" 
                                value = "<?php echo htmlspecialchars($email); ?>"> 
                            </div>
                            
                        </div>
                        <div class = 'error' id = "user_error">
                                <?php echo $errors["email"]; ?>
                        </div>

                        <div class = "input-div two">
                            <div class = "i">
                                <i class = "fas fa-lock"></i>
                            </div>
                            <div class = "inputBox">
                                <!--h5>Password</h5-->
                                <input class = "input" name = "password" type = "password" placeholder="Password" 
                                id = "myPassword" value = "<?php echo htmlspecialchars($password); ?>">
                            </div>
                            <div class = "i-eye">
                                <button type = "button" class = "btn btn-sm btn-dark" data-toggle = "button"
                                aria-pressed="false" autocomplete="off" onclick="showPassword()" id = "eye-btn">
                                <i class="far fa-eye" id = "eye-icon"></i>
                                </button>
                            </div>
                            
                        </div>
                        <div class = 'error' id = "password_error">
                            <?php echo $errors["password"]; ?>
                        </div>

                        <a href = "#">Forgot Password?</a>
                        <input type ="submit" class = "btn-submit" value = "Alberto" name = "submit"> 
                    </form>
                </div>
            </div>
        </div>
        <script type = "text/javascript" src = "js/LogIn.js"></script>        
    </body>
</html> 
