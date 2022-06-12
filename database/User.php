<?php


class User
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    public function check_login()
    {
//        echo "hello";
        if(isset($_SESSION['email']))
        {
//            var_dump($_SESSION['email']);

            $email = $_SESSION['email'];

            $result = $this->db->con->query("SELECT * FROM user WHERE email = '$email' limit 1");
//            var_dump($result);
//            die();
//            if($result && mysqli_num_rows($result) > 0)
            {

                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            }
        }
        header("Location: user.php");
//        redirect to login

    }


    public function login($email, $password ){
        if(!empty($email) && !empty($password) && !is_numeric($email))
        {
            //read from database
            $result = $this->db->con->query("SELECT * FROM user WHERE email = '$email' limit 1");

            $_SESSION["email"] = $email;

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)

                    $resultArray = '';

                    // fetch product data one by one
                    while ($items = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        $resultArray = $items;

                    }
                {
                    $_SESSION["first_name"] = $resultArray['first_name'];
                    return $resultArray;
                }
            }

//            echo "wrong username or password!";
        }else
        {
            echo "wrong username or password!";
        }
    }

    public function singUp($first_name, $last_name,$email, $password){
        if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($password))
        {
//            print_r($last_name);
//            die();
            //save to database


            $result = $this->db->con->query("INSERT INTO `user`( `first_name`, `last_name`, `email`, `password`) VALUES ('$first_name','$last_name','$email','$password')");

            $_SESSION["email"] = $email;

//            var_dump($result);
//             die();

            header("Location: index.php");
            die;
        }else
        {
            echo "Please enter some valid information!";
        }
    }
}