<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>JetSetGo.com</title>
</head>

<body>
    <?php @include 'header.php';?>
    <section class="gallery">
        <h1 class="gallery-heading">Explore This Amazing Places.</h1>
        <div class="gallery-container">
            <div class="gallery-item">
                <img src="./images/pic1.jpg" alt="Destination 1 Image 1" />
            </div>
            <div class="gallery-item">
                <img src="./images/pic6.jpg" alt="Destination 1 Image 2" />
            </div>
            <div class="gallery-item">
                <img src="./images/pic8.jpg" alt="Destination 1 Image 3" />
            </div>
            <div class="gallery-item">
                <img src="./images/pic2.jpg" alt="Destination 1 Image 3" />
            </div>
            <div class="gallery-item">
                <img src="./images/pic9.jpg" alt="Destination 1 Image 3" />
            </div>


        </div>
    </section>
    <section class="services">
        <div class="service">
            <h2>Adventure</h2>
            <p>Experience thrilling adventures in the great outdoors.</p>
        </div>
        <div class="service">
            <h2>Tour Guide</h2>
            <p>Our expert guides will lead you on unforgettable journeys.</p>
        </div>
        <div class="service">
            <h2>Trekking</h2>
            <p>Explore scenic trails and discover breathtaking landscapes.</p>
        </div>
        <div class="service">
            <h2>Camp Fire</h2>
            <p>Gather around the campfire for a cozy evening under the stars.</p>
        </div>
    </section>
    <?php 
@include 'packs.php';
?>


    <?php 
@include 'footer.php';
?>



</body>

</html>