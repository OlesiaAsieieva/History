<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
}
h1 {
    text-align: center;
}
* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
    background-color: whitesmoke;
}
.container1 {
    padding: 16px;
    background-color: whitesmoke;
}

/* Full-width input fields */
input[type=email], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #fffff;
}

input[type=email]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 50px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #ff66ff;
    color: white;
    padding: 16px 20px;
    margin: 9px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: #ff66ff;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}

p {
    text-align: center;
}

</style>
</head>
<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вхід</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h1 class="text-center">Вхід</h1>
                    <p class="text-center">Введіть електронну пошту та пароль</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <label for="email"><b>Електронна пошта</b></label>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email" required value="<?php echo $email ?>">
                    </div>
                    <label for="email"><b>Пароль</b></label>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <!--<div class="link forget-pass text-left"><a href="forgot-password.php">Забули пароль?</a></div>-->
                    <div class="form-group">
                        <input class="registerbtn" type="submit" name="login" value="Ввійти">
                    </div>
                    <div class="container signin">Ще не авторизовані? <a href="signup-user.php">Зареєструватись</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>