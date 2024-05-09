<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/lf/Login_v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Mar 2024 06:08:52 GMT -->
<head>
<title>Login V1</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

<meta name="robots" content="noindex, follow">
<script nonce="7f555929-08ae-41e0-b89a-3f0ed0a300e6">try{(function(w,d){!function(du,dv,dw,dx){du[dw]=du[dw]||{};du[dw].executed=[];du.zaraz={deferred:[],listeners:[]};du.zaraz.q=[];du.zaraz._f=function(dy){return async function(){var dz=Array.prototype.slice.call(arguments);du.zaraz.q.push({m:dy,a:dz})}};for(const dA of["track","set","debug"])du.zaraz[dA]=du.zaraz._f(dA);du.zaraz.init=()=>{var dB=dv.getElementsByTagName(dx)[0],dC=dv.createElement(dx),dD=dv.getElementsByTagName("title")[0];dD&&(du[dw].t=dv.getElementsByTagName("title")[0].text);du[dw].x=Math.random();du[dw].w=du.screen.width;du[dw].h=du.screen.height;du[dw].j=du.innerHeight;du[dw].e=du.innerWidth;du[dw].l=du.location.href;du[dw].r=dv.referrer;du[dw].k=du.screen.colorDepth;du[dw].n=dv.characterSet;du[dw].o=(new Date).getTimezoneOffset();if(du.dataLayer)for(const dH of Object.entries(Object.entries(dataLayer).reduce(((dI,dJ)=>({...dI[1],...dJ[1]})),{})))zaraz.set(dH[0],dH[1],{scope:"page"});du[dw].q=[];for(;du.zaraz.q.length;){const dK=du.zaraz.q.shift();du[dw].q.push(dK)}dC.defer=!0;for(const dL of[localStorage,sessionStorage])Object.keys(dL||{}).filter((dN=>dN.startsWith("_zaraz_"))).forEach((dM=>{try{du[dw]["z_"+dM.slice(7)]=JSON.parse(dL.getItem(dM))}catch{du[dw]["z_"+dM.slice(7)]=dL.getItem(dM)}}));dC.referrerPolicy="origin";dC.src="../../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(du[dw])));dB.parentNode.insertBefore(dC,dB)};["complete","interactive"].includes(dv.readyState)?zaraz.init():du.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document)}catch(e){throw fetch("/cdn-cgi/zaraz/t"),e;};</script></head>
<body>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100">
<div class="login100-pic js-tilt" data-tilt>
<img src="images/img-01.png" alt="IMG">
</div>
<form class="login100-form validate-form" method="post">
<span class="login100-form-title">
Member SIGNUP
</span>
<div class="wrap-input100 validate-input">
<input class="input100"  type="text" name="userName" placeholder="USER NAME :">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-envelope" aria-hidden="true"></i>
</span>
</div>


<div class="wrap-input100 validate-input">
<input class="input100"  type="password" name="userPassword" placeholder="USER PASSWORD :">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-envelope" aria-hidden="true"></i>
</span>
</div>

<div class="wrap-input100 validate-input">
<input class="input100"  type="text" name="userEmail" placeholder="USER Email">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-envelope" aria-hidden="true"></i>
</span>
</div>
<div class="wrap-input100 validate-input" >
<input class="input100"  type="text" name="userPhone" placeholder="USER PHONE NUMBER">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-envelope" aria-hidden="true"></i>
</span>
</div>

<div class="container-login100-form-btn">
<button name="signupBtn" class="login100-form-btn">
SIGNUP
</button>
</div>
<div class="text-center p-t-12">
<span class="txt1">
Forgot
</span>
<a class="txt2" href="#">
Username / Password?
</a>
</div>
<div class="text-center p-t-136">
<a class="txt2" href="#">
Create your Account
<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
</a>
</div>
</form>
  <?php 
  
    $con = mysqli_connect("localhost","root","","salses");
    
   if(isset($_POST['signupBtn'])){

        $userName = $_POST['userName'];
        $userPassword = md5( $_POST["userPassword"]);
        $userEmail = $_POST["userEmail"];
        $userPhone = $_POST["userPhone"];
        
        $qu = "INSERT INTO `users`(`userName`, `userPassword`, `userEmail`, `per`, `userPhoneNumber`, `dep`) 
        VALUES ('$userName','$userPassword','$userEmail',1,$userPhone,'all dep')";
        
        
        if(mysqli_query($con,$qu)){
            echo "<script> alert('new account added'); location.assign('index.php'); </script>" ;
        }
   }
    

  ?>
  
</div>
</div>
</div>


<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="vendor/select2/select2.min.js"></script>

<script src="vendor/tilt/tilt.jquery.min.js"></script>
<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<script src="js/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"86295f4ddb27c8a0","b":1,"version":"2024.2.4","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from colorlib.com/etc/lf/Login_v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Mar 2024 06:08:56 GMT -->
</html>
