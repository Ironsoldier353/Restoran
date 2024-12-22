<?php require "../config/config.php"; ?>
<?php require "../libs/App.php"; ?>
<?php require "../includes/header.php"; ?>

<?php 
    if(isset($_POST['submit'])) {
        $review = $_POST['review'];
        $username = $_SESSION['username'];

        $query = "INSERT INTO reviews (review, username) VALUES (:review, :username)";
        $arr = [
            ":review" => $review,
            ":username" => $username,
        ];

        $path = "review.php";
        $app->insert($query, $arr, $path);
    }
?>

<!-- Hero Section with Breadcrumb -->
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Write a Review</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="<?php echo APPURL; ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Write Review</a></li>
            </ol>
        </nav>
    </div>
</div>

<!-- Reservation Start (Form Layout and Image) -->
<div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
    <div class="row g-0 align-items-center">
        
        <!-- Left Section (Image) -->
        <div class="col-md-6">
            <div class="image">
                <img src="../img/about-1.jpg" alt="Restoran infrastructure" class="img-fluid w-100 rounded" style="object-fit: cover;">
            </div>
        </div>

        <!-- Right Section (Review Form) -->
        <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Reservation</h5>
                <h1 class="text-white mb-4">Write a Review</h1>
                <form method="POST" action="review.php">
                    <div class="row g-3">
                        <!-- Review Textarea -->
                        <div class="col-12 mb-3">
                            <div class="form-floating">
                                <textarea name="review" class="form-control rounded-3" placeholder="Submit Review" id="message" style="height: 120px;"></textarea>
                                <label for="message">Submit Review</label>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-12">
                            <button name="submit" class="btn btn-primary w-100 py-3 rounded-3 shadow-sm" type="submit">Submit Review</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<?php require "../includes/footer.php"; ?>
