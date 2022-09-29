<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>ARTANIS CLOUD</title>
    <style>
    video {
        /* position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        min-height: 100vh;
        object-fit: cover;
        min-width: 100%;
        min-height: 100vh;
        z-index: 1; */
        /* position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%; */
    }
    *{
        font-family: 'Poppins', sans-serif;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body{
        /* background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab); */
        background: linear-gradient(-45deg, #E94560, #5F6F94, #97D2EC, #16213E);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
        height: 100vh;
    }
    
    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }
    .artanis {
        text-align:left;
        color:#31E1F7;
        /* padding:5%; */
        /* display:inline-block; */
        /* background: rgba(0, 0, 0, 0.5);
        color: #f1f1f1;
        width: 100%;
        padding: 20px; */
    }
    
    .artanis h1{
        font-size:5em;
        color:#0F3460;
        padding-left:5%;
        padding-top:2%;
    }
    .artanis h2{
        font-size:2em;
        font-weight:200;
        color:#0F3460;
        padding-left:5%;
    }
    .container {
        justify-content:center;
        display: flex;
        margin:auto;
        padding: 10px 30px;
        padding-top: 3%;
        /* width:25%;
        float:right; */
        /* padding:3%; */
    }
       /* CSS */
       .button-52 {
        font-size: 16px;
        font-weight: 4000;
        letter-spacing: 1px;
        padding: 13px 20px 13px;
        outline: 0;
        border: 1px  solid #0F3460;
        cursor: pointer;
        position: relative;
        background-color: rgba(0, 0, 0, 0);
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;

        /* display: inline-block;
        margin-left: 0;
        margin-right: 0; */
        }

        .button-52:after {
        content: "";
        background-color: #31E1F7;
        width: 100%;
        z-index: -1;
        position: absolute;
        height: 100%;
        top: 7px;
        left: 7px;
        transition: 0.2s;
        }

        .button-52:hover:after {
        top: 0px;
        left: 0px;
        }

        @media (min-width: 768px) {
        .button-52 {
            padding: 13px 50px 13px;
        }
        }
        
        #title {
        color:#999;
        text-transform: uppercase;
        font-size:36px;
        font-weight:bold;
        /* padding-top:200px;   */
        /* position:fixed; */
        width:100%;
        bottom:45%;
        display:block;
        }

        #flip {
        height:50px;
        overflow:hidden;
        }

        #flip > div > div {
        color:#fff;
        /* padding:4px 12px; */
        height:45px;
        margin-bottom:45px;
        display:inline-block;
        }

        #flip div:first-child {
        animation: show 5s linear infinite;
        }

        #flip div div {
        background:#42c58a;
        }
        #flip div:first-child div {
        background:#4ec7f3;
        }
        #flip div:last-child div {
        background:#DC143C;
        }

        @keyframes show {
        0% {margin-top:-270px;}
        5% {margin-top:-180px;}
        33% {margin-top:-180px;}
        38% {margin-top:-90px;}
        66% {margin-top:-90px;}
        71% {margin-top:0px;}
        99.99% {margin-top:0px;}
        100% {margin-top:-270px;}
        }
        

    </style>
</head>
<body>
    <img style="padding-left:5%; padding-top:3%; font-size:50px; text-align:left;" src="AC_logo.png">
    <!-- <header style="padding:5%; font-size:50px; text-align:left; font-weight: 100;">
        ARTANIS CLOUD
    </header> -->
    <!-- <video src="video.mp4" muted loop autoplay></video> -->
    <div class="artanis">
        <h1 style="padding-bottom:0%;">NEVER STOP</h1>
        <h1 style="padding-top:0%;">EXPLORING</h1>
           
        <!-- <div id=title>
            <div id=flip>
                <div><div>EXPLORING</div></div>
                <div><div>LEARNING</div></div>
                <div><div>ADVENTURING</div></div>
            </div>
        </div> -->
        
        
        <h2>Artanis Cloud is a software development company on Artificial Intelligience.</h2>
        <div class="container">
            <!-- <a href="https://www.artaniscloud.com/">Go to artaniscloud.com</a>
            <a href="login.php">Go to dev.ezran.my</a>
            <a href="https://elixirush.com/">Go to elixirush.com</a>
            <a href="https://lootbox.my/">Go to lootbox.my</a> -->
            <button class="button-52" onclick="window.location.href='https://www.artaniscloud.com/'">Go to artaniscloud.com</button>
            <button class="button-52" onclick="window.location.href='login.php'">Go to dev.ezran.my</button>
            <button class="button-52" onclick="window.location.href='https://elixirush.com/'">Go to elixirush.com</button>
            <button class="button-52" onclick="window.location.href='https://lootbox.my/'">Go to lootbox.my</button>
        </div>
        <!-- <div id=container>
        Make 
        <div id=flip>
            <div><div>wOrK</div></div>
            <div><div>lifeStyle</div></div>
            <div><div>Everything</div></div>
        </div>
        AweSoMe!
        </div> -->
    </div>
</body>
</html>