@extends('master')
@section('content')

    <div class="" style="margin-top: 8%">
        <div class="col-sm-offset-4" style="margin-bottom: 4%"><h2>Enter Details</h2></div>
        
        <form class="form-horizontal col-sm-offset-4"  action="/pay-now">
            @csrf

            <div class="form-group">
                <div class="col-sm-5">
                    <input type="text" class="form-control" placeholder="Enter Your Name ">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-5">
                    <input type="phone" minlength="13" maxlength="14" class="form-control"
                        placeholder="Enter Your phone No. with Country Code ">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-5">
                    <textarea name="address" class="form-control" placeholder="Enter Your Address :"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-5">
                    <input type="text"  name="pincode" class="form-control" minlength="6" maxlength="6"
                        placeholder="Enter Your Pincode:">
                </div>
            </div>

            <div class="form-group">
                <div style="padding-left: 20px">
                    <h3>Payment Method</h3>
                </div>
                <div class="col-sm-5">
                    <select id="paymentMethod" class="form-control">
                        <option>Select-Any-Option</option>
                        <option value="creditCard">Credit Card</option>
                        <option value="paypal">PayPal</option>
                        <option value="cashOnDelivery">Cash on Delivery</option>
                    </select>
                </div>
            </div>

            <div id="creditCardForm" class="payment-form" style="display: none;">
                <div class="form-group">
                    <label class="control-label">Card Number</label>
                    <input type="text" class="form-control" placeholder="Enter card number">
                </div>
                <div class="form-group">
                    <label class="control-label">Expiry Date</label>
                    <input type="text" class="form-control" placeholder="MM/YYYY">
                </div>
                <div class="form-group">
                    <label class="control-label">CVV</label>
                    <input type="text" class="form-control" placeholder="CVV">
                </div>
            </div>

            <div id="paypalForm" class="payment-form" style="display: none;">
                <div class="form-group">
                    <label class="control-label">PayPal Email</label>
                    <input type="email" class="form-control" placeholder="Enter PayPal email">
                </div>
                <div class="form-group">
                    <label class="control-label">Password</label>
                    <input type="password" class="form-control" placeholder="Enter PayPal password">
                </div>
            </div>

            <div id="cashOnDeliveryForm" class="payment-form" style="display: none;">
                <!-- No additional fields needed for Cash on Delivery -->
          </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-6">
                    <button type="submit" class="btn btn-primary">Pay</button>
                </div>
            </div>
        </form>
        
    </div>
    <!-- Include Bootstrap and your JavaScript code here -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const paymentMethodSelect = document.getElementById("paymentMethod");
            const paymentForms = document.querySelectorAll(".payment-form");

            paymentMethodSelect.addEventListener("change", function() {
                const selectedMethod = paymentMethodSelect.value;

                paymentForms.forEach(function(form) {
                    form.style.display = "none";
                });

                const selectedForm = document.getElementById(selectedMethod + "Form");
                if (selectedForm) {
                    selectedForm.style.display = "block";
                }
            });
        });
    </script>
@endsection
