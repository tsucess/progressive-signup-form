<?php
// require "./config/database.php";

// get back form data if there was registeratio error
$firstname = $_SESSION['signup-data']['fname'] ?? null;
$lastname = $_SESSION['signup-data']['lname'] ?? null;
$username = $_SESSION['signup-data']['username'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;


unset($_SESSION['signup-data']);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="css/p-style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <style>
        .logo-style{
            width: 8rem;
            height: 8rem;
            border-radius: 50%;
            background: #be3b07;
            padding: 1.5rem;
            margin: 0 auto;
            margin-top: -5rem;
        }
        .form_section-container{
            padding-top: 0;
            margin-top: -5rem;
        }

    </style>
</head>

<body>
<div class="logo-style">
            <img src="./img/sm-logo.png" alt="finder-logo">
        </div>
    <div class="wrapper">
        <div class="header">
            <ul>
                <li class="active form_1_progressbar">
                    <div>
                        <p>1</p>
                    </div>
                </li>
                <li class="form_2_progressbar">
                    <div>
                        <p>2</p>
                    </div>
                </li>
                <li class="form_3_progressbar">
                    <div>
                        <p>3</p>
                    </div>
                </li>
            </ul>
        </div>
        <form action="<?php //ROOT_URL ?>signup-logic.php" enctype="multipart/form-data" method="POST">
            <div class="form_wrap">
            <?php if (isset($_SESSION['signup'])) : ?>
                <div class="alert_message error">
                    <p> <?= $_SESSION['signup'];
                        unset($_SESSION['signup']) 
                        ?>
                    </p>
                </div>
            <?php endif ?>
                <div class="error_text">Some fields are empty</div>
                <div class="form_1 data_info">
                    <h2>Contact Info</h2>
                    <!-- <form action=""> -->
                        <div class="form_container">
                            <div class="input_wrap">
                                <label for="contact">Contact Number</label>
                                <input type="text" name="contact_number" placeholder="Enter a valid phone number"
                                    class="data_input" id="contact">
                            </div>
                            <div class="input_wrap">
                                <label for="verify">Verification Code</label>
                                <input type="text" name="verification_number" placeholder="Enter verification code"
                                    class="data_input" id="verify">
                            </div>
                        </div>
                    <!-- </form> -->
                </div>
                <div class="form_2 data_info" style="display: none;">
                    <h2>Personal Info</h2>
                    <!-- <form action=""> -->
                        <div class="form_container">
                            <div class="input_wrap">
                                <label for="">First Name</label>
                                <input type="text" name="fname" value="<?= $firstname ?>" class="data_input" placeholder="Enter First Name">
                            </div>
                            <div class="input_wrap">
                                <label for="">Last Name</label>
                                <input type="text" name="lname" value="<?= $lastname ?>" class="data_input" placeholder="Enter Last Name">
                            </div>
                            <div class="input_wrap">
                                <label for="">Email Address</label>
                                <input type="email" name="email" value="<?= $email ?>" class="data_input" placeholder="Enter Email Address">
                            </div>
                        </div>
                    <!-- </form> -->
                </div>
                <div class="form_3 data_info" style="display: none;">
                    <h2>Security Info</h2>
                    <!-- <form action=""> -->
                        <div class="form_container">
                            <div class="input_wrap">
                                <label for="">Username</label>
                                <input type="text" name="username" value="<?= $username ?>" class="data_input" placeholder="Enter Username">
                            </div>
                            <div class="input_wrap">
                                <label for="">Password</label>
                                <input type="password" name="password" value="<?= $createpassword ?>" id="password" class="data_input" placeholder="Enter password">
                            </div>
                            <div class="input_wrap">
                                <label for="">Confirm Password</label>
                                <input type="password" name="confirmpassword" value="<?= $confirmpassword ?>" id="c_password" class="data_input" placeholder="Retype password">
                            </div>
                        </div>
                    <!-- </form> -->
                </div>
            </div>
            <div class="btns_wrap">
                <div class="common_btns form_1_btns">
                    <button type="button" class="btn_next" id="v_btn" disabled>Next <span class="icon"></span></button>
                </div>
                <div class="common_btns form_2_btns" style="display: none;">
                    <button type="button" class="btn_back">Back <span class="icon"></span></button>
                    <button type="button" class="btn_next">Next <span class="icon"></span></button>
                </div>
                <div class="common_btns form_3_btns" style="display: none;">
                    <button type="button" class="btn_back">Back <span class="icon"></span></button>
                    <button type="button" class="btn_done" id="done_btn" disabled>Done <span class="icon"></span></button>
                </div>
            </div>
        </form>
    </div>


    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>