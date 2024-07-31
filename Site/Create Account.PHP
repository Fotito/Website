<!DOCTYPE html>
<html>
    <head>
        <h1><a href="home page.html"><img src="sa grey copy.png" alt="sa grey" width="272px"></a>ResolvSA</h1>
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

    <form  method="post" style="left: 50%; position: absolute;">
        <label for="Name">name</label>
        <input type="text" name="name" id="name"><br>
        <label for="Surname">Surname</label>
        <input type="text" name="Surname" id="name"><br>
        <label for="email">email</label>
        <input type="text" name="email" id="name"><br>
        <label for="Company">Company</label>
        <input type="text" name="Company" id="Company"><br>        
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <input type="submit" name="submit" value="Create Account">
    </form>

<?php

if(isset($_POST["submit"])){
    $sqlNewUser="INSERT INTO `users` (`Username`, `Surname`, `Email`, `Company`,`Password`) VALUES ('".$_POST["name"]."', '".$_POST["Surname"]."', '".$_POST["email"]."', '".$_POST["Company"]."', '".$_POST["Password"]."');";

if($conn->query($sqlNewUser)==true){

    $conn->execute_query($sqlNewUser);

    echo '<script type="text/javascript">
          home();
      </script>';
}}
?>

</body>
    </html>