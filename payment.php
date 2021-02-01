
<?php $page = 'payment'; include 'header.php'; ?>
<?php $apikey = "rzp_test_Xkh9rUVua4fmfD"; ?>

<form action="https://www.example.com/payment/success/" method="POST">
    <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="<?php echo $apikey; ?>" 
    data-amount="50000" data-currency="INR" 
   
    data-buttontext="Pay with Razorpay"    
    data-name="Kavita Memorial Nursing Home"    
    data-description="OPD Consultation"    
    data-image="https://example.com/your_logo.jpg"    
    data-prefill.name="<?php echo $_POST['name']; ?>"    
    data-prefill.email="<?php echo $_POST['email']; ?>"  
    data-theme.color="#F37254">
    </script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>


<?php include 'footer.php'; ?>
