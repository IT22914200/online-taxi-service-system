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
            border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
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
        /* div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
} */
    </style>
</head>
<body>
    <h1>Available general cars</h1>
    <div class="car-container">
        <div class="car">
            <img src="./images/carina.jpeg" alt="Car 1">
            <h2>Toyota Carina</h2>
            <p>Fuel Type: petrol</p>
            <p>Seats: 4</p>
            <p>Vehicle code: CARINA</p>
            <p>Price: rs.3500.00 per day</p>
        </div>
        <div class="car">
            <img src="./images/alto.jpeg" alt="Car 2">
            <h2>Suzuki Alto</h2>
            <p>Fuel Type: petrol</p>
            <p>Seats: 4</p>
            <p>Vehicle code: ALTO</p>
            <p>Price: rs.5000.00 per day</p>
        </div>
        <div class="car">
            <img src="./images/march.jpg" alt="Car 3">
            <h2>Nissan March</h2>
            <p>Fuel Type: petrol</p>
            <p>Seats: 4</p>
            <p>Vehicle code: MARCH</p>
            <p>Price: rs.3000.00 per day</p>
        </div>
        <div class="car">
            <img src="./images/civic.jpeg" alt="Car 4">
            <h2>Honda Civic</h2>
            <p>Fuel Type: petrol</p>
            <p>Seats: 4</p>
            <p>Vehicle code: CIVIC</p>
            <p>Price: rs.8000.00 per day</p>
        </div>
    </div>
</body>
</html>

<?php
    include_once 'footer.php';
?>
