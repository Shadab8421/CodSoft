<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>

    </style>
    <title>JetSetGo</title>
</head>

<body>
    <?php
    @include 'header.php';
    ?>
    <div class="container">
        <h1> Booking Form</h1>
        <form class="booking-form">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" placeholder="Enter your Address" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group">
                <label for="from">From:</label>
                <input type="text" id="from" name="from" placeholder="Place from we will pickup you" required>
            </div>
            <div class="form-group">
                <label for="to">To:</label>
                <input type="text" id="to" name="to" placeholder="Place you want to visit" required>
            </div>
            <div class="form-group">
                <label for="guests">Number of Guests:</label>
                <input type="number" id="guests" name="guests" placeholder="How Many in numbers" required>
            </div>
            <div class="form-group">
                <label for="arrival">Date of Arrival:</label>
                <input type="date" id="arrival" name="arrival" required>
            </div>
            <div class="form-group">
                <label for="leaving">Date of Leaving:</label>
                <input type="date" id="leaving" name="leaving" required>
            </div>
            <button type="submit">Book Now</button>
        </form>
    </div>
    <?php
    @include 'footer.php';
    ?>

</body>

</html>