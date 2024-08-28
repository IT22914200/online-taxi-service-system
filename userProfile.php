<?php
include_once 'header.php';
require_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .button {
  width: 100%;
  padding: 10px 15px;
  text-align: center;
  border: none;
  border-radius: 3px;
  background-color: #4caf50;
  display: inline-block;
  color: white;
  cursor: pointer;
  margin: auto;
}
.container-fluid{
    align:center;
}
.wrapper {
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
.input{
    padding-left: 40px; 
}
        
    </style>
    </head>
<body>
    
<?php
    $condition = $_SESSION["username"]; 
    //echo $condition ;
    $sql = "SELECT * FROM registered_user WHERE userUid='$condition'";
    $result = $conn->query($sql);
                
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
?>
           <h2 class="w3-wide w3-center">My Profile</h2>                     
    <div class="wrapper">
       
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                   
                    <div class="form-group">
                        <label><b>First Name : </b></label>
                        <p class= "input"><?php echo $row["firstName"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label><b>Last Name :</b></label>
                        <p class= "input"><?php echo $row["lastName"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label><b>Mobile Number :</b></label>
                        <p class= "input"><?php echo $row["mobileNumber"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label><b>Email :</b></label>
                        <p class= "input"><?php echo $row["eMail"]; ?></p>
                    </div>
                            
                    <p><a href="index.php" class="button">Back</a></p>
                </div>
            </div>
        </div>        
    </div>
     <?php    
       }
     }
    ?>
   
</body>

</html>

<?php
    include_once 'footer.php';
?>
