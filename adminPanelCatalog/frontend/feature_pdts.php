<?php

$rows_f=$db->runQuery("SELECT * FROM `item`");





?>



<!-- featured product area start -->
        <section class="feature-product section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- section title start -->
                        <div class="section-title text-center">
                            <h2 class="title">featured products</h2>
                            <p class="sub-title">Add featured products to weekly lineup</p>
                        </div>
                        <!-- section title start -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-carousel-4_2 slick-row-10 slick-arrow-style">
                            <!-- product item start -->
                            <?php
                            foreach ($rows_f as $value)
                                $pic_rows=$db->runQuery('SELECT * FROM itempic WHERE itID='.$value['itID']);
                                echo "<div class='product-item'>
                                    <figure class='product-thumb'>
                                        <a href='product-details.php?pid=".$row_f[$i]['itID']."'>
                                            <img class='pri-img' src='admin/".$pic_rows[$i]['path']."' alt='product'>
                                            <img class='sec-img' src='admin/".$pic_rows[$i]['path']."' alt='product'>
                                        </a>
               
                                    </figure>
                                    <div class='product-caption text-center'>
                                        <div class='product-identity'>
                                            <p class='manufacturer-name'><a href='product-details.php?pid=".$row_f[$i]['itID']."'>Vimalsons</a></p>
                                        </div>
                                        <h6 class='product-name'>
                                            <a href='product-details.php?pid=".$row_f[$i]['itID']."'>".$row_f[$i]['itName']."</a>
                                        </h6>
                                        <div class='price-box'>
                                            <span class='price-regular'>&#x20b9 ".$row_f[$i]['itPrice']."</span>
                                        </div>
                                    </div>
                                </div>";

                            ?>

                            <!-- product item end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- featured product area end -->