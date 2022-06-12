
<?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $email = $_POST['email'];
    $password = $_POST['password'];


    $user_data = $user->login($email, $password);

//        print_r($user_data);
//    die();



    if($user_data['password'] === $password)
    {

        $_SESSION['user_id'] = $user_data['user_id'];
        header("Location: index.php");

    }
}


?>


    <div id="box">

        <form method="post" class="form-box">
            <div style="font-size: 20px;margin: 10px;color: white;">Login</div>

            <label for="email">Email</label>
            <input id="text" type="text" name="email"><br><br>

            <label for="password">Password</label>
            <input id="text" type="password" name="password"><br><br>

            <input id="button" type="submit" value="Login"><br><br>

            <a href="registration.php">Click to Signup</a><br><br>
        </form>
    </div>



