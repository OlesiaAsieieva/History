<?php
//require_once('C:\wamp\www\test16\views\user\login.php');
?>
<!DOCTYPE html>
<html lang="en">
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="description" content="">
 <meta name="author" content="">
<title>Easy_history</title>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.autorize {
  overflow: hidden;
  background-color: #ff66ff;
}

.autorize a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.autorize a:hover {
  background-color: #ddd;
  color: black;
}

.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 23px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: #ddd;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 23px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: #ddd;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 16px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Головна</title>
    <body>
                <div class="autorize">
                                            <?php// if (User::isGuest()): ?>  
                     <a href="\register1\login-user.php"></i> Вхід</a>
                                            <a href="\register1\signup-user"> Реєстрація</a>
                                            <?php //else: ?>
                                            <a href="\register1\logout-user">Вихід</a>
                                            <a href="#"></i>Акаунт</a>
                                        <?php //endif; ?>
                                    </ul>
                                </div>
                           
<div class="navbar">
    <a href="\register1\product\index.php">Головна</a>
    <div class="dropdown">
    <button class="dropbtn">Теми 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
         <a href="\register1\product\topic1.php">I світова війна</a>
    </div>
    </div>
    <div class="navbar">
      <a href="\register1\product\base_dates.php">Основні дати</a> 
    <div class="navbar"> 
     <a href="\register1\product\personalities.php">Персоналії</a>
    <div class="navbar"> 
     <a href="\register1\product\architectural_monuments.php">Пам'ятки архітектури</a>
     <div class="navbar"> 
     <a href="\register1\product\films.php">Фільми</a>
     <div class="navbar"> 
     <a href="\register1\tests">Перевірка знань</a>
  </div>
  </div>
     </div>
  </div>
</div>
</div>
</body>
</html> 
</head>