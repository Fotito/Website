<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        
    <link rel="stylesheet" type="text/css" href="LogonName.CSS">
        <h1><a onclick="home()"><img src="sa grey copy.png" alt="sa grey" width="272px"  ></a>
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
       
       <form method="post">
       <label for="what are you changing?">what are you changin</label>
        <select name="Selection" id="Selection" style="font-size: 32pt;">
        <option value="Name" style="font-size: 32pt;">Username</option>
        <option value="Company" style="font-size: 32pt;">Company</option>
        <option value="Surname" style="font-size: 32pt;">Surname</option>
        </select>
<br><br>
        <label for="new data">enter the new value</label>
        <input type="text" name="newValue" id="newValue" style="font-size: 32pt;"><br><br>
        <input type="submit" value="submit" style="font-size: 32pt;">
    </form>
    </div>

<?php
include 'index.php';

if (isset($_POST["submit"])){
$sqlUpdate="UPDATE Users SET `".$_POST['Selection']."`=".$_POST['newValue']."";

if($conn->query($sqlUpdate)==TRUE){
    $conn->execute_query($sqlUpdate);
    echo '<script type="text/javascript">
            home();
        </script>';
}
else{
    echo $conn->error;
}}

?>

    </body>
</html>