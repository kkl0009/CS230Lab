<?php
require "includes/header.php"
?>

<main>
<link rel="stylesheet" href="css/signup.css">
    <div class="bg-cover">
        <div class="h-100 container center-me">
            <div class="my-auto">
                <div class="signup-form">
                    <form action="includes/signup-helper.php" method="post">
                        <h2>Checkout</h2>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" name="fname" placeholder="First Name" required="required">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="lname" placeholder="Last Name" required="required">
                                </div>
                    
                            </div>
                            <div class="col">
                                    <input type="text" class="form-control" name="order" placeholder="Order #" required="required">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="addr" placeholder="Address" required="required">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="car" placeholder="Card Number" required="required">
                                </div>
                                <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" name="cvv" placeholder="CVV Number" required="required">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="exp" placeholder="Expiration Date" required="required">
                                </div>
                    
                            </div>
                        </div>
                        


                        <div class="payment-details">
                <div class="payment-details-heading">Payment details</div>
                <div class="row">
                    <div class="inline-block">
                        <div>
                            <input class="bank-transfer" type="radio"
                                checked="checked"
                                value="Direct bank transfer"
                                name="direct-bank-transfer">Credit Card
                        </div>

                        <div class="info-label">Specify your order
                            number when you make the bank transfer. Your
                            order will be shippied after the amount is
                            credited to us.</div>
                    </div>
                </div>
            </div>



            
                    </form>
                    <div class="text-center">
                    
                    <input type="submit" class="checkout"
                        name="checkout-btn" id="checkout-btn"
                        value="Checkout">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>