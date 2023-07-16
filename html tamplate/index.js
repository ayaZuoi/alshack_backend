$(document).ready(function(){

    // banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    });
    //end
    //top sale owl carousel 
    $("#top-sale .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        responsive:{
            0:{
                item:1

            },
            600:{
                item:3
            },
            1000:{
                items:5
            }

        }


    });
    //istoped filter
    var $grid = $(".grid").isotope({
        itemSelector : '.grid-items',
        layoutMode : 'fitRows'
    });
    $(".button-group").on("click", "button", function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue});
    })
//product qty section 
let $qty_up = $(".qty .qty-up");
let $qty_down = $(".qty .qty-down");
//let $input = $(".qty .qty_input");
 // click on qty up button
 $qty_up.click(function(e){
    let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
    if($input.val() >= 1 && $input.val() <= 9){
        
        $input.val(function(i, oldval){
            return ++oldval;
        })
 }
});
$qty_down.click(function(e){
    let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
            if($input.val() > 1 && $input.val() <= 10){
                $input.val(function(i, oldval){
                    return --oldval;
                });


                

        }}); // closing ajax request


});
