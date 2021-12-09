var products = document.getElementsByClassName("product");
for(var i = 0; i < products.length; i++)
{
    products[i].onmouseover = function(event) {
        event.currentTarget.children[0].children[1].style = "display: block;"
    };

    products[i].onmouseout = function(event) {
        event.currentTarget.children[0].children[1].style = "display: none;"
    };
}

var view_product_list = document.getElementsByClassName("view_product");
for(var i = 0; i < view_product_list.length; i++)
{
    view_product_list[i].children[0].onclick = function () {
        document.location = "product_page.php";
    }
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
}


jQuery(document).ready(($) => {
    $('.quantity').on('click', '.plus', function(e) {
        let $input = $(this).prev('input.qty');
        let val = parseInt($input.val());
        $input.val( val+1 ).change();
    });

    $('.quantity').on('click', '.minus', 
        function(e) {
        let $input = $(this).next('input.qty');
        var val = parseInt($input.val());
        if (val > 0) {
            $input.val( val-1 ).change();
        } 
    });
});