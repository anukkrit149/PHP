<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 07-08-2019
 * Summary-
 * API Used-
 * Limitations-
 */

session_set_cookie_params(time()+60*60*24*30,);
function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$_COOKIE["cart_item"]
if (!isset($_COOKIE)){
    $ip=getUserIpAddr();
    $access_key = 'ddc34b40e4ccf3a9650fe2555623870f';


    $ch = curl_init('http://api.ipstack.com/'.$ip.'?access_key='.$access_key.'');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


    $json = curl_exec($ch);
    curl_close($ch);


    $api_result = json_decode($json, true);


    $api_result['region_name'];

    setcookie("ip",$ip,time()+60*60*24*30);
    setcookie("loc",$api_result['region_name'],time()+60*60*24*30);





}else{

    if (!isset($_COOKIE["session"]["cart"]))







}

?>




<html>

<script>

    if (cip==data.ip){

        $("header").append("<div class='alert alert-primary' role='alert'>You Left something <a href='cart.php' class='alert-link'>Click Here</a></div>")

    }

    setTimeout(cart,3000)

</script>

</html>
