 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
     <link rel="stylesheet" href="style.css" />
     <title>Document</title>
 </head>

 <body>


     <!-- header section starts -->

     <section class="header">
         <a href="home.php" class="logo">JetSetGo</a>
         <div id="menu-btn" class="fas fa-bars"></div>
         <nav class="navbar">
             <a href="home.php">Home</a>
             <a href="about.php">About</a>
             <a href="package.php">Package</a>
             <a href="book.php">Book</a>
         </nav>
     </section>
     <!-- header section ends -->
     <section class="slider">
         <div class="slideshow-container">
             <div class="mySlides fade">
                 <img src="./images/img1.jpg" style="width: 100%" />
                 <div class="text">Explore Beautifull Beaches</div>
             </div>

             <div class="mySlides fade">
                 <img src="./images/img2.jpg" style="width: 100%" />
                 <div class="text">Discover Exotic Destinations</div>
             </div>

             <div class="mySlides fade">
                 <img src="./images/img3.jpg" style="width: 100%" />
                 <div class="text">Experience Adventure Like Never Before</div>
             </div>
         </div>
         <br />

         <div style="text-align: center">
             <span class="dot"></span>
             <span class="dot"></span>
             <span class="dot"></span>
         </div>
     </section>
     <script src="script.js"></script>
 </body>

 </html>