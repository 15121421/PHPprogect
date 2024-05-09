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

<form class="login100-form validate-form" method="post">


</form>
<table border='2px'>
<tr><th>user id </th><th>user name </th><th>user email </th><th> user per </th><th>user phone number </th><th> DELETE </th></tr>
  <?php 
    session_start();
    if($_SESSION['per']!=3){
      echo "<script>alert('لا يمكنك الدخول لهذه الصفحة ');location.assign('signup.php'); </script>" ;
    }
    $con = mysqli_connect("localhost","root","","salses");
    $query = "SELECT * FROM `users`";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
      
    
    

  ?>
  <tr><td> <?php echo $row['user_id'] ; ?> </td>  <td><a href="?edi=<?php echo $row['user_id']; ?>"><?php echo $row['userName'] ; ?></a></td> <td><?php echo $row['userEmail'] ; ?> </td><td> <?php if($row['per']==3){echo "S admin" ;}else if($row['per']==2){echo 'admin' ;}else{echo 'user';} ; ?> </td> <td><?php echo $row['userPhoneNumber'] ; ?> </td> <td> <a href="?id=<?php echo $row['user_id'] ?>"> Delete </a> </td></tr>
  
  <?php 
    }
    if(isset($_GET['id'])){
        $qu = "DELETE FROM `users` WHERE `user_id` =". $_GET['id'];
        if(mysqli_query($con,$qu)){
            echo "<script> alert('item deleted'); location.assign('admin.php'); </script>" ;
            
        }
    }
    if(isset($_GET['edi'])){
      $qu = "UPDATE `users` SET `per` = '3' WHERE `user_id` =". $_GET['edi'];
      if(mysqli_query($con,$qu)){
        echo "<script> alert('لقد تم تغير المستخد الى ادمن');location.assign('admin.php'); </script>" ;
      }
    }
  ?>
  </table>
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

<!-- Mirrored from colorlib.com/etc/lf/Login_v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014'], Mon, 11 Mar 2024 06:08:56 GMT -->
</html>
