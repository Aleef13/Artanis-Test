<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>ARTANIS CLOUD  WEBSITE</title>
    <style>
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
        font-weight:500;
        color:#0F3460;
        
        padding-left:5%;
    }
    .container {
        justify-content:center;
        display: flex;
        margin:auto;
        padding: 10px 30px;
        /* padding-top: 3%; */
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
        /* position:center; */
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
        
        .row::after {
        content: "";
        clear: both;
        display: table;
        }
        
        .col-1 {width: 8.33%;}
        .col-2 {width: 16.66%;}
        .col-3 {width: 25%;}
        .col-4 {width: 33.33%;}
        .col-5 {width: 41.66%;}
        .col-6 {width: 50%;}
        .col-7 {width: 58.33%;}
        .col-8 {width: 66.66%;}
        .col-9 {width: 75%;}
        .col-10 {width: 83.33%;}
        .col-11 {width: 91.66%;}
        .col-12 {width: 100%;}
                
        [class*="col-"] {
        float: left;
        padding: 15px;
        }

        li{
            /* padding:20%; */
            padding-right:10%;
            padding-bottom:30px;
        }

    </style>
</head>
<body>
    <div class="artanis">
            <img style="padding-left:5%; padding-top:3%; font-size:50px; text-align:left;" src="image\AC_logo.png">
            </div>
    <div class="row">
        <div class="col-9">
            <div class="artanis">
            <!-- <img style="padding-left:5%; padding-top:3%; font-size:50px; text-align:left;" src="AC_logo.png"> -->
            <h1 style="padding-bottom:0%;">NEVER STOP</h1>
            <h1 style="padding-top:0%;">EXPLORING</h1>
            <h2>Artanis Cloud is a software development company on Artificial Intelligience.</h2>
            </div>
        </div>
        <div class="col-3">
            <div class="container">
                <ul style="list-style-type: none;">
                <li><button class="button-52" onclick="window.location.href='https://www.artaniscloud.com/'">Go to artaniscloud.com</button></li>
                <li><a href="login.php"><button class="button-52">Go to dev.ezran.my</button></a></li>
                <li><button class="button-52" onclick="window.location.href='https://elixirush.com/'">Go to elixirush.com</button></li>
                <li><button class="button-52" onclick="window.location.href='https://lootbox.my/'">Go to lootbox.my</button></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>