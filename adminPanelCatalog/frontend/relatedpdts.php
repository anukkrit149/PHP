<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 25-07-2019
 * Summary-
 * API Used-
 * Limitations-
 */
// var_dump($db);
// exit();
// include "dbcontroller.php";
// $dbc= new DBController();

// $db->connectDB();

// var_dump($dbc);
// exit();
//$row_f=$pdo->prepare("SELECT * FROM `item` WHERE featured=1");
$pdo->exec();
$row_f=$pdo->fetchAll();
$i=0;
var_dump($row_f);
exit();
while(true){
    if(empty($row_f[$i]))
        break;
    $pic_rows=$pdo->query('SELECT * FROM itempic WHERE itID='.$row_f[$i]['itID']);
    echo "<div class=\"banner-slide-item\">
                                <figure class=\"banner-statistics\">
                                    <a href=\"#\">
                                        <img src=\"assets/img/banner/img1-middle.jpg\" alt=\"product banner\">
                                    </a>
                                    <div class=\"banner-content banner-content_style2\">
                                        <h5 class=\"banner-text3\"><a href=\"#\">BRACELATES</a></h5>
                                    </div>
                                </figure>
                            </div>";
    $i++;

}


?>




