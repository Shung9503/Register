<?php
    // Initialize the session
    session_start();
 
    // Check if the user is already logged in, if yes then redirect him to welcome page
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: welcome.php");
        exit;
    }
?>
<html>
    <head>
        <meta charset = "utf-8">
        <title>登入介面</title>
    </head>
    <body>
        <h1>Log In</h1>
        <h2>選擇登入或是註冊帳號</h2>
        <form method = "post" action = "login.php">
            帳號： <input type = "text" name = "username"><br><br>
            密碼： <input type = "password" name = "password"><br><br>
            <input type = "submit" value = "登入" name = "submit"><br><br>
            <a href = "register.html">還沒有帳號嗎？現在就註冊吧！</a>
        </form>
    </body>
</html>
