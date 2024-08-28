<?php
include_once 'header.php';

$serverName = "localhost";
$dbUsername = "OCTR123";
$dbPassword = "";
$dbName = "octr";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed : " .mysqli_connect_error());
}

//check if the form submitted
if (isset($_POST['submit'])) {

//Retrieve form data
$fullname = $_POST['fullnamei'];
$id = $_POST['idi'];
$contact = $_POST['contacti'];
$driverid = $_POST['driveridi'];
$review = $_POST['reviewi'];

//data inserting
$sql = "INSERT INTO review(Full_Name, ID, Contact, 	DriverID, Review) 
VALUES('$fullname', '$id', '$contact', '$driverid', '$review')";
if (mysqli_query($conn, $sql)) {
      echo '<script>
if(confirm("Review Submitted.Do you want to edit the review?")) {
  window.location.href = "update_review.php";
} else {
  window.location.href = "";
}
</script>';
    }else { echo "Error: " . mysqli_error($conn);}
// Close the database connection
  mysqli_close($conn);
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
    <link rel="stylesheet" href="./style/review.css">
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous">
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
      crossorigin="anonymous"></script>
  
    <style>
        * {
  margin: 0;
  padding: 0;
  font-family: Arial, Helvetica, sans-serif;
}

header {
  position: relative;
  width: auto;
  box-shadow: -3px -15px 20px 12px #211e1c;
}

body {
  width: auto;
}
        body {
  background-color: #ffc700 !important;
}
.btn-primary {
  background-color: #ffc700 !important;
  color: white;
  border: none;
}

@media (max-width: 481px) {
  .form-black {
    padding-right: 2rem !important;
    padding-left: 2rem !important;
    width: 100%;
  }
}

.login {
  margin-left: 700px;
  margin-right: 50px;
}

    </style>



    </head>
  <body>
    <div
      class="container  mt-10 d-flex justify-content-center flex-column align-items-center">
      <h1 class="text-center">QUICK DRIVE</h1>
      <p class="text-center">Add Your Review
      </p>

      <div class="col-sm-5 bg-dark text-white px-5 pt-5 pb-5 form-black"
        style="border-radius:15px;">

        <div class="form-box">
          <div class="form-top">
            <div class="form-top-left text-center">
              <h3>Add A Review</h3>
            </div>
            <div class="form-top-right">
              <i class="fa fa-pencil"></i>
            </div>
          </div>
          <div class="form-bottom">
            <form role="form" action method="post" class="registration-form">
              <div class="form-group mb-3">
                <label class="sr-only" for="form-first-name">Full Name</label>
                <input type="text" name="fullnamei"
                  placeholder="Full Name ..."
                  class="form-first-name form-control" id="form-first-name">
              </div>
              <div class="form-group mb-3">
                <label class="sr-only" for="form-last-name">ID</label>
                <input type="text" name="idi"
                  placeholder="Id Number..." class="form-last-name form-control"
                  id="form-last-name">
              </div>
              <div class="form-group mb-3">
                <label class="sr-only" for="form-email">Conact</label>
                <input type="text" name="contacti" placeholder="Contact..."
                  class="form-email form-control" id="form-email">
              </div>
              <div class="form-group mb-3">
                <label class="sr-only" for="form-email">Driver ID</label>
                <input type="text" name="driveridi"
                  placeholder="ID of driver..." class="form-email form-control"
                  id="form-email">
              </div>
              <div class="form-group mb-3">
                <label class="sr-only" for="form-about-yourself">Review</label>
                <textarea name="reviewi" placeholder="Review..."
                  class="form-about-yourself form-control"
                  id="form-about-yourself"></textarea>
              </div>
              <div class="text-center">
                <button type="submit" name="submit" value="submit" class="btn btn-primary mt-5">Add Review</button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>

  </body>
</html>
<?php
    include_once 'footer.php';
?>