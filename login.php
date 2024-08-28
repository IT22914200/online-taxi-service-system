<?php
    include_once 'header.php';
?>
<body>
    <style>
.main {
  padding: 80px;
}
.form {
  max-width: 300px;
  margin: auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #f7f7f7;
  margin-top: 10px;
  margin-bottom: 30px;
  box-shadow: 2px 7px 12px 6px #211e1c;
}

.form img {
  max-width: 50%;
  margin: 20px;
  height: auto;
}


.form button[type="submit"] {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 3px;
  background-color: #4caf50;
  color: white;
  cursor: pointer;
}

.form button[type="submit"]:hover {
  background-color: #45a049;
}



</style>
    <div class="form">
        <h1>Login as a customer</h1>
        <center><img src="./images/user.png"></center>
    <form action="includes/login.inc.php" method="post">
        <input type="text" id="fname" name="uid" placeholder="Email / Username">
        <input type="password" id="lname" name="pwd" placeholder="Password">
        <button name="submit" type="submit">Login</button>
    </form>
    <?php
    if(isset($_GET["error"])){
        if ($_GET["error"] == "emptyinput"){
            echo '<div class="error">Fill in the all fields! </div>';
        } elseif ($_GET["error"] == "wronglogin"){
            echo '<div class="error">Invalid Details! </div>';
        }  elseif ($_GET["error"] == "stmtfailed"){
            echo '<div class="error">Something went wrong!</div>';
        } elseif ($_GET["error"] == "none"){
            echo '<div class="error">Account Created</div>';
        } 
    }
    ?>
   <p>New Here ? <a href="signup.php">Register.</a></p>

    </div>
</body>
<?php
    include_once 'footer.php';
?>