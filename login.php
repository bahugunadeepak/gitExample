<? header('Content-type: text/html; charset=UTF-8'); ?>
<? header('X-Frame-Options:SAMEORIGIN');?>
<meta content="text/html; charset=UTF-8; X-Content-Type-Options=nosniff" http-equiv="Content-Type" />

<? header("X-Content-Type-Options: nosniff"); ?>
<? ini_set("session.cookie_secure", 1); ?>


<?php
$arr_cookie_options = array (
                'expires' => time() + 60*60*24*30,
                'path' => '/',
                'domain' => 'localhost.com', // leading dot for compatibility or use subdomain
                'secure' => true,     // or false
                'httponly' => true,    // or false
                'samesite' => 'None' // None || Lax  || Strict
                );

//print_r($arr_cookie_options); die;
@setcookie('TestCookie', 'The Cookie Value', @$arr_cookie_options);   
?>

<style type="text/css">  
form 
{
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 90%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 2% 18%;
  border: none;
  cursor: pointer;
  width: 50%; 
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;  
  width: 30%;
  margin: auto;
  font-size: 18px;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.maincontainer{
  padding: 56px;
  width: 30%;
  margin: auto;
  border: 1px solid #CCCCCC;
}
.container {
  padding: 16px;
  width: 
  100%;
  margin: auto;
}


/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
</style>

<form action="loginvalidate.php" id="frm_login" name="frm_login" method="POST">
  <div class="maincontainer">
  <div class="imgcontainer">  Login <br> <br>
    <img src="images/img_avatar.png" alt="Avatar" class="avatar">
  </div>
  <div class="container">
    <?
      $id = @$_REQUEST['id'];
      if($id==5){?>
    <div style="background: red; color:#fff; text-align: center;">Your Account is temperorily locked, Kinldy contact the administrator, Thanks</div>
    <? } ?>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" autocomplete="off" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="passwd" autocomplete="off" required>

    <button type="submit">Login</button>
    
  </div>

  
</div>

</form>