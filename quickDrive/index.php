<?php
    include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online Cab & taxi Reservation</title>
        <link rel="stylesheet" href="./style/style.css">
       
       <style>
        .hero-section > div > img {
  width: 100px;
}

.hero-section {
  background-image: url(./images/hero.jpg); 

  height: 676px;
  flex-shrink: 0; 
}

.hero > h1 {
  color: #fff;
  text-align: center;
  font-size: 64px;
  font-style: normal;
  font-weight: 700;
  line-height: normal;
  -webkit-text-stroke: 3px black;
  -webkit-text-fill-color: white;
}
.hero {
  position: relative;
  top: 400px;
  left: 50px;
  display: inline-block;
}
.btn {
  border-radius: 25px;
  border: 2px solid #000;
  background: #e0b824;
  box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
  display: flex;
  width: 202px;
  height: 54px;
  padding: 21px 36px;
  justify-content: center;
  align-items: center;
  gap: 10px;
  flex-shrink: 0;
  margin: 220px;
}
.btn-div {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: -15px;
}

.btn > a {
  text-decoration: none;
  color: #000;
  text-align: center;

  font-size: 16px;
  font-style: normal;
  font-weight: 700;
  line-height: normal;
}

.btn:hover {
  border: 2px solid black;
  background-color: #ffc700;
  box-shadow: 0px 1px 4px 4px rgb(0 0 0 / 105%);
  transition: 0.5s;
}

</style>
    </head>
    <body> 
   
        <section class="hero-section">
            <center>
                <div class="hero">
                    <div class="btn-div">
                        <button class="btn"><a href="bookNow.php"> BOOK NOW </button>
                        </div>
                    </div>
                </center>
            </section>

            <!-- end of the hero section -->
        
           
            <div class="categories-section">
                <center><h2 class="cate-h" style="font-size: 60px;">Categories</h2></center>
                <hr>
                <div class="category-column">
                    <a href="availableCars.php">
                        <img src="./images/58-audi-png-car-image 1.png"
                            alt="Category 1">
                            
                        <h2>CARS</h2>
                    </a>
                </div>
                <div class="category-column cab">
                    <a href = availableThreeWheeler.php>
                        <img src="./images/threewheel.png"   
                            alt="Category 2">
                        <h2>THREE WHEELERS</h2>
                    </a>
                </div>
                <div class="category-column cab">
                    <a href="availableCabs.php">
                        <img src="./images/taxi-26001 1.png" alt="Category 3">
                        <h2>CABS</h2>
                    </a>
                </div>
            </div>  

        </body>
    </html>
    <?php
    include_once 'footer.php';
?>
   