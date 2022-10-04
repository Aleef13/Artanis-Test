<?php
  include("header.php");
?>


<!DOCTYPE html>
<html>
    <head>
        <title>ARTANIS SYSTEM DEVELOPMENT</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <script src="https://kit.fontawesome.com/ab19273efb.js" crossorigin="anonymous"></script>
        
        <style>

        body{
        /* background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab); */
        background: linear-gradient(180deg,#3d5a80, #8bbccc, #4c6793, #3d5a80, #293241);
            background-size: 800% 800%;
            background-size: 400% 400%;
        /* animation: gradient 15s ease infinite; */
        height: 100vh;

            /* -webkit-animation: AnimationName 57s ease infinite;
            -moz-animation: AnimationName 57s ease infinite; */
            /* animation: AnimationName 57s ease infinite; */
            
        }

        @-webkit-keyframes AnimationName {
            0%{background-position:50% 0%}
            50%{background-position:50% 100%}
            100%{background-position:50% 0%}
        }
        @-moz-keyframes AnimationName {
            0%{background-position:50% 0%}
            50%{background-position:50% 100%}
            100%{background-position:50% 0%}
        }
        @keyframes AnimationName {
            0%{background-position:50% 0%}
            50%{background-position:50% 100%}
            100%{background-position:50% 0%}
        }
        img{
            padding-top:50px;
            padding-bottom:50px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            /* border-radius:50%;
            box-shadow: 0px 0px 3px #5f5f5f,
            0px 0px 0px 5px #ecf0f3,
            8px 8px 15px #a7aaa7,
            -8px -8px 15px #fff;
            width:100px;
            height:100px; */
        }

        .logout{
            padding-top:30px;
            /* padding-bottom:50px; */
            padding-right:50px;
            display: block;
            /* margin-left: auto;
            margin-right: auto; */
            float:right;
            cursor:pointer;
            color:white;
        }
        .logout:hover{
            color:#293241;
        }

        .user{
            padding-top:30px;
            padding-left:50px;
            display: block;
            float:left;
            cursor:pointer;
            color:white;
        }

        .user b{
            font-size:20px;
            font-weight:200;
            padding-left:5px;
        }

        .user:hover{
            color:#293241;
        }

        *{
        margin: 0;
        padding: 0;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        /* background-image:url("imagewave.gif"); */
        }

        h4{
        font-size: 20px;
        font-family: 'Poppins', sans-serif;
        font-weight: 600 ;
        color: black;
        text-align: center;
        margin: 2rem 0;
        }

        h3{
        font-size: 18px;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        color: black;
        text-align: center;
        margin: 2rem 0;
        }
        
        .wrapper{
        width: 90%;
        margin: 0 auto;
        max-width: 80rem;
        }

        .cols{
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        -webkit-box-pack: center;
            -ms-flex-pack: center;
                justify-content: center;
        }

        .col{
        width: calc(25% - 2rem);
        margin: 1rem;
        cursor: pointer;
        }

        .container{
        -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
            -webkit-perspective: 1000px;
                    perspective: 1000px;
        }

        .front,
        .back{
        background-size: cover;
        /* background-color:white; */
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.25);
        /* box-shadow: 0 4px 8px 0 white; */
        border-radius: 10px;
            background-position: center;
            -webkit-transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            -o-transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1), -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
            text-align: center;
            min-height: 280px;
            height: auto;
            border-radius: 10px;
            color: #fff;
            font-size: 1.5rem;

        }

        .back{
        background: #937DC2;
        background: -webkit-linear-gradient(45deg,  #937DC2 0%,#FFABE1 100%);
        background: -o-linear-gradient(45deg,  #937DC2 0%,#FFABE1 100%);
        background: linear-gradient(45deg,  #937DC2 0%,#FFABE1 100%);
        }

        /* .back{
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
            width: 100%;
            height: 100%;
            content: '';
            display: block;
            opacity: .6;
            background-color: #cedce7;
            -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
            border-radius: 10px;
        } */

        .front:after{
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
            width: 100%;
            height: 100%;
            content: '';
            display: block;
            opacity: .6;
            background-color: #000;
            -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
            border-radius: 10px;
        }
        .container:hover .front,
        .container:hover .back{
            -webkit-transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            -o-transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1), -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
        }

        .back{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }

        .inner{
            -webkit-transform: translateY(-50%) translateZ(60px) scale(0.94);
                    transform: translateY(-50%) translateZ(60px) scale(0.94);
            top: 50%;
            position: absolute;
            left: 0;
            width: 100%;
            padding: 2rem;
            -webkit-box-sizing: border-box;
                    box-sizing: border-box;
            outline: 1px solid transparent;
            -webkit-perspective: inherit;
                    perspective: inherit;
            z-index: 2;
        }

        .container .back{
            -webkit-transform: rotateY(180deg);
                    transform: rotateY(180deg);
            -webkit-transform-style: preserve-3d;
                    transform-style: preserve-3d;
        }

        .container .front{
            -webkit-transform: rotateY(0deg);
                    transform: rotateY(0deg);
            -webkit-transform-style: preserve-3d;
                    transform-style: preserve-3d;
        }

        .container:hover .back{
        -webkit-transform: rotateY(0deg);
                transform: rotateY(0deg);
        -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
        }

        .container:hover .front{
        -webkit-transform: rotateY(-180deg);
                transform: rotateY(-180deg);
        -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
        }

        .front .inner p{
        font-size: 2rem;
        margin-bottom: 2rem;
        position: relative;
        }

        .front .inner p:after{
        content: '';
        width: 4rem;
        height: 2px;
        position: absolute;
        background: #C6D4DF;
        display: block;
        left: 0;
        right: 0;
        margin: 0 auto;
        bottom: -.75rem;
        }

        .front .inner span{
        color: rgba(255,255,255,0.7);
        font-family: 'Poppins', sans-serif;
        font-weight: 300;
        }

        @media screen and (max-width: 64rem){
        .col{
            width: calc(33.333333% - 2rem);
        }
        }

        @media screen and (max-width: 48rem){
        .col{
            width: calc(50% - 2rem);
        }
        }

        @media screen and (max-width: 32rem){
        .col{
            width: 100%;
            margin: 0 0 2rem 0;
        }
        }

        #myVideo {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        box-shadow: 0 4px 8px 0 white;
        object-fit:cover;
        z-index:-1;
        }
        </style>

        
        
    </head>
    <body>
    <!-- <video autoplay muted loop id="myVideo">
    <source src="bgvid2.mp4" type="video/mp4"  >
    </video> -->
    <div class="logout"  onclick="window.location.href='logout.php'">
        <i class="fa-solid fa-right-from-bracket fa-2x"></i>
    </div>
   
    <?php 
        include 'config_artanis.php';
            
        $user = $_SESSION["username"];
        
        $sql = "SELECT * FROM user WHERE Username='$user'";
        $sendsql = mysqli_query($conn, $sql);
        if($sendsql)
        {
            foreach($sendsql as $row)
            {
                echo"
                    <div class=\"user\">
                    <table>
                        <tr>
                        <td><i class=\"fa-solid fa-user fa-2x\"></i></td>
                        <td><b>".$row["Username"]."</b></td>
                        </tr>
                    </table>
                    </div>";
            }
        }
        else
                echo "Query failed!";
        ?>
    
    <img src='image/AC_logo.png' onclick="window.location.href='logout.php'" style="cursor:pointer;">
    
    <div class="wrapper">
        <div class="cols">
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(image/aces.jpg)" >
                        <div class="inner">
                            <i class="fa-solid fa-code fa-5x" style="color:;"></i>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner"  onclick="window.location.href='https://acesv2.ezran.my/'">
                        <h4>ACES I 4.0 Version 2</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container" >
                    <div class="front" style="background-image: url(image/car.jpg)" >
                        <div class="inner">
                            <i class="fa-brands fa-wordpress-simple fa-5x"></i>
                        </div>
                    </div>
                    <div class="back" >
                        <div class="inner"  onclick="window.location.href='https://www.showcar.ezran.my/'">
                        <h4>Portal <br><br> ShowCar </h4>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container"  >
                    <div class="front"  style="background-image: url(image/htckl.png)" >
                        <div class="inner">
                            <!-- <p>Diligord</p>
                            <span>Lorem ipsum</span> -->
                            <i class="fa-brands fa-wordpress-simple fa-5x"></i>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner" onclick="window.location.href='https://htckl-mockup-1.ezran.my/'">
                        <h4>Portal <br><br> HTCKL 2.0 </h4>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container"  >
                    <div class="front" style="background-image: url(image/aces.jpg)" >
                        <div class="inner">
                            <!-- <p>Diligord</p>
                            <span>Lorem ipsum</span> -->
                            <i class="fa-solid fa-code fa-5x" style="color:;"></i>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner" onclick="window.location.href='https://webpro.aces.ecerdc.com.my/'">
                        <h4>ACES I 4.0 Pro Version</h4>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(image/mpob.png)" >
                        <div class="inner">
                            <!-- <p>Diligord</p>
                            <span>Lorem ipsum</span> -->
                            <i class="fa-solid fa-code fa-5x" style="color: ;"></i>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner"  onclick="window.location.href='https://ekilang.ezran.my/'">
                        <h4>e-Kilang<br><br> Malaysian Palm Oil Board (MPOB)</h4>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(image/unesco_ihp.png)" >
                        <div class="inner">
                            <!-- <p>Diligord</p>
                            <span>Lorem ipsum</span> -->
                            <i class="fa-brands fa-wordpress-simple fa-5x"></i>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner" onclick="window.location.href='https://www.unescoihp.ezran.my/'">
                        <h4>Portal <br><br> UNESCO IHP Malaysia</h4>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(image/jpsm.jpg)" >
                        <div class="inner">
                            <!-- <p>Diligord</p>
                            <span>Lorem ipsum</span> -->
                            <i class="fa-solid fa-code fa-5x" style="color: ;"></i>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner" onclick="window.location.href='https://www.ekbk.ezran.my/'">
                        <h4>e-KBK <br><br> Jabatan Perhutanan Semenanjung Malaysia (JPSM)</h4>
                        </div>
                    </div>
                </div>
            </div>    
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(image/jas.jpg" >
                        <div class="inner">
                            <!-- <p>Diligord</p>
                            <span>Lorem ipsum</span> -->
                            <i class="fa-brands fa-wordpress-simple fa-5x"></i>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner"  onclick="window.location.href='https://doe.gov.my/'">
                        <h4>Portal <br><br> Jabatan Alam Sekitar (JAS)</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(image/AC.png)" >
                        <div class="inner">
                            <!-- <p>Diligord</p>
                            <span>Lorem ipsum</span> -->
                            <i class="fa-solid fa-code fa-5x" style="color: ;"></i>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner"   onclick="window.location.href='https://www.asset-management.ezran.my/'">
                        <h4>Asset Management <br><br> R&amp;D</h4>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(image/upen.png)" >
                        <div class="inner">
                            <!-- <p>Diligord</p>
                            <span>Lorem ipsum</span> -->
                            <i class="fa-solid fa-code fa-5x" style="color: ;"></i>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner"  onclick="window.location.href='https://www.upen.ezran.my/'">
                        <h3>Sistem Bantuan Kewangan Rumah Ibadat Selain Islam (RISI) 
                            <br><br> Unit Perancang Ekonomi Negeri (UPEN) Selangor</h3>
                    </div>
                    </div>
                </div>
            </div> 
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(image/icep.jpg)" >
                        <div class="inner">
                            <!-- <p>Diligord</p>
                            <span>Lorem ipsum</span> -->
                            <i class="fa-solid fa-code fa-5x" style="color: ;"></i>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner"   onclick="window.location.href='https://vms.icep.com.my/'">
                        <h3>Venue Management System <br> <br> International Conference and Exhibition
                                    Professionals (iCEP)</h3>
                    </div>
                    </div>
                </div>
            </div>  
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(image/mpob.png)" >
                        <div class="inner">
                            <!-- <p>Diligord</p>
                            <span>Lorem ipsum</span> -->
                            <i class="fa-solid fa-code fa-5x" style="color: ;"></i>
                        </div>
                    </div>
                    <div class="back"   onclick="window.location.href='https://www.ecost.ezran.my/'">
                        <div class="inner">
                        <h4>e-Cost <br><br> Malaysian Palm Oil Board (MPOB)</h4>
                    </div>
                    </div>
                </div>
            </div>     
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container" >
                    <div class="front" style="background-image: url(image/marketplace.jpg)" >
                        <div class="inner">
                            <!-- <p>Diligord</p>
                            <span>Lorem ipsum</span> -->
                            <i class="fa-solid fa-chart-column fa-5x"></i>    
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner" onclick="window.location.href='https://dev.ezran.my/marketplace/home'">
                        <h4>Marketplace</h4>
                    </div>
                    </div>
                </div>
            </div>  
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(image/aces.jpg)" >
                        <div class="inner">
                            <!-- <p>Diligord</p>
                            <span>Lorem ipsum</span> -->
                            <i class="fa-solid fa-code fa-5x" style="color: ;"></i>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner"   onclick="window.location.href='https://webapp.aces.ecerdc.com.my/'">
                        <h4>ACES I 4.0</h4>
                    </div>
                    </div>
                </div>
            </div> 
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container" >
                    <div class="front" style="background-image: url(image/biupa.png)" >
                        <div class="inner">
                            <!-- <p>Diligord</p>
                            <span>Lorem ipsum</span> -->
                            <i class="fa-brands fa-wordpress-simple fa-5x"></i>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner" onclick="window.location.href='http://www.istiadat.gov.my/'">
                        <h4>Portal <br><br> Bahagian Istiadat Dan Urusetia Antarabangsa (BIUPA)</h4>
                    </div>
                    </div>
                </div>
            </div> 
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container" >
                    <div class="front" style="background-image: url(image/jpsm.jpg)" >
                        <div class="inner">
                            <!-- <p>Diligord</p>
                            <span>Lorem ipsum</span> -->
                            <i class="fa-solid fa-code fa-5x" style="color: ;"></i>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner" onclick="window.location.href='https://espatial.ezran.my/'">
                        <h4>e-Spatial <br><br> Jabatan Perhutanan Semenanjung Malaysia (JPSM)</h4>
                    </div>
                    </div>
                </div>
            </div> 
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container" >
                    <div class="front" style="background-image: url(image/mcmc.png)" >
                        <div class="inner">
                            <!-- <p>Diligord</p>
                            <span>Lorem ipsum</span> -->
                            <i class="fa-solid fa-code fa-5x" style="color: ;"></i>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner"  onclick="window.location.href='https://edeclare.ezran.my/'">
                        <h4>e-Declare <br><br> Malaysian Communications and Multimedia Commission (MCMC)</h4>
                        </div>
                    </div>
                </div>
            </div>   
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container" >
                    <div class="front" style="background-image: url(image/biupa.png)" >
                        <div class="inner">
                            <!-- <p>Diligord</p>
                            <span>Lorem ipsum</span> -->
                            <i class="fa-brands fa-wordpress-simple fa-5x"></i>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner" onclick="window.location.href='https://www.rurallink.gov.my/'">
                        <h4>Portal <br><br> Kementerian Pembangunan Luar Bandar (KPLB)</h4>
                        </div>
                    </div>
                </div>
            </div>    
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container" >
                    <div class="front" style="background-image: url(image/pokli.jpeg)" >
                        <div class="inner">
                            <!-- <p>Diligord</p>
                            <span>Lorem ipsum</span> -->
                            <i class="fa-solid fa-code fa-5x" ></i>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner" onclick="window.location.href='https://pokli.com.my/'">
                                <h4>POKLI e-Commerce</h4>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container" >
                    <div class="front" style="background-image: url(image/htckl.png)" >
                        <div class="inner">
                            <!-- <p>Diligord</p>
                            <span>Lorem ipsum</span> -->
                            <i class="fa-brands fa-wordpress-simple fa-5x"></i>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner" onclick="window.location.href='https://htckl.water.gov.my/'">
                        <h4>Portal <br><br> Humid Tropics Center Kuala Lumpur (HTCKL)</h4>
                        </div>
                    </div>
                </div>
            </div>   
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container" >
                    <div class="front" style="background-image: url(image/AC.png)" >
                        <div class="inner">
                            <!-- <p>Diligord</p>
                            <span>Lorem ipsum</span> -->
                            <i class="fa-solid fa-code fa-5x" style="color: ;"></i>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner" onclick="window.location.href='https://ezran.my/mms2'">
                        <h4>Maintenance Management System</h4>
                        </div>
                    </div>
                </div>
            </div>   
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container"  onclick="window.location.href='https://mygdx.malaysia.gov.my/ms'">
                    <div class="front" style="background-image: url(image/mygdx.jpg)" >
                        <div class="inner">
                            <!-- <p>Diligord</p>
                            <span>Lorem ipsum</span> -->
                            <i class="fa-solid fa-code fa-5x" style="color: ;"></i>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner"onclick="window.location.href='https://mygdx.malaysia.gov.my/ms'">
                        <h4>MAMPU MyGDX</h4>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container"  onclick="window.location.href='http://waris.water.gov.my/'">
                    <div class="front" style="background-image: url(image/biupa.png)" >
                        <div class="inner">
                            <!-- <p>Diligord</p>
                            <span>Lorem ipsum</span> -->
                            <i class="fa-solid fa-code fa-5x" style="color: ;"></i>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner" onclick="window.location.href='http://waris.water.gov.my/'">
                        <h4>Water Resource Index System</h4>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container"  onclick="window.location.href='https://ezran.my/drone/'">
                    <div class="front" style="background-image: url(image/caam.jpg)" >
                        <div class="inner">
                            <!-- <p>Diligord</p>
                            <span>Lorem ipsum</span> -->
                            <i class="fa-solid fa-code fa-5x" style="color: ;"></i>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner" onclick="window.location.href='https://ezran.my/drone/'">
                        <h4>CAAM Drone</h4>
                        </div>
                    </div>
                </div>
            </div>         
        </div>
    </div>
    </div>
    </body>
</html>
