<?php require "../config/config.php"; ?>
<?php require "../libs/App.php"; ?>
<?php require "../includes/header.php"; ?>
<?php 


    if(!isset($_SERVER['HTTP_REFERER'])){
        echo "<script>window.location.href='".APPURL."'</script>";
        exit;
    }


?>
        <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Pay with PayPal</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="<?php echo APPURL; ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pay</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    <div class="container">  
                    <!-- sandbox Business account app client ID -->
                    <script src="https://www.paypal.com/sdk/js?client-id=AZ_wQYXBU-EOFKQaNOKnfRc6A84u1pvTCMsVOhZ-Fq-hHk_j5icTYe-pWJDRHfGyC2RfrsOcxSD0gS1a&currency=USD"></script>
                    <!-- Set up a container element for the button -->
                    <div style="margin-left: 200px;" id="paypal-button-container"></div>
                    <script>
                        paypal.Buttons({
                        // Sets up the transaction when a payment button is clicked
                        createOrder: (data, actions) => {
                            return actions.order.create({
                            purchase_units: [{
                                amount: {
                                    value: '<?php echo $_SESSION['total_price']; ?>' 
                                }
                            }]
                            });
                        },
                        // Finalize the transaction after payer approval
                        onApprove: (data, actions) => {
                            return actions.order.capture().then(function(orderData) {
                          
                             window.location.href='delete-cart.php';
                            });
                        }
                        }).render('#paypal-button-container');
                    </script>
                  
               
        </div>
<?php require "../includes/footer.php"; ?>
