<?php
       include_once 'header.php';
?>

<div class ="form" >
    <h1>Taxi driver registation</h1>

<form action="includes/driverSignup.inc.php" method="post">
    <input type="text" id="fname" name="name" placeholder="first Name">
    <input type="text" id="fname" name="lname" placeholder="last Name">
    <input type="text" id="fname" name="DOB" placeholder="DOB">
    <input type="text" id="fname" name="Mobile number" placeholder="Mobile number">
    <input type="text" id="fname" name="email" placeholder="Email">
    <input type="text" id="fname" name="driverUserName" placeholder="User Name">
    <input type="password" id="enterpassword" name="pwd" placeholder="Enter password">
    <input type="password" id="confirmpassword" name="pwdrepeat" placeholder="Confirm password">
    <input type="text" id="fname" name="ID" placeholder="ID number">
    <input type="text" id="fname" name="vtype" placeholder="Vehicle type">
    <input type="text" id="fname" name="v_reg_num" placeholder="Vehicle registered number">
    <input type="text" id="fname" name="DL_num" placeholder="Driving license number">
  <button name="submit" type="submit">Register</button>
  </form>
  <?php
  if(isset($_GET["error"])){
    if ($_GET["error"] == "emptyinput"){
        echo '<div class="error">Fill in the all fields! </div>';
    } elseif ($_GET["error"] == "invaliduid"){
        echo '<div class="error">Invalid Username! </div>';
    } elseif ($_GET["error"] == "invalidemail"){
        echo '<div class="error">Invalid Email! </div>';
    } elseif ($_GET["error"] == "passwordsdontmatch"){
        echo '<div class="error">Passwords not matching! </div>';
    } elseif ($_GET["error"] == "stmtfailed"){
        echo '<div class="error">Something went wrong!</div>';
    } elseif ($_GET["error"] == "none"){
        echo '<div class="error">Account Created</div>';
    } elseif ($_GET["error"] == "usernametaken"){
        echo '<div class="error">Username / Email already in use!</div>';
    }
}
    
  
  ?>


<p> Already have an account? <a href="driverLogin.php">Log in.</a></p>

</div>
<?php
include_once 'footer.php';
?>

