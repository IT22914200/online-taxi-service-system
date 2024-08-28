<!DOCTYPE html>
<html lang="en">


<?php
//check if the form submitted
  if (isset($_POST['submit'])) {
    $serverName = "localhost";
$dbUsername = "OCTR123";
$dbPassword = "";
$dbName = "octr";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed : " .mysqli_connect_error());
}
 
//Retrieve form data
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$issue = $_POST['issue'];

//data inserting
$sql = "INSERT INTO help_and_support(First_Name, Last_Name, Email, 	Mobile, Issue) 
VALUES('$firstName', '$lastName', '$email', '$mobile', '$issue')";
      if (mysqli_query($conn, $sql)) {
        echo '<script>
  if(confirm("Response Submitted. Do you want to edit the response?")) {
    window.location.href = "update_response.php";
  } else {
    window.location.href = "";
  }
</script>';
      }else { echo "Error: " . mysqli_error($conn);}
// Close the database connection
    mysqli_close($conn);
  }
   ?>




<?php
include_once 'header.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help and Support</title>
    <link rel="stylesheet" href="./style/review.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <style>
        /* Your custom CSS styles */
        body {
            background-color: #ffc700 !important;
        }
        .btn-primary {
            background-color: #ffc700 !important;
            color: white;
            border: none;
        }
        .contact {
            background-color: #ffc700;
            padding: 50px;
        }
        .title {
            text-align: center;
        }
        .title h2 {
            font-size: 28px;
        }
        .box {
            background: #fff;
            border-radius: 15px;
            padding: 20px;
        }
        .cntacts h3 {
            font-size: 20px;
        }
        .formbox {
            width: 100%;
            margin-top: 20px;
        }
        .row50 {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .inputbox {
            flex: 1;
        }
        .inputbox span {
            font-weight: bold;
        }
        .inputbox input,
        .inputbox textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .row100 {
            margin-bottom: 20px;
        }
        .last {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }
        .last span {
            font-size: 30px;
            margin-right: 10px;
        }
        .abc {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container mt-10 d-flex justify-content-center flex-column align-items-center">
        <div class="title">
            <h2>HELP AND SUPPORT</h2>
        </div>
        <div class="box">
            <div class="cntacts form">
                <h3>How can we help you?</h3>
                <form method="post" enctype="multipart/form-data" id="myForm">
                    <div class="formbox">
                        <div class="row50">
                            <div class="inputbox">
                                <span>First Name :</span>
                                <input type="text" name="firstName" placeholder="First Name" autocomplete="off" required>
                            </div>
                            <div class="inputbox">
                                <span>Last Name :</span>
                                <input type="text" name="lastName" placeholder="Last Name" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="row50">
                            <div class="inputbox">
                                <span>Email :</span>
                                <input type="email" name="email" placeholder="Email" autocomplete="off" required>
                            </div>
                            <div class="inputbox">
                                <span>Mobile :</span>
                                <input type="text" name="mobile" placeholder="Mobile Num" pattern='[0-9]{10}' autocomplete="off" required>
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputbox">
                                <span>Describe your issue :</span>
                                <textarea
                                    placeholder="Write your question here..."
                                    name="issue" autocomplete="off" required
                                ></textarea>
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputbox">
                                <input type="submit" value="Submit" name="submit">
                            </div>
                        </div>
                        <div class="last">
                            <span><ion-icon name="hammer"></ion-icon></span>
                            <div class="abc">
                                Our customer care support will reply to you soon...
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    include_once 'footer.php';
?>