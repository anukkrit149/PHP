<!doctype html>
<html class="no-js" lang="zxx">



<?php include ('elements/header.php'); ?>

<body>
<?php include ('elements/top-bar.php'); ?>

<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 23-07-2019
 * Summary-
 * API Used-
 * Limitations-
 */



include 'admin/classes/items.php';
include 'admin/connection.php';


$id=$_GET['pid'];

$itemob= new items("ex","des","cat",898);

//$itemob->itemID=$id;
$itemob->setPdo($pdo);

function objectToArray($d) {
    if (is_object($d)) {
        // Gets the properties of the given object
        // with get_object_vars function
        $d = get_object_vars($d);
    }

    if (is_array($d)) {
        /*
        * Return array converted to object
        * Using __FUNCTION__ (Magic constant)
        * for recursive call
        */
        return array_map(__FUNCTION__, $d);
    }
    else {
        // Return array
        return $d;
    }
}


$res=json_decode($itemob->getDetailsItemID($id));

// echo "<script>console.log('".$res."')</script>";


$res=objectToArray($res);
// echo $res['itName'];
$table=objectToArray(json_decode($res["itDes"]));

$pic=$pdo->query('SELECT * FROM `itempic` WHERE itID='.$id);

// var_dump(json_decode($res["itDes"]));
// var_dump($res["itDes"]);
// exit();
?>




<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="shop.php">shop</a></li>
                                <!--<li class="breadcrumb-item " aria-current="page">Category</li>-->
                                <li class="breadcrumb-item active" aria-current="page">Product</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- page main wrapper start -->
    <div class="shop-main-wrapper section-padding pb-0">
        <div class="container">
            <div class="row">
                <!-- product details wrapper start -->
                <div class="col-lg-12 order-1 order-lg-2">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider">
                                    <?php
                                    foreach ($pic as  $value) {
                                        echo"<div class='pro-large-img img-zoom'>
                                            <img src=admin/".$value['path']." alt='product-details' />
                                        </div>";
                                    }
                                    ?>
                                    <!--<div class="pro-large-img img-zoom">-->
                                    <!--    <img src="assets/img/product/product-details-img1.jpg" alt="product-details" />-->
                                    <!--</div>-->
                                    <!--<div class="pro-large-img img-zoom">-->
                                    <!--    <img src="assets/img/product/product-details-img2.jpg" alt="product-details" />-->
                                    <!--</div>-->
                                    <!--<div class="pro-large-img img-zoom">-->
                                    <!--    <img src="assets/img/product/product-details-img3.jpg" alt="product-details" />-->
                                    <!--</div>-->
                                    <!--<div class="pro-large-img img-zoom">-->
                                    <!--    <img src="assets/img/product/product-details-img4.jpg" alt="product-details" />-->
                                    <!--</div>-->
                                    <!--<div class="pro-large-img img-zoom">-->
                                    <!--    <img src="assets/img/product/product-details-img5.jpg" alt="product-details" />-->
                                    <!--</div>-->
                                </div>
                                <div class="pro-nav slick-row-10 slick-arrow-style">
                                    <?php
                                    foreach ($pic as  $value) {
                                        echo"<div class='pro-nav-thumb'>
                                            <img src='admin/".$value['path']."' alt='product-details' />
                                        </div>";
                                    }
                                    ?>
                                    <!--<div class="pro-nav-thumb">-->
                                    <!--    <img src="assets/img/product/product-details-img1.jpg" alt="product-details" />-->
                                    <!--</div>-->
                                    <!--<div class="pro-nav-thumb">-->
                                    <!--    <img src="assets/img/product/product-details-img2.jpg" alt="product-details" />-->
                                    <!--</div>-->
                                    <!--<div class="pro-nav-thumb">-->
                                    <!--    <img src="assets/img/product/product-details-img3.jpg" alt="product-details" />-->
                                    <!--</div>-->
                                    <!--<div class="pro-nav-thumb">-->
                                    <!--    <img src="assets/img/product/product-details-img4.jpg" alt="product-details" />-->
                                    <!--</div>-->
                                    <!--<div class="pro-nav-thumb">-->
                                    <!--    <img src="assets/img/product/product-details-img5.jpg" alt="product-details" />-->
                                    <!--</div>-->
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-des">
                                    <div class="manufacturer-name">
                                        <a href="product-details.php">VimalSons</a>
                                    </div>
                                    <h3 class="product-name"><?php  echo $res['itName'];  ?></h3>

                                    <div class="price-box">
                                        <span class="price-regular"> &#x20b9 <?php  echo $res['itPrice'];  ?></span>
                                    </div>
                                    <div id="pid"><?php  echo $res['itID'];  ?></div>
                                    <p class="pro-desc"><?php  echo $table['Description'];  ?></p>
                                    <div class="quantity-cart-box d-flex align-items-center">
                                        <div class="action_link">
                                            <a class="btn btn-cart2" href="#" id="cartp">Add to cart</a>
                                        </div>
                                    </div>

                                    <div class="like-icon">
                                        <h2>Share</h2>
                                        <!--<a href="#"><i class="fa fa-share fa-3x"></i></a>-->
                                        <a id="sharewat" href="#"><i class="fa fa-whatsapp fa-3x"></i></a>
                                    </div>
                                    <div class="product-review-info">
                                        <ul class="nav review-tab">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#tab_one">description</a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tab_two">information</a>
                                            </li>

                                        </ul>
                                        <div class="tab-content reviews-tab">
                                            <div class="tab-pane fade show active" id="tab_one">
                                                <div class="tab-one">
                                                    <p><?php  echo $table['Description'];  ?></p>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab_two">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                    <?php
                                                    foreach ($table as $key => $value) {
                                                        echo"<tr><td>".$key."</td><td>".$value."</td></tr>";
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details inner end -->

                    <!-- product details reviews start -->

                    <!-- product details reviews end -->
                </div>
                <!-- product details wrapper end -->
            </div>
        </div>
    </div>
    <!-- page main wrapper end -->

    <!-- related products area start -->
    <section class="related-products section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title start -->
                    <div class="section-title text-center">
                        <h2 class="title">Related Products</h2>
                        <p class="sub-title">Add related products to weekly lineup</p>
                    </div>
                    <!-- section title start -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-carousel-4 slick-row-10 slick-arrow-style">
                        <!-- product item start -->
                        <div class="product-item">
                            <figure class="product-thumb">
                                <a href="product-details.html">
                                    <img class="pri-img" src="assets/img/product/product-11.jpg" alt="product">
                                    <img class="sec-img" src="assets/img/product/product-8.jpg" alt="product">
                                </a>

                                <div class="button-group">
                                    <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                    <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
                                </div>
                                <div class="cart-hover">
                                    <button class="btn btn-cart">add to cart</button>
                                </div>
                            </figure>
                            <div class="product-caption text-center">
                                <div class="product-identity">
                                    <p class="manufacturer-name"><a href="product-details.html">Gold</a></p>
                                </div>

                                <h6 class="product-name">
                                    <a href="product-details.html">Perfect Diamond Jewelry</a>
                                </h6>
                                <div class="price-box">
                                    <span class="price-regular">$60.00</span>
                                </div>
                            </div>
                        </div>
                        <!-- product item end -->

                        <!-- product item start -->
                        <div class="product-item">
                            <figure class="product-thumb">
                                <a href="product-details.html">
                                    <img class="pri-img" src="assets/img/product/product-12.jpg" alt="product">
                                    <img class="sec-img" src="assets/img/product/product-7.jpg" alt="product">
                                </a>

                                <div class="button-group">
                                    <!--<a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>-->
                                    <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
                                </div>
                                <div class="cart-hover">
                                    <button class="btn btn-cart">add to cart</button>
                                </div>
                            </figure>
                            <div class="product-caption text-center">
                                <div class="product-identity">
                                    <p class="manufacturer-name"><a href="product-details.html">mony</a></p>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-details.html">Handmade Golden Necklace</a>
                                </h6>
                                <div class="price-box">
                                    <span class="price-regular">$50.00</span>
                                    <span class="price-old"><del>$80.00</del></span>
                                </div>
                            </div>
                        </div>
                        <!-- product item end -->

                        <!-- product item start -->
                        <div class="product-item">
                            <figure class="product-thumb">
                                <a href="product-details.html">
                                    <img class="pri-img" src="assets/img/product/product-13.jpg" alt="product">
                                    <img class="sec-img" src="assets/img/product/product-6.jpg" alt="product">
                                </a>
                                <div class="product-badge">
                                    <div class="product-label new">
                                        <span>new</span>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                    <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
                                </div>
                                <div class="cart-hover">
                                    <button class="btn btn-cart">add to cart</button>
                                </div>
                            </figure>
                            <div class="product-caption text-center">
                                <div class="product-identity">
                                    <p class="manufacturer-name"><a href="product-details.html">Diamond</a></p>
                                </div>
                                <ul class="color-categories">
                                    <li>
                                        <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                    </li>
                                    <li>
                                        <a class="c-darktan" href="#" title="Darktan"></a>
                                    </li>
                                    <li>
                                        <a class="c-grey" href="#" title="Grey"></a>
                                    </li>
                                    <li>
                                        <a class="c-brown" href="#" title="Brown"></a>
                                    </li>
                                </ul>
                                <h6 class="product-name">
                                    <a href="product-details.html">Perfect Diamond Jewelry</a>
                                </h6>
                                <div class="price-box">
                                    <span class="price-regular">$99.00</span>
                                    <span class="price-old"><del></del></span>
                                </div>
                            </div>
                        </div>
                        <!-- product item end -->

                        <!-- product item start -->
                        <div class="product-item">
                            <figure class="product-thumb">
                                <a href="product-details.html">
                                    <img class="pri-img" src="assets/img/product/product-14.jpg" alt="product">
                                    <img class="sec-img" src="assets/img/product/product-5.jpg" alt="product">
                                </a>
                                <div class="product-badge">
                                    <div class="product-label new">
                                        <span>sale</span>
                                    </div>
                                    <div class="product-label discount">
                                        <span>15%</span>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                    <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
                                </div>
                                <div class="cart-hover">
                                    <button class="btn btn-cart">add to cart</button>
                                </div>
                            </figure>
                            <div class="product-caption text-center">
                                <div class="product-identity">
                                    <p class="manufacturer-name"><a href="product-details.html">silver</a></p>
                                </div>
                                <ul class="color-categories">
                                    <li>
                                        <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                    </li>
                                    <li>
                                        <a class="c-darktan" href="#" title="Darktan"></a>
                                    </li>
                                    <li>
                                        <a class="c-grey" href="#" title="Grey"></a>
                                    </li>
                                    <li>
                                        <a class="c-brown" href="#" title="Brown"></a>
                                    </li>
                                </ul>
                                <h6 class="product-name">
                                    <a href="product-details.html">Diamond Exclusive Ornament</a>
                                </h6>
                                <div class="price-box">
                                    <span class="price-regular">$55.00</span>
                                    <span class="price-old"><del>$75.00</del></span>
                                </div>
                            </div>
                        </div>
                        <!-- product item end -->

                        <!-- product item start -->
                        <div class="product-item">
                            <figure class="product-thumb">
                                <a href="product-details.html">
                                    <img class="pri-img" src="assets/img/product/product-15.jpg" alt="product">
                                    <img class="sec-img" src="assets/img/product/product-4.jpg" alt="product">
                                </a>
                                <div class="product-badge">
                                    <div class="product-label new">
                                        <span>new</span>
                                    </div>
                                    <div class="product-label discount">
                                        <span>20%</span>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                    <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
                                </div>
                                <div class="cart-hover">
                                    <button class="btn btn-cart">add to cart</button>
                                </div>
                            </figure>
                            <div class="product-caption text-center">
                                <div class="product-identity">
                                    <p class="manufacturer-name"><a href="product-details.html">mony</a></p>
                                </div>
                                <ul class="color-categories">
                                    <li>
                                        <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                    </li>
                                    <li>
                                        <a class="c-darktan" href="#" title="Darktan"></a>
                                    </li>
                                    <li>
                                        <a class="c-grey" href="#" title="Grey"></a>
                                    </li>
                                    <li>
                                        <a class="c-brown" href="#" title="Brown"></a>
                                    </li>
                                </ul>
                                <h6 class="product-name">
                                    <a href="product-details.html">Citygold Exclusive Ring</a>
                                </h6>
                                <div class="price-box">
                                    <span class="price-regular">$60.00</span>
                                    <span class="price-old"><del>$70.00</del></span>
                                </div>
                            </div>
                        </div>
                        <!-- product item end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- related products area end -->
</main>

<!-- Scroll to top start -->
<div class="scroll-top not-visible">
    <i class="fa fa-angle-up"></i>
</div>
<!-- Scroll to Top End -->

<script>


    $('#cartp').on('click',function(){
        $.ajax({
            type: 'POST',
            url: 'cartAjax.php',
            data: {
                action:"add",
                pid:parseInt($('#pid').text()),
                cartitems:parseInt($('#cartno').text())
            },
            success: function (data) {
                console.log(data);
                data=JSON.parse(data);
                console.log(data);
                console.log($('#pid').text());
                var value=parseInt($('#cartno').text())
                // console.log(
                value+=1
                // );
                $('#cartno').text(value)
                // =value.toString();

            }
        })

    });

</script>

<script>
    $('#sharewat').on('click',function(){


        $(this).attr('href',"whatsapp://send?text="+encodeURIComponent(window.location.href));


    });



</script>

<?php include ('elements/footer.php'); ?>
</body>



</html>