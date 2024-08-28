<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Available Cars</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            margin-top: 30px;
        }

        .car-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .car {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin: 20px;
            width: 250px;
            text-align: left;
        }

        .car img {
            width: 100%;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .car h2 {
            margin-top: 10px;
            margin-bottom: 5px;
        }

        .car p {
            margin: 5px 0;
        }
        .car-container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.threewheel {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
    </style>
</head>
<body>
    <h1>Available three wheel</h1>
    <div class="car-container">
        <div class="threewheel">
            <img src="./images/bajaj.jpeg" alt="Car 1">
            <h2>Bajaj</h2>
            <p>Fuel Type: petrol</p>
            <p>Seats: 3</p>
            <p>Vehicle code: AAB2356</p>
            <p>Price: rs.1500.00 per day</p>
        </div>
        <div class="threewheel">
            <img src="./images/tvs.jpeg" alt="Car 2">
            <br><br>
            <h2>TVS</h2>
            <p>Fuel Type: petrol</p>
            <p>Seats: 3</p>
            <p>Vehicle code: AAC5689</p>
            <p>Price: rs.2000.00 per day</p>
        </div>
       
    </div>
</body>
</html>
<?php
    include_once 'footer.php';
?>
