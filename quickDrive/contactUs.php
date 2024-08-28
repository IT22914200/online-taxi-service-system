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
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//data inserting
$sql = "INSERT INTO contactus(cust_name, cust_email, cust_subject, 	cust_message) 
VALUES('$name', '$email', '$subject', '$message')";
if (mysqli_query($conn, $sql)) {
     echo '<script>
if(confirm("Response Submitted.")) {
  window.location.href = "update_contactus.php";
} else {
  window.location.href = "";
}
</script>';
    }else { echo "Error: " . mysqli_error($conn);}
  mysqli_close($conn);
}
 ?>
<html lang="en">
    
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact us</title>
        <link rel="stylesheet" href="./style/contactus.css">
</head>
<style>
    * {
  margin: 0;
  padding: 0;
  font-family: Arial, Helvetica, sans-serif;
}


body {
  width: auto;
}

nav {
  display: flex;
  align-items: center;
  width: auto;
  height: 72px;
  flex-shrink: 0;
  background: #333;
}

nav > div {
  display: flex;
  justify-content: center;
  align-items: center;
}



main {
  background-color: #ffc700;
  margin-top: -30px;
  padding-bottom: 30px;
}
    .contactus {
  margin-top: 30px;
  margin-left: 100px;
  margin-right: 100px;
  margin-bottom: 100px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  
}

.contactus h1 {
  font-size: 50px;
  font-weight: 700;
  margin-bottom: 20px;
  margin-top: 40px;
}

.contactus p {
  font-size: 20px;
  font-weight: 500;
  margin-bottom: 10px;
}

.contactus-container {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  margin-top: 50px;
  position: relative;
  width: 468px;
  height: 202px;
  left: 394px;
  background-color: #333;
  color: #fff;
  top: 266px;
  border-radius: 20px;
  -webkit-border-radius: 20px;
}
.contactus-container > p {
  margin-left: 20px;
  margin-top: 20px;
  font-size: 30px;
  font-weight: 700;
  margin-bottom: 20px;
}
.address {
  margin-left: 20px;
  margin-top: 20px;
  font-size: 30px;
  font-weight: 700;
  margin-bottom: 20px;
}

.send-message {
  justify-content: center;
  align-items: center;
  width: 100%;
  margin-top: 283px;
  position: relative;
  width: 638px;
  height: 569px;
  left: -26px;
  background-color: #333;
  color: #fff;
  top: -228px;
  border-radius: 20px;
  -webkit-border-radius: 20px;
}

.send-message h1 {
  font-size: 50px;
  font-weight: 700;
  margin-bottom: 20px;
}

.send-message p {
  font-size: 20px;
  font-weight: 500;
  margin-bottom: 20px;
}

.send-message form {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.send-message form input,
.send-message form textarea {
  width: 80%;
  padding: 10px;
  margin-bottom: 20px;
  border: none;
  outline: none;
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
}

.send-message form input:focus,
.send-message form textarea:focus {
  border: 1px solid #ffc700;
}

.send-message form textarea {
  height: 200px;
  resize: none;
}

.send-message form button {
  width: 80%;
  padding: 10px;
  border: none;
  outline: none;
  background-color: #ffc700;
  color: #333;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
}

.send-message form button:hover {
  background-color: #333;
  color: #ffc700;
  transition: 0.5s;
}

.contactus-container .contactus-left,
.contactus-container .contactus-right {
  padding: 20px;
}
.send-message > h2 {
  margin-left: 20px;
  margin-top: 20px;
  font-size: 30px;
  font-weight: 700;
  margin-bottom: 20px;
}

.contactus-container .contactus-left {
  flex-basis: 50%;
  padding: 20px;
}

.contactus-container .contactus-left h2 {
  font-size: 30px;
  font-weight: 700;
  margin-bottom: 20px;
}

.contactus-container .contactus-left p {
  font-size: 20px;
  font-weight: 500;
  margin-bottom: 20px;
  padding: 20px;
}

.contactus-container .contactus-right {
  flex-basis: 50%;
  padding: 20px;
}

.contactus-container .contactus-right h2 {
  font-size: 30px;
  font-weight: 700;
  margin-bottom: 20px;
}

.contactus-container .contactus-right p {
  font-size: 20px;
  font-weight: 500;
  margin-bottom: 20px;
  padding: 20px;
}

.contactus-container .contactus-right form {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.contactus-left {
  flex-basis: 50%;
  padding: 20px;
}

.contactus-left h2 {
  font-size: 30px;
  font-weight: 700;
  margin-bottom: 20px;
}

.contactus-left p {
  font-size: 20px;
  font-weight: 500;
  margin-bottom: 20px;
  padding: 20px;
}

</style>
<body>
    <head></head>
      <!-- class="contact-main" -->
        <main>
            <section class="contactus">
                <h1 class="mainhead">Contact Us</h1>
                <p>When wanting to book a cab/taxi through QUICKDRIVE book A
                    Cab/Taxi(Pvt) Ltd.do take note of the conact details
                    mentioned
                    below.</p>

                <div class="send-message">
                    <h2>Send Us a Message</h2>
                    <form action="contactus.php" method="post">
                        <input type="text" name="name" placeholder="Name"
                            required>
                        <input type="email" name="email" placeholder="Email"
                            required>
                        <input type="text" name="subject" placeholder="Subject"
                            required>
                        <textarea name="message" placeholder="Message" required></textarea>
                        <button type="submit" value="submit" name="submit">Send Message</button>
                    </form>
                </div>

            </section>

        </main>
</body>    
</html> 
<?php
    include_once 'footer.php';
?>       