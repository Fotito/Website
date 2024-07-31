<!DOCTYPE html>
<html>
    <header><title>Account</title></header>
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
  
    
<div style="background-color:black; color:white">
    <?php
    include 'index.php';
    if ((isset($_SESSION["ID"]))){
      
     $userdeets= $conn->execute_query('Select * from `users` WHERE userID='.$_SESSION["ID"].'');

while($row=$userdeets->fetch_assoc())
{
    echo $row["Username"].'<br>'.$row["Surname"].'<br>'.$row["Company"];
}

echo'<form method="post">
        <input type="submit" value="Edit Details" onclick="edit()">
        <input type="submit" value="Delete Account">
        <input type="submit" value=Logout name="Logout">
        </form>';
    

    if ((isset($_POST["Logout"]))){
        unset($_SESSION["ID"]);    
      }
    }
      else {
        
      echo'You are not logged in <br>  <input type="button" value="Login" onclick=login()>'; 
    }
    ?>
</div>
</body>
</html>