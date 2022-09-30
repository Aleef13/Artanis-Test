
<!DOCTYPE html>
<html>
    <head>
        <title>Login Form</title>
        <meta charset = "UTF - 8">
		<meta name = "viewport"  content = "width = device - width, initial - scale = 1.0">
<!-- 
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
            *{
                margin:0;
                padding:0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }
        
        *, *:before, *:after{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        
        }
        body{
        background-color: #16213E;
        }

        form{
        height: 520px;
        width: 400px;
        background-color: rgba(255,255,255,0.13);
        position: absolute;
        transform: translate(-50%,-50%);
        top: 50%;
        left: 50%;
        border-radius: 10px;
        backdrop-filter: blur(20px);
        border: 2px solid rgba(255,255,255,0.1);
        box-shadow: 0 0 40px rgba(8,7,16,0.6);
        padding: 50px 35px;
        }
        form *{
        font-family: 'Poppins',sans-serif;
        color: #ffffff;
        letter-spacing: 0.5px;
        outline: none;
        border: none;
        }
        form h3{
        font-size: 32px;
        font-weight: 500;
        line-height: 42px;
        text-align: center;
        }

        label{
        display: block;
        margin-top: 30px;
        font-size: 16px;
        font-weight: 500;
        }
        input{
        display: block;
        height: 50px;
        width: 100%;
        background-color: rgba(255,255,255,0.07);
        border-radius: 3px;
        padding: 0 10px;
        margin-top: 8px;
        font-size: 14px;
        font-weight: 300;
        }
        ::placeholder{
        color: #e5e5e5;
        }

        .button{
        margin-top: 50px;
        width: 100%;
        background-color: #ffffff;
        color: #080710;
        padding: 15px 0;
        font-size: 18px;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
        }

        img.avatar {
        width: 40%;
        }

        .imgcontainer {
        text-align: center;
        }


        </style>
    </head>
    <body>

        <form id="first" action=" " method="post">
            <!-- <div class="image"></div> -->
            <div class="imgcontainer">
                <img src="image/AC_logo.png" alt="AC_logo" class="avatar">
            </div>
            <label for="username">Username</label>
            <input type="text" placeholder="Username" name="username">

            <label for="password">Password</label>
            <input type="password" placeholder="Password" name="pass">

            <!-- <button>Log In</button> -->
            <input type ="submit" value="Login" name="login" class="button">
        </form>

        <?php
            session_start(); /* START THE SESSION */

            include("config_artanis.php");

            if(isset($_POST["login"])){
                include 'config_artanis.php';

                $user = $_POST["username"];
                $pass = $_POST["pass"];
                $sqlcheck = "SELECT * FROM user WHERE Username = '$user' AND Password = '$pass'";
                $result = mysqli_query($conn,$sqlcheck);	
            
            if($result == 1){ /* IF FOUND ONE */
                $_SESSION["username"] = $user; /* STORE THE USERNAME INTO A SESSION VARIABLE */
                header("LOCATION:artanis_page.php"); /* REDIRECT USER TO INDEX PAGE */
            }
            else { /* IF NO RESULT FOUND */
                header("LOCATION:login.php"); /* REDIRECT USER TO LOGIN PAGE */
            }
            
            } /* END OF PREPARED STATEMENT */
            
        ?>
        
    </body>

</html>