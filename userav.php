<?php
 header('Access-Control-Allow-Origin: *'); 
 error_reporting(0) ;
 error_reporting(0) ;
 sleep(5) ;
  
 
 
 $useragent=array('Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.108 Safari/537.36 2345Explorer/7.1.0.12633',
 'Mozilla/5.0 (Linux; Android 4.1; Galaxy Nexus Build/JRN84D) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mobile Safari/535.19',
 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 5_1_1 like Mac OS X; en) AppleWebKit/534.46.0 (KHTML, like Gecko) CriOS/19.0.1084.60 Mobile/9B206 Safari/7534.48.3',
 'Mozilla/5.0 (Linux; Ubuntu 15.04 like Android 4.4) AppleWebKit/537.36 Chromium/55.0.2883.75 Mobile Safari/537.36',
 'Mozilla/5.0 (iPad; CPU OS 10_2 like Mac OS X) Appleram 10.24.0 Android (24/7.0; 480dpi; 1080x1920; samsung; SM-G930T; heroqltetmo; qcom; en_US)',
 'Instagram 10.19.0 (iPhone9,4; iOS 10_3_1; en_SI; en-SI; scale=2.88; gamut=wide; 1080x1920) AppleWebKit/420 ',
 'Mozilla/5.0 (Android; Mobile; rv:12.0) Gecko/12.0 Firefox/12.0',
 'Mozilla/5.0 (iPad; CPU OS 8_2 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) GSA/5.2.43972 Mobile/12D508 Safari/600.1.4',
 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/43.0.2357.121 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/35.0.0.48.273;]',
 'SAMSUNG-GT-B5310/B5310ACIK1 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
 'Mozilla/5.0 (Linux; Android 4.4.3; D5303 Build/19.1.1.A.0.165) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/33.0.0.0 Mobile Safari/537.36 ACHEETAHI/2100501044',
 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.0.1) Gecko/20020919'
 );
 ini_set('user_agent',  random_value($useragent));
  
 function random_value($array, $default=null)
{
    $k = mt_rand(0, count($array) - 1);
    return isset($array[$k])? $array[$k]: $default;
}
function av(){
    
  $user=strtolower($_GET['us']);
$name = $user;
$strna=strlen($name)-1;
if( $name[0]=="." ||  $name[$strna]=="." ||
preg_match('/\..*\./',$name)){
$aval=0; }else{
$ch = curl_init();
$ipAddress=rand(111,205).".".rand(111,205).".".rand(90,205).".".rand(111,205);
$ipAddress ="172.217.21.238";
curl_setopt($ch, CURLOPT_USERAGENT, random_value($useragent));
curl_setopt($ch, CURLOPT_HTTPHEADER, ["REMOTE_ADDR: $ipAddress", "HTTP_X_FORWARDED_FOR: $ipAddress"]);
curl_setopt($ch, CURLOPT_URL, "https://www.instagram.com/$name/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$result = curl_exec($ch);
$http = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
if($http=="200") {
    $aval = 0 ;
}else{
    $aval = 1 ;
}
}
 if($aval==0){
    header("HTTP/1.1 200 OK");
    echo "200";
 }else{
  header("HTTP/1.0 404 Not Found");
echo "404";
 }
}
 
echo av(); ?>
 <script type="text/javascript">
   var hn = window.location.hostname ; if(hn.search("instauser.tk") < 0 ){
    // window.location = "http://instauser.tk" ;
    alert("its not instauser website") ;
  }
 </script>


 