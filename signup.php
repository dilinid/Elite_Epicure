<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Epicure | Register</title>
    <link rel="shortcut icon" href="Images/logo1.png" type="image/x-icon">
    
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    color: #228b22;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

body {
    display: flex;
    padding: 0 7vw;
    min-height: 100vh;
    background: url('Images/bg3.jpg') no-repeat;
    background-size: cover;
    background-position: center;
}

.wrapper {
    width: 500px;
    height: 100%;
    background: transparents;
    color: white;
    padding: 30px 40px;
}

.wrapper h1 {
    font-size: 36px;
    margin-bottom: 30px;
}

.wrapper h1 span{
    text-decoration: underline;
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
    color: white;
    border-radius: 40px;
    font-size: 16px;
    font-weight: bolder;
    padding: 20px 45px 20px 20px;
}

.input-box input::placeholder {
    color: white;
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

.wrapper .register-link p{
    
    color: white;
    font-size: 18px;
    text-align: center;
    margin: 20px 0 15px;
}

.register-link p a {
    text-decoration: none;
    font-weight: bold;
}

.register-link p a:hover {
    text-decoration: underline;
    color: white;
}
    </style>
</head>

<body>
    
    <div class="wrapper">
        <form action="signupData.php" method="post">
            <h1><span>SignUp</span> here...</h1>

            <div class="input-box">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-box">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Mobile" name="mobile" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Confirm Password" required>
            </div>

            <button type="submit" class="btn">Submit</button>

            <div class="register-link">
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>

        </form>
    </div>
</body>
</html>