<!DOCTYPE html>
<html>
    <head><title>Payment</title></head>
    <style>
        .input{
            background-color: black;
            color: white;
        }
        </style>
    <body>
    
    <link rel="stylesheet" type="text/css" href="LogonName.CSS">
        <h1><a onclick="home()"><img src="sa grey copy.png" alt="sa grey" width="272px" ></a>
        <h2>
            <input type="button" value="Home" onclick="home()" style="font-size: 30pt; background: none; border:none; padding: none;">
            <input type="button" value="About" onclick="about()" style="font-size: 30pt; background: none; border:none; padding: none;">
            <input type="button" value="Services" onclick="services()" style="font-size: 30pt; background: none; border:none; padding: none;">
            <input type="button" value="Clients" onclick="client()" style="font-size: 30pt; background: none; border:none; padding: none;">
            <input type="button" value="Contact Details" onclick="ContactDetail()" style="font-size: 30pt; background: none; border:none; padding: none;">
            <input type="button" value="Payment" onclick="payment()" style="font-size: 30pt; background: none; border:none; padding: none;">
            <input type="button" value="Account" onclick="account()" style="font-size: 30pt; background: none; border:none; padding: none;">
        </h2></h1>

       <script src="jsFunctionIndex.js"></script>

        <div>
            <div class="input">
        <form action="/index.php" method="post"></form>
        <label for="Card Number">Card Number</label><br>
        <input type="text" name="CardNumber" id="cardNumber" style="font-size: 32pt;"> <br>
        <label for="CVC" >CVC</label><br>
        <input type="text" name="CVC" id="CVC" style="font-size: 32pt;" > <br>
        <label for="Exp Date">Exp Date</label><br>
        <input type="text" name="expDate" id="expDate" style="font-size: 32pt;"> <br> <br>
        <input type="button" value="Debit" style=" background-color: black;
        color: white;"> 
        <input type="button" value="Credit" style= "background-color: black;
            color: white;">
        </div class="input">
       
           

    </div>

<?php
include 'index.php';

if(isset($_POST["submit"])){

    $sqlNewBooking="INSERT INTO `bookings` (`bookingDate`, `userID`, `Services`) VALUES (".$_POST["Date"].", ".$_SESSION["ID"].", '".$_SESSION["Service"]."')";

    $conn->execute_query($sqlNewBooking);

}
?>
    </body>
</html>