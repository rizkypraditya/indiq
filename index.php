<!DOCTYPE HTML>
<html lang="en">
<head>
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>IndiQ</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="stylesheet" type="text/css" href="styles/framework.css">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">    
</head>
    
<body class="theme-light" data-background="none" data-highlight="red2">
        
<div id="page">
        
    <div id="page-preloader">
        <div class="loader-main"><div class="preload-spinner border-highlight"></div></div>
    </div>


    <div class="page-content-black"></div>
    <div class="page-content">   
        
        <div class="cover-slider owl-carousel bg-white" style="transform: none;transition: none;">
            <div data-height="cover" class="caption">
                <div class="caption-center">
                    <img src="images/logo png.png" style="display: block;width: 218px;margin-left: auto;margin-right: auto;">
                    <h5 class="center-text color-black bottom-20">We Offers You:</h5>
                    <!-- <div class="divider top-50"></div> -->
                    <img src="images/flexibility.png" style="display: block;width: 218px;margin-left: auto;margin-right: auto;">
                    <h1 class="center-text color-black bolder fa-2x">FLEXIBILITY</h1>
                    <h5 class="center-text color-black bottom-20">Make your queue appointment anytime anywhere!</h5>
                    <a href="http://10.144.1.55/makassar3/IndiQ/signin.php" class="button button-s button-round-huge button-center-small shadow-large"style="background-color: rgb(239, 47, 42);" >GET STARTED!</a>
                </div>
                
                <!-- <div class="caption-overlay bg-white"></div> -->
                <div class="caption-bg" style="background-image:url(images/IndiQBG.png)"></div>
            </div> 
            <div data-height="cover" class="caption">
                <div class="caption-center">
                    <img src="images/logo png.png" style="display: block;width: 218px;margin-left: auto;margin-right: auto;">
                    <h5 class="center-text color-black bottom-20">We Offers You:</h5>
                    <!-- <div class="divider top-50"></div> -->
                    <img src="images/timemanagement.png" style="display: block;width: 218px;margin-left: auto;margin-right: auto;">
                    <h1 class="center-text color-black bolder fa-2x">TIME MANAGEMENT</h1>
                    <h5 class="center-text color-black bottom-20">Say 'bye' to unproductive day! You can save time and monitor your queue progress</h5>
                    <a href="http://10.144.1.55/makassar3/IndiQ/signin.php" class="button button-s button-round-huge button-center-small shadow-large"style="background-color: rgb(239, 47, 42);" >GET STARTED!</a>
                </div>
                
                <!-- <div class="caption-overlay bg-white"></div> -->
                <div class="caption-bg" style="background-image:url(images/IndiQBG.png);;transform: scale(-1, 1);"></div>
            </div>   
            <div data-height="cover" class="caption">
                <div class="caption-center">
                    <img src="images/logo png.png" style="display: block;width: 218px;margin-left: auto;margin-right: auto;">
                    <h5 class="center-text color-black bottom-20">We Offers You:</h5>
                    <!-- <div class="divider top-50"></div> -->
                    <img src="images/notifications.png" style="display: block;width: 218px;margin-left: auto;margin-right: auto;">
                    <h1 class="center-text color-black bolder fa-2x">NOTIFICATIONS</h1>
                    <h5 class="center-text color-black bottom-20">Get notificatons minutes before your appointment so you won't miss anything!</h5>
                    <a href="http://10.144.1.55/makassar3/IndiQ/signin.php" class="button button-s button-round-huge button-center-small shadow-large"style="background-color: rgb(239, 47, 42);" >GET STARTED!</a>
                </div>
                
                <!-- <div class="caption-overlay bg-white"></div> -->
                <div class="caption-bg" style="background-image:url(images/IndiQBG.png)"></div>
            </div>      
            <div data-height="cover" class="caption">
                <div class="caption-center">
                    <img src="images/logo png.png" style="display: block;width: 218px;margin-left: auto;margin-right: auto;">
                    <h5 class="center-text color-black bottom-20">We Offers You:</h5>
                    <!-- <div class="divider top-50"></div> -->
                    <img src="images/customerprofiling.png" style="display: block;width: 218px;margin-left: auto;margin-right: auto;">
                    <h1 class="center-text color-black bolder fa-2x">CUSTOMER PROFILING</h1>
                    <h5 class="center-text color-black bottom-20">Profile your customer and get the precise data analytics</h5>
                    <a href="http://10.144.1.55/makassar3/IndiQ/signin.php" class="button button-s button-round-huge button-center-small shadow-large"style="background-color: rgb(239, 47, 42);" >GET STARTED!</a>
                </div>
                
                <!-- <div class="caption-overlay bg-white"></div> -->
                <div class="caption-bg" style="background-image:url(images/IndiQBG.png);;transform: scale(-1, 1);"></div>
            </div>   
        </div>
        
    </div>
        
    <!-- Page Content Class Ends Here-->
    <div class="menu-hider"></div>
</div>


<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/plugins.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
<script type="text/javascript" >
function myFunction(){
        var username = $("#id").val().trim();
        var password = $("#password").val().trim();
        $.ajax({
            url:'php/login.php',
            type:'post',
            data:{id:username,password:password},
            success:function(response)
            {
                var msg = "";
                if(response == 1){
                    window.location = "landpage.php";
                }else  if(response == 0){
                    msg = "Invalid username and password!";
                }
                $("#alert").html(msg);
            }
        });
    }
</script>
</body>
