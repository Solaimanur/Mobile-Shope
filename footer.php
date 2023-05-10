</main>


<!--!start#main-site-->

<!--start#footer-->

<footer id="footer"class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">
                <h4 class="font-rubik font-size-20">গরিবের Gadget</h4>
                <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, repellendus!</p>
            </div>
            <div class="col-lg-4 col-12">
                <h4 class="font-rubik font-size-20">Newslatter</h4>
                <form class="form-row">
                    <div class="col">
                        <input type="text"class="form-control"placeholder="Email *">
                    </div>
                    <div class="col">
                        <button type="submit"class="btn btn-primary mb-2">Subscribe</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Information</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="About_Us.html"class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                    <a href="#"class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
                    <a href="#"class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                    <a href="#"class="font-rale font-size-14 text-white-50 pb-1">Terms & Condition</a>
                </div>
            </div>
            <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Account</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="#"class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                    <a href="#"class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
                    <a href="#"class="font-rale font-size-14 text-white-50 pb-1">Wish List</a>
                    <a href="#"class="font-rale font-size-14 text-white-50 pb-1">Newslatters</a>
                </div>

            </div>
        </div>
    </div>
</footer>
<div class="copyright text-center bg-dark txt-white py-2">
    <p class="font-rale font-size-14">Copyrights 2021. Design By <a href="#"class="color-second">Copyrights 2021.DIU challengers</a> </p>
</div>
<!--!start#footer-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>



<!-- Owl Carousel Js file-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

<!--isotope plugin cdn-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script>


<script type="text/javascript">
    $('#banner-area .owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })

    $('#new-phones .owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
    //isotope filter
    var $grid = $(".grid").isotope({
        itemSelector:'.grid-item',
        layoutMode: 'fitRows'
    });

    //fiter items on button click
    $(".button-group").on("click","button",function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({filter: filterValue});
    })

    //New Phones owl carousel
    $('#top-sale .owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })

    //blogs owl carousel
    $('#blogs .owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            }

        }
    })

</script>



</body>
</html>