<?php


    ob_start();
    // include header.php file
    include('header.php');

//    die();


 $user_data = $user->check_login();
// var_dump($user_data);
// die();
?>

<?php
//$user_data = $user->check_login();
/* include banner area */
include('Template/_banner-area.php');
/* include banner area */
?>

<?php
/* include top sale */
include('Template/_top-sale.php');
/* include top sale*/
?>
<?php
/* include speical price */
include('Template/_special-price.php');
/* include speical price */
?>
<?php
/* include banner ads */
include('Template/_banner-ads.php');
/* include banner ads */
?>

<?php
/* include new phones  */
include('Template/_new-phones.php');
/* include new phones  */
?>

<?php
/* include blogs  */
include('Template/_blogs.php');
/* include blogs  */
?>








<?php 
    // include header.php file
    include('footer.php');
?>