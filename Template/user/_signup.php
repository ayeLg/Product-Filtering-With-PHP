
<?php



    if($_SERVER['REQUEST_METHOD'] == "POST")
    {


        //something was posted
//        $user_id = $_SESSION['user_id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

//        print_r($first_name);
//        die();
        $user->singUp( $first_name,$last_name,$email, $password);
    }
?>



    <div id="box">

        <form method="post" class="form-box">
            <div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

            <label for="first_name">First Name</label>
            <input id="text" type="text" name="first_name"><br><br>

            <label for="last_name">Last Name</label>
            <input id="text" type="text" name="last_name"><br><br>

            <label for="email">Email</label>
            <input id="text" type="text" name="email"><br><br>

            <label for="Password">Password</label>
            <input id="text" type="password" name="password"><br><br>

            <input id="button" type="submit" value="Signup"><br><br>

            <a href="index.php">Click to Login</a><br><br>
        </form>
    </div>



