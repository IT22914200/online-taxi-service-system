<?php
include_once 'header.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update_Review</title>
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

    <?php

$serverName = "localhost";
$dbUsername = "OCTR123";
$dbPassword = "";
$dbName = "octr";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed : " .mysqli_connect_error());
}


if (isset($_POST['update'])) {
    //get database data
    $fullname = $_POST['fullname'];
    $id = $_POST['id'];
    $contact = $_POST['contact'];
    $driverid = $_POST['driverid'];
    $review = $_POST['review'];    

    // Update relavant row database
    $sql = "UPDATE review SET Full_Name='$fullname', ID='$id', Contact='$contact', DriverID='$driverid', Review='$review' ORDER BY Request_id DESC LIMIT 1";
    if (mysqli_query($conn, $sql)) 
    {
        echo "<script>alert('Record updated')</script>";
    } else 
    {
        echo "Error updating record: " . mysqli_error($conn);
    }
} elseif (isset($_POST['delete']))
{
    // Delete relavant row from database
    $sql = "DELETE FROM review ORDER BY Request_id DESC LIMIT 1";
    if (mysqli_query($conn, $sql)) 
    {
        echo '<script>
        if(confirm("Record Deleted. Back to review Page ?")) 
        {
            window.location.href = "review.php";
        }else 
        {
            window.location.href = "index.php";
        }
        </script>';
    } else 
    {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

// get data form database
$sql = "SELECT * FROM review ORDER BY Request_id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_assoc($result);
?>
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
              <h3>Edit A Review</h3>
            </div>
            <div class="form-top-right">
              <i class="fa fa-pencil"></i>
            </div>
          </div>
          <div class="form-bottom">
            <form role="form" action="update_review.php" method="post" class="registration-form">
              <div class="form-group mb-3">
                <label class="sr-only" for="form-first-name">Full Name</label>
                <input type="text" name="fullname" value="<?php echo $row['Full_Name']; ?>"
                  placeholder="Full Name ..."
                  class="form-first-name form-control" id="form-first-name">
              </div>
              <div class="form-group mb-3">
                <label class="sr-only" for="form-last-name">ID</label>
                <input type="text" name="id"  value="<?php echo $row['ID']; ?>"
                  placeholder="Id Number..." class="form-last-name form-control"
                  id="form-last-name">
              </div>
              <div class="form-group mb-3">
                <label class="sr-only" for="form-email">Conact</label>
                <input type="text" name="contact"  value="<?php echo $row['Contact']; ?>"placeholder="Contact..."
                  class="form-email form-control" id="form-email">
              </div>
              <div class="form-group mb-3">
                <label class="sr-only" for="form-email">Driver ID</label>
                <input type="text" name="driverid"  value="<?php echo $row['DriverID']; ?>"
                  placeholder="ID of driver..." class="form-email form-control"
                  id="form-email">
              </div>
              <div class="form-group mb-3">
                <label class="sr-only" for="form-about-yourself">Review</label>
                <textarea name="review" placeholder="Review..."
                  class="form-about-yourself form-control"
                  id="form-about-yourself"><?php echo $row['Review']; ?></textarea>
              </div>
              <div class="text-center">
                <button type="submit" name="update" value="update" class="btn btn-primary mt-5">Update</button>
                <button type="submit" name="delete" value="delete" class="btn btn-primary mt-5">Delete</button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>

  </body>
</html>
<?php
} else 
{
    echo "Please submit a review first.";
}

//This Close the database connection
mysqli_close($conn);
?>
<?php
    include_once 'footer.php';
?>