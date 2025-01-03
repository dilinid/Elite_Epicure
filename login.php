<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Epicure | Login</title>
    <link rel="shortcut icon" href="Images/logo1.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    color: white;
    font-weight: bold;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

body {
    display: flex;
    padding: 0 7vw;
    min-height: 100vh;
    background: url('Images/bg6.jpg') no-repeat;
    background-size: cover;
    background-position: center;
}

.wrapper h1 {
    font-size: 36px;
    margin-bottom: 30px;
}

.wrapper {
    width: 550px;
    height: 100%;
    background: transparent;
    color: white;
    padding: 30px 40px;
}

.wrapper .input-box {
    width: 100%;
    height: 50px;
    position: relative;
    margin-bottom: 15px;
   
}

.input-box input {
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid white;
    border-radius: 40px;
    font-size: 16px;
    color: #ffa500;
    padding: 20px 45px 20px 20px;
}

.input-box input::placeholder {
    color: white;
}

.input-box i {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
}

.wrapper .remember-forgot {
    display: flex;
    justify-content: space-between;
    font-size: 16px;
    margin-bottom: 15px;
}

.remember-forgot label input {
    accent-color: white;
    margin-right: 3px;
}

.remember-forgot a {
    color: white;
    text-decoration: none;
}

.remember-forgot a:hover {
    text-decoration: underline;
    color: #ffa500;
}

.wrapper .btn{
    cursor: pointer;
    width: 100%;
    margin-top: 20px;
    font-size: 25px;
    font-weight: bold;
    color: #228b22;
    line-height: 50px;
    background-color: #ffa500;
    border-radius: 40px;
    border: 1px solid #ffa500;
    transition: all 0.2s;
}

.btn:hover{
    background-color: white;
    border: 1px solid #ffa500;
    color: #ffa500;
}

.btn:hover i{
    color: #ffa500;
}
    </style>

</head>


<body>

    <div class="wrapper">
        <form action="loginData.php" method="post">
            <h1>Welcome to <br><u><a href="index.html">Elite Epicure</a></u></Elite>. . . . .</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" name="username" required>
                <i class='bx bxs-user' ></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit" class="btn">Login</button>

        </form>
    </div>
</body>
</html>
