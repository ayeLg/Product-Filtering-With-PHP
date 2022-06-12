<?php

ob_start();
// include header.php file
include('header.php');


?>
<style type="text/css">

    #text{

        /*height: 25px;*/
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        width: 100%;
    }

    #button{

        padding: 10px;
        width: 100px;
        color: white;
        background-color: lightblue;
        border: none;
    }

    .form-box{
        border: 1px solid red;
        background-color: grey;
        margin: 100px auto 0;
        width: 600px;
        padding: 20px;

    }

    #box {
        border: 1px solid black;
        width: 100%;
        height: 80vh;
    }

</style>
<?php


    include('Template/user/_signup.php');


?>

<?php
// include header.php file
include('footer.php');
?>
