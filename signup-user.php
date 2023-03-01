<?php //require_once "layouts/header.php"; ?>
<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Реєстрація</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user.php" method="POST" autocomplete="">
                    <h1 class="text-center">Реєстрація</h1>
                    <p class="text-center">Введіть ваші дані</p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <label for="name"><b>Ім'я</b></label>
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Name" required value="<?php echo $name ?>">
                    </div>
                    <label for="email"><b>Електронна пошта</b></label>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email" required value="<?php echo $email ?>">
                    </div>
                    <label for="psw"><b>Пароль</b></label>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <label for="psw"><b>Повторний пароль</b></label>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                    </div>
                    <div class="form-group">
                        <input class="registerbtn" type="submit" name="signup" value="Зареєструватись">
                    </div>
                    <div class="container signin">Вже маєте акаунт? <a href="login-user.php">Ввійти</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
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
input[type=text],input[type=email], input[type=password], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: white;
}

input[type=text]:focus, input[type=email]:focus, input[type=password]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 5px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #ff66ff;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
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
h1 {
    text-align: center;
}
p {
    text-align: center;
}
</style>
</head>

</body>
</html>
