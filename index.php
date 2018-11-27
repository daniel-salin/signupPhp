<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>POST EXERCISE</title>
    <style>
    .form-group-colors {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            justify-items: center;
            margin-top: 10px;
        }
        label {
            font-size: 1.1em;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<?php if(!isset($_POST['submit'])) :?>
    <header>
        <h1>Sign Up Form</h1>
    </header>
    <main>
       
    <form action="#" method="POST">
        <label for="name">Enter your name:</label>
        <input type="text" name="name" required>
        <label for="email">Enter your email:</label>
        <input type="email" name="email">
        <label for="pwd">Enter your password:</label>
        <input type="password" name="pwd" required>
        <label for="pwdCheck">Enter your password:</label>
        <input type="password" name="pwdCheck" required>
        <?php 
            if(isset($_GET['pwderror'])) : 
                echo "<p class='error-message'>Password error: " .$_GET['pwderror'] ."</p>";
            endif; 
        ?>
        <div class="form-group-colors">
            <label for="color">Select border color:</label>
            <label for="color">Select background color:</label>
            <label for="color">Select text color:</label>
            <input type="color" name="borderColor" required>
            <input type="color" name="bgColor" required>
            <input type="color" name="textColor" required>
        </div>
        <input class="btn" type="submit" name="submit" value="Send">
        <a class="btn" href="index.php">Reset</a>
    </form>
    <aside>
            <h3>Your password must contain:</h3>
            <ul>
                <li>At least one lower case letter</li>
                <li>At least one upper case letter</li>
                <li>A number</li>
                <li>One of the following characters: ! ? -</li>
            </ul>
        </aside>
        <?php 
        else:
            require 'signup.php';
        endif;
        ?>
    </main>
   
</body>
</html>


