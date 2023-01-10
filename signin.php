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
    <div style="background-image: url(images/atas.png);background-position: bottom;background-size: cover;height: 100px;"></div>
    <div class="page-content header-clear-medium" style="background: rgb(251, 251, 251);box-shadow: none;padding: 0px;">   
        <img src="images/logo png.png" style="display: block;width: 218px;margin-left: auto;margin-right: auto;">
        <div class="content-boxed left-40 right-40" style="margin-bottom: 0px;">
            <div class="content top-10 bottom-20">
                <!-- <h2 class="center-text uppercase ultrabold top-20 fa-3x" style="color: rgb(249,135,12)">LOGIN</h2> -->
                <!-- <p class="center-text font-12 under-heading bottom-30 top-5" style="color: rgb(249,135,12)">
                        Silahkan masuk ke aplikasi EC Collection
                    </p> -->
                    <div id="alert"></div>
                    <div class="input-style has-icon input-style-1 input-required" style="color: rgb(239, 47, 42);">
                        <i class="input-icon fa fa-user font-11" style="color: rgb(239, 47, 42);"></i>
                        <span>Username</span>
                        <em>(required)</em>
                        <input required type="name" id="id" name="id" placeholder="Username" style="color: rgb(239, 47, 42);">
                    </div> 
                    <div class="input-style has-icon input-style-1 input-required" style="color: rgb(239, 47, 42);">
                        <i class="input-icon fa fa-lock font-11" style="color: rgb(239, 47, 42);"></i>
                        <span>Password</span>
                        <em>(required)</em>
                        <input required id="password" type="password" name="password" placeholder="Password" style="color: rgb(239, 47, 42);">
                    </div>          
                   
                    
                    <div class="clear"></div>
                    <!-- <a type="submit" href="index.php" class="button button-full button-m shadow-large button-round-small bottom-0" style="background-color: rgb(239, 47, 42);">LOGIN</a> -->
                    <input type="submit" id="submit" name="submit" value="Login" onclick="myFunction()" class="button top-20 button-full button-m shadow-large button-round-small bottom-0" style="background-color: rgb(239, 47, 42);width: -webkit-fill-available;">
                    <!-- <div class="divider top-30"></div> -->
                    <p class="center-text font-12 under-heading bottom-30 top-5">
                            Belum punya akun? <a href="#" data-menu="menu-signup" class="font-11 opacity-50" style="color: rgb(239, 47, 42);opacity: 1;font-weight: bold;">Daftar disini</a>
                        </p>
                    <div class="divider bottom-15"></div>
               

            </div>
        </div>
        
    </div>
    <div style="background-image: url(images/bwh.png);background-position: top;background-size: cover;height: 100px;"></div>
    <!-- Page Content Class Ends Here-->

    <div id="menu-forgot" 
         class="menu menu-box-modal round-medium" 
         data-menu-height="250" 
         data-menu-width="310" 
         data-menu-effect="menu-over">
        <div class="content">
            <h2 class="center-text uppercase ultrabold top-30" style="color: rgb(239, 47, 42);">Lupa Password?</h2>
            <p class="center-text font-11 under-heading bottom-20" style="color: rgb(239, 47, 42);">
                Masukan email anda untuk reset password.
            </p>
            <div class="input-style has-icon input-style-1 input-required bottom-30" style="color: rgb(239, 47, 42);">
                <i class="input-icon fa fa-at" style="color: rgb(239, 47, 42);"></i>
                <span>Email</span>
                <em>(required)</em>
                <input type="email" placeholder="Email" style="color: rgb(239, 47, 42);)">
            </div>   
            <a href="#" class="button button-full button-s shadow-large button-round-small top-20" style="background-color: rgb(239, 47, 42);">SEND RECOVERY EMAIL</a>
        </div>
    </div>  
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
