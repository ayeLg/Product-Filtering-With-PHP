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
    // let $input = $(".qty .qty_input");

    // click on qty up button 
    $qty_up.click(function(e){
        alert('hello');
        let $input =$(`.qty_input[data-id='${$(this).data("id")}']`);
        if($input.val()>=1 && $input.val()<=9){
            // alert("Hello!");
            $input.val(function(i,oldval){
                return ++oldval;
            })
        }
    })

    $qty_down.click(function(e){
        let $input =$(`.qty_input[data-id='${$(this).data("id")}']`);
        if($input.val()>1 && $input.val()<10){
            // alert("Hello!");
            $input.val(function(i,oldval){
                return --oldval;
            })
        }
    })
    
});