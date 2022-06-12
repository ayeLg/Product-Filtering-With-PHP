<?php

require('functions.php');
// request method post
if($_SERVER['REQUEST_METHOD'] == "POST") {


    if (isset($_POST['top_sale_submit'])) {

        echo  "Hello";
        die();

        // call method addToCart
        $cart->addToCart($_POST['user_id'], $_POST['item_id']);

    }


}



if(isset($_POST["action"]))
{
    $search = $_POST["search_text"];
//    var_dump($search);
//    die();
    $search = trim($search, " GB");


    $query = "SELECT * FROM product WHERE item_status = '1' ";

    if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
    {

        $query .= "
		 AND item_price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
    }
    if(isset($_POST["brand"]))
    {

        $brand_filter = implode("','", $_POST["brand"]);
        $query .= "
		 AND item_brand IN('".$brand_filter."')
		";
    }
    if(isset($_POST["ram"]))
    {

        $ram_filter = implode("','", $_POST["ram"]);
        $query .= "
		 AND item_ram IN('".$ram_filter."')
		";
    }
    if(isset($_POST["storage"]))
    {

        $storage_filter = implode("','", $_POST["storage"]);
        $query .= "
		 AND item_storage IN('".$storage_filter."')
		";
    }
    if(!empty($search))
    {
//        var_dump($search);
//        die();
        $query = "
		 SELECT * FROM product WHERE item_status = '1'  AND item_name LIKE '%$search%' OR item_brand LIKE '%$search%' OR item_ram LIKE '%$search%' OR item_storage  LIKE '%$search%  '
		";
    }
//    echo $query;
//    die();
    $result = $db->con->query($query);
//    print_r($result);
//    die();
    $resultArray = array();
    // fetch product data one by one
    while ($items = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $resultArray [] = $items;

    }

    $total_row = count($resultArray);


    if($total_row > 0)
    {
        foreach($result as $item)
        {


?>

<div class="col-sm-4 col-lg-3 col-md-3">
    <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
        <a href="<?php printf('%s?item_id=%s','product.php',$item['item_id']) ?>"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" alt="product1" class="img-fluid"></a>
        <p align="center"><strong><a href="#"><?php echo $item['item_name'] ?></a></strong></p>
        <h4 style="text-align:center;" class="text-danger" >$<?php echo $item['item_price'] ?></h4>
        <p>
            Brand : <?php echo $item['item_brand'] ?><br />
            RAM : <?php echo $item['item_ram'] ?> GB<br />
            Storage : <?php echo $item['item_storage'] ?> GB </p>

        <form action="" method="post" class="text-center">
            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?> ">
            <input type="hidden" name="user_id" value="<?php echo '1'; ?> ">
<!--            --><?php
//            if(in_array($item['item_id'],$cart->getCartId( $product->getData('cart')) ?? [] )){
//                echo '<button type="submit" disabled name="top_sale_submit" class="btn btn-success font-size-12">In the Cart</button>';
//            } else {
//                echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to cart</button>';
//            }
//            ?>
            <a href="<?php printf('%s?item_id=%s','product.php',$item['item_id']) ?>" class="btn btn-success font-size-12">View Details</a>


        </form>
    </div>

</div>

<?php
        }
    } else {
    ?>

        <h3>No Data Found</h3>
        <?php
    }
}
            ?>



