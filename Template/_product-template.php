<!--   Product  Page Content-->
<div class="container">
    <div class="row">
        <br>
        <h2 class="text-center">ALL PRODUCTS</h2>
        <br>
        <div class="col-md-3">
            <div class="list-group">
                <h3>Search</h3>

                <input class="form-control me-2 search" type="search" placeholder="Search" aria-label="Search" id="search_text" >
                <button class="btn btn-outline-success common_selector search mt-3" type="submit">Search</button>

            </div>
            <div class="list-group mt-4">
                <h3>Price</h3>
                <input type="hidden" name="" id="hidden_minimum_price" value="0">
                <input type="hidden" name="" id="hidden_maximum_price" value="0">
                <p id="price_show">1000 - 65000</p>
                <div id="price_range"></div>
            </div>
            <div class="list-group  mt-4">
                <h3>Brand</h3>
                <div class="" style="height:180px; overflow-y: auto; overflow-x: hidden;">
                    <?php


                    $brand = $product->getFilterData("item_brand");
                    foreach ($brand as $row) {
//                                print_r($row);
                        ?>

                        <div class="list-group-item checkbox">
                            <label for="">
                                <input type="checkbox" name="" id="" class="common_selector brand" value="<?php echo $row['item_brand']; ?>">
                                <?php echo $row['item_brand'] ?>
                            </label>
                        </div>

                        <?php
                    }
                    ?>


                </div>
            </div>
            <div class="list-group">
                <h3>RAM</h3>
                <?php
                $ram = $product->getFilterData("item_ram");

                foreach ($ram as $row) {
                    ?>

                    <div class="list-group-item checkbox">
                        <label for="">
                            <input type="checkbox" name="" id="" class="common_selector ram" value="<?php echo $row['item_ram'] ?>">
                            <?php echo $row['item_ram'] ?> GB
                        </label>
                    </div>

                    <?php
                }
                ?>
            </div>
            <div class="list-group mt-5">
                <h3>Internal Storage</h3>
                <?php
                $storage = $product->getFilterData("item_storage");

                foreach($storage as $row)
                {
                    ?>
                    <div class="list-group-item checkbox">
                        <label>
                            <input type="checkbox" class="common_selector storage" value="<?php echo $row['item_storage']; ?>"  >
                            <?php echo $row['item_storage']; ?> GB
                        </label>
                    </div>
                    <?php
                }
                ?>

            </div>

        </div>

        <div class="col-md-9">
            <br>
            <div class="row filter_data">

            </div>
        </div>
    </div>
</div>
<style>
    #loading
    {
        text-align:center;
        background: url('./assets/loader.gif') no-repeat center;
        height: 150px;
    }
</style>


