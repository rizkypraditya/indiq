<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Welcome To IndiQ!</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="stylesheet" type="text/css" href="styles/framework.css">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">    
</head>
    
<body class="theme-light" data-background="none" data-highlight="red1">
        
<div id="page">
        
    <div id="page-preloader">
        <div class="loader-main"><div class="preload-spinner border-highlight"></div></div>
    </div>
    <div id="footer-menu" class="footer-menu-4-icons footer-menu-style-1">
        <a href="index.html" class="active-nav"><i class="fa fa-home"></i><span>Home</span></a>
        <a href="index-components.html"><i class="fa fa-history"></i><span>Order</span></a>
        <a href="index-pages.html"><i class="fa fa-bell"></i><span>Notification</span></a>
        <a href="index-search.html"><i class="fa fa-user"></i><span>Accounts</span></a>
        <div class="clear"></div>
    </div>
    
    <div class="page-content header-clear-small">   
        <img src="images/logo png.png" style="display: block;width: 218px;margin-left: auto;margin-right: auto;">
        <div class="content-boxed content-boxed-full shadow-large bottom-15" style="margin-top: 15px;">
            <div class="search search-header">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="Welcome Vay! What are you looking for?" data-search="">
                <a href="#" class="disabled"><i class="fa fa-times-circle color-red2-dark"></i></a>
            </div>
        </div>
        <div class="content-boxed center-text">
            <div class="content">
                <h1 class="bolder center-text" style="color: rgb(239, 47, 42);">Pilih Tempat Antrian</h1>
            </div>
            <div class="clear"></div>
            <div class="landing-icons color-theme">
                    <a href="nearlocation.php" style="padding-left: 20px;">
                        <i class="bg-red2-light shadow-icon-large fas fa-store-alt"></i>
                        <em class="color-theme bolder">Plasa Telkom</em>
                    </a> 
                    <a href="updatedata.php" style="margin-left: 90px;" > 
                        <i class="bg-blue2-dark shadow-icon-large fas fa-ellipsis-h"></i>
                        <em class="color-theme bolder">Lainnya</em>
                    </a>  
                    
            </div>
        </div>
        <div class="single-slider owl-carousel owl-no-dots bottom-0">
            <div class="caption caption-margins round-medium shadow-large bottom-20">
                <div class="caption-bottom">
                    <h1 class="color-white center-text bolder">IndiQ</h1>
                    <p class="under-heading color-white center-text bottom-20 opacity-80">Semua kebutuhan Antrianmu!</p>
                </div>
                <div class="caption-overlay bg-gradient"></div>
                <img class="caption-image owl-lazy" data-src="images/banner1.jpg" style="height: 250px;">
            </div>
            <div class="caption caption-margins round-medium shadow-large bottom-20">
                <div class="caption-bottom">
                    <h1 class="color-white center-text bolder">IndiQ team</h1>
                    <p class="under-heading color-white center-text bottom-20 opacity-80">IndiQ as the best digital Amoeba Project</p>
                </div>
                <div class="caption-overlay bg-gradient"></div>
                <img class="caption-image owl-lazy" data-src="images/banner3.jpg" style="height: 250px;">
            </div>         
            <div class="caption caption-margins round-medium shadow-large bottom-20">
                <div class="caption-bottom">
                    <h1 class="color-white center-text bolder">Tak perlu menunggu</h1>
                    <p class="under-heading color-white center-text bottom-20 opacity-80">Cek selalu antrianmu!</p>
                </div>
                <div class="caption-overlay bg-gradient"></div>
                <img class="caption-image owl-lazy" data-src="images/banner2.jpg" style="height: 250px;">
            </div>
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
