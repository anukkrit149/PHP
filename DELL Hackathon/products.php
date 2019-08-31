<!-- page main wrapper start -->
    <div class="shop-main-wrapper section-padding">
        <div class="container">
            <div class="row">
                <!-- shop main wrapper start -->
                <div class="col-lg-12">
                    <div class="shop-product-wrapper">
                        <!-- shop product top wrap start -->
                        <div class="shop-top-bar">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-6 order-2 order-md-1">
                                    <div class="top-bar-left">
                                        <div class="product-view-mode">
                                            <a class="active" href="#" data-target="grid-view" data-toggle="tooltip" title="Grid View"><i class="fa fa-th"></i></a>
                                            <a href="#" data-target="list-view" data-toggle="tooltip" title="List View"><i class="fa fa-list"></i></a>
                                        </div>
                                        <!--<div class="product-amount">-->
                                        <!--    <p>Showing 1–16 of 21 results</p>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                                <!--<div class="col-lg-5 col-md-6 order-1 order-md-2">-->
                                <!--    <div class="top-bar-right">-->
                                <!--        <div class="product-short">-->
                                <!--            <p>Sort By : </p>-->
                                <!--            <select class="nice-select" name="sortby">-->
                                <!--                <option value="trending">Relevance</option>-->
                                <!--                <option value="sales">Name (A - Z)</option>-->
                                <!--                <option value="sales">Name (Z - A)</option>-->
                                <!--                <option value="rating">Price (Low &gt; High)</option>-->
                                <!--                <option value="date">Rating (Lowest)</option>-->
                                <!--                <option value="price-asc">Model (A - Z)</option>-->
                                <!--                <option value="price-asc">Model (Z - A)</option>-->
                                <!--            </select>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                            </div>
                        </div>
                        <!-- shop product top wrap start -->

                        <!-- product item list wrapper start -->
                        <div class="shop-product-wrap grid-view row mbn-30" id="pdt">
                            <!-- product single item start -->
                            <?php
                            $i=0;
                            while(true){
                                
                                $q="SELECT * FROM `itempic`WHERE itID=".$res[$i]['itID'];
                                $img=$db->runQuery($q);
                                
                                if(empty($res[$i])) 
                                   break;
                                $temp_json=json_decode($res[$i]['itDes']);
                            echo "<div class='col-lg-3 col-md-4 col-sm-6'>
                                <!-- product grid start -->
                                <div class='product-item'>
                                    <figure class='product-thumb'>
                                        <a href='product-details.php?pid=".$res[$i]['itID']."'>
                                            <img class='pri-img' src='admin/".$img[0]['path']."' alt='product'>
                                            <img class='sec-img' src='admin/".$img[0]['path']."' alt='product'>
                                        </a>
                                        <div class='cart-hover'>
                                            <button class='btn btn-cart' onclick=\"window.location.href='cartAjax.php?ajax=0&pid=".$res[$i]['itID']."&cartitems".$_SESSION['totalitems']."&action=add'\" id='cartp'>add to cart</button>
                                            
                                        </div>
                                    </figure>
                                    <div class='product-caption text-center'>
                                        <div class='product-identity'>
                                            <p class='manufacturer-name'><a href='product-details.php?pid=".$res[$i]['itID']."'>Vimalsons</a></p>
                                        </div>
                                        <h6 class='product-name'>
                                            <a href='product-details.php?pid=".$res[$i]['itID']."'>".$res[$i]['itName']."</a>
                                        </h6>
                                        <div class='price-box'>
                                            <span class='price-regular'>&#x20b9 ".$res[$i]['itPrice']."</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid end -->

                                <!-- product list item end -->
                                <div class='product-list-item'>
                                    <figure class='product-thumb'>
                                        <a href='product-details.php?pid=".$res[$i]['itID']."'>
                                            <img class='pri-img' src='admin/".$img[0]['path']."' alt='product'>
                                            <img class='sec-img' src='admin/".$img[0]['path']."' alt='product'>
                                        </a>
                                        <div class='cart-hover'>
                                            <button class='btn btn-cart' id='cartp' >add to cart</button>
                                        </div>
                                    </figure>
                                    <div class='product-content-list'>
                                        <div class='manufacturer-name'>
                                            <a href='product-details.php?pid=".$res[$i]['itID']."'>VimalSons</a>
                                        </div>

                                        <h5 class='product-name'><a href='product-details.php?pid=".$res[$i]['itID']."'>".$res[$i]['itName']."</a></h5>
                                        <div class='price-box'>
                                            <span class='price-regular'>&#x20b9 ".$res[$i]['itPrice']."</span>
                                        </div>
                                        <p></p>
                                    </div>
                                </div>
                                <!-- product list item end -->
                            </div>";
                            $i++;
                            }
                            
                            
                            
                            ?>
                            
                            <!-- product single item start -->

                            

                            
                                <!-- product list item end -->
                            <!--</div>-->
                            <!-- product single item start -->
                        </div>
                        <!-- product item list wrapper end -->

                    </div>
                </div>
                <!-- shop main wrapper end -->
            </div>
        </div>
    </div>
    <!-- page main wrapper end -->