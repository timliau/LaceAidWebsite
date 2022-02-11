<?php
$amount = $_POST['amount'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payments</title>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#payment_form").submit();
        });
    </script>
</head>

<body>

    <p align="center">&nbsp;</p>
    <p align="center"><strong>You are being redirected to a PayPal's SSL secured payment page.</strong></p>
    <p align="center">&nbsp;</p>
    <p align="center"><img src="ZZ5H.gif" alt="Redirecting" style="height: 100px; width: 100px;" /></p>
    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" name="payment_form" id="payment_form">
        <!--<form action="https://www.paypal.com/cgi-bin/webscr" method="post" name="payment_form" id="payment_form">-->

        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="business" value="sb-h6crs13337669@business.example.com">
        <input type="hidden" name="item_name" value="<?= rand(0000, 9999); ?>">
        <input type="hidden" name="amount" value="<?php echo $amount?>">
        <input type="hidden" name="currency_code" value="USD">
        <input type="hidden" name="custom" value="<?= rand(0000, 9999); ?>">
        <input type="hidden" name="return" value="http://222.164.5.103/index.html">
        <input type="hidden" name="cancel_return" value="http://222.164.5.103/index.html">
        <input type="hidden" name="notify_url" value="http://222.164.5.103/index.html">
    </form>
    <p align="center"><i class="fa fa-paypal"></i></p>
</body>

</html>