$(document).ready(function(){




    //banner owl careousel

    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items:1
    });

    // top sale owl carousel 
    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items:5
            }
        }
    });


    // isotope filter 
    var $grid = $(".grid").isotope({
        itemSelector : '.grid-item',
        layoutMode: 'fitRows'
    });

    // filter items on button click 
    $(".button-group").on("click","button",function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({filter: filterValue});
    });

    //new phones owl carousel 
    $("#new-phones .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items:5
            }
        }
    });

    //blogs owl carousel 
    $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            }
            
        }
    });


    // product qty session
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $input = $(".qty .qty_input");
    let $deal_price = $("#deal-price");

    // click on qty up button 
    $qty_up.click(function(e){
        alert("Hello");
        let $input =$(`.qty_input[data-id='${$(this).data("id")}']`);
        console.log($input);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        // change product price using ajax call
        $.ajax({url: "template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
            // console.log(result);
            let obj = JSON.parse(result);
            let item_price = obj[0]['item_price'];

            if($input.val()>=1 && $input.val()<=9){
                // alert("Hello!");
                $input.val(function(i,oldval){
                    return ++oldval;
                })

                // increase price of the product 
              $price.text(parseInt(item_price * $input.val()).toFixed(2));
            
              // set subtotal price 
              let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
  
              $deal_price.text(subtotal.toFixed(2));
            }

            

        }}); // closing ajax request 

        
      
    })

    $qty_down.click(function(e){

        let $input =$(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

           // change product price using ajax call
           $.ajax({url: "template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
            // console.log(result);
            let obj = JSON.parse(result);
            let item_price = obj[0]['item_price'];

            if($input.val()>1 && $input.val()<11){
                // alert("Hello!");
                $input.val(function(i,oldval){
                    return --oldval;
                })


                // increase price of the product 
              $price.text(parseInt(item_price * $input.val()).toFixed(2));
            
              // set subtotal price 
              let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
  
              $deal_price.text(subtotal.toFixed(2));
            }

            

        }}); // closing ajax request 
       
    })



        filter_data();

        function filter_data()
        {
            $('.filter_data').html('<div id="loading" style="" ></div>');
            var action = 'fetch_data';
            var search_text = $('#search_text').val();
            var minimum_price = $('#hidden_minimum_price').val();
            var maximum_price = $('#hidden_maximum_price').val();
            var brand = get_filter('brand');
            var ram = get_filter('ram');
            var storage = get_filter('storage');
            $.ajax({
                url:"fetch_data.php",
                method:"POST",
                data:{action:action, search_text: search_text, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, ram:ram, storage:storage},
                success:function(data){
                    $('.filter_data').html(data);
                }
            });
        }

        function get_filter(class_name)
        {
            var filter = [];
            $('.'+class_name+':checked').each(function(){
                filter.push($(this).val());
            });
            return filter;
        }

        $('.common_selector').click(function(){

            filter_data();
        });

        $('#price_range').slider({
            range:true,
            min:1000,
            max:65000,
            values:[1000, 65000],
            step:500,
            stop:function(event, ui)
            {
                $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
                $('#hidden_minimum_price').val(ui.values[0]);
                $('#hidden_maximum_price').val(ui.values[1]);
                filter_data();
            }
        });

});
