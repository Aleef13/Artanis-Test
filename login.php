<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Form</title>
        <meta charset = "UTF - 8">
		<meta name = "viewport"  content = "width = device - width, initial - scale = 1.0">
<!-- 
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
       
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
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
        /* background-color: #16213E; */
        /* background-color: #4C6793; */
        background-image:url("image/wave.gif");
        background-size:100% 100%; 
        background-attachment:fixed;
        background-repeat:no-repeat;
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

        <!--Modal box error-->
        <div class="modal fade" id="modal_error"  aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Error</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Username or Password is incorrect!.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <!--Modal box success-->
        <!-- <div class="modal fade" id="modal_success"  aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Successfull</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Verification successfull.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="location.href = 'artanis_page.php';">Ok</button>
            </div>
            </div>
        </div>
        </div> -->

        <?php
            // session_start(); /* START THE SESSION */

            // include("config_artanis.php");

            // if(isset($_POST["login"])){
            //     include 'config_artanis.php';

            //     $user = $_POST["username"];
            //     $pass = $_POST["pass"];
            //      $sqlcheck = "SELECT * FROM user WHERE Username = '$user' AND Password = '$pass'";
            //     $result = mysqli_query($conn,$sqlcheck);	
            
            // if($result){ /* IF FOUND ONE */
            //     $_SESSION["username"] = $user; /* STORE THE USERNAME INTO A SESSION VARIABLE */
            //     header("LOCATION:artanis_page.php"); /* REDIRECT USER TO INDEX PAGE */
            // }
            // else { /* IF NO RESULT FOUND */
            //     header("LOCATION:login.php"); /* REDIRECT USER TO LOGIN PAGE */
            // }
            
            // } /* END OF PREPARED STATEMENT */
            include 'config_artanis.php';
            
            if(isset($_POST["login"])){
                include 'config_artanis.php';

                $user = $_POST["username"];
                $pass = $_POST["pass"];
                $sqlcheck = "SELECT * FROM user WHERE Username = '$user' AND Password = '$pass'";
                $result = mysqli_query($conn,$sqlcheck);	
                
                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        $_SESSION["username"] = $user;
                        echo "<script>location.href='artanis_page.php';</script>";
                        // $showModal = "";
                        //  header("LOCATION:artanis_page.php");
                    }else{
                        $showModal = "true";
                    }
                }
                
            }

            if(!empty($showModal)) {
                // CALL MODAL HERE
                echo '<script type="text/javascript">
                    $(document).ready(function(){
                        $("#modal_error").modal("show");
                    });
                </script>';
            } 
            // else{
            //     echo '<script type="text/javascript">
            //         $(document).ready(function(){
            //             $("#modal_success").modal("show");
            //         });
            //     </script>';
            // }
            
        ?>
       

    </body>

</html>