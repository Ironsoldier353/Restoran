<?php 
// Include necessary files
require "config/config.php";  // Make sure the config file is included
require "libs/App.php";  // Include the App class
require "includes/header.php"; 
?>

<div class="container text-center my-5">
    <h2 class="text-success">Table Booking Confirmed!</h2>
    <p>Thank you for your reservation. Your table has been successfully booked.</p>
    <a href="<?php echo APPURL; ?>" class="btn btn-primary">Go to Home Page</a>
</div>

<?php require "includes/footer.php"; ?>
