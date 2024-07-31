<!DOCTYPE html>
<html>
    <head>login</head>
    <body>

    <link rel="stylesheet" type="text/css" href="LogonName.CSS">
        <h1><img src="sa grey copy.png" alt="sa grey" width="272px"></h1>
<div>
        <form  method="post">
            <label for="email">Email:</label>
            <input type="text" name="Email" id="Email"> <br>
            <label for="password">Password</label>
            <input type="password" name="Password" id="password"> <br>
            <label for="Company">Company</label>
            <input type="text" name="Company" id="Company"><br>
            <input type="submit" value="Validate" name="Validate">
        </form>
        
<?php
include 'index.php';

$sqlgetUser="SELECT * from `users`";

$Users=$conn->execute_query($sqlgetUser);

if($Users->num_rows>0){
if(isset($_POST["Validate"])){
while($row=$Users->fetch_assoc()){
    if($_POST["Password"]==$row["Password"] and $_POST["Company"]==$row["Company"] and $_POST["Email"]==$row["Email"])
    { 
        $_SESSION["ID"]=$row["userID"];
        echo '<script type="text/javascript">
        home();
    </script>';    
    
      }
    
     else if($_POST["Password"]=='Admin' and $_POST["Company"]=='Admin' and $_POST["Name"]=='Admin')
    { 
        echo '<input type="button" value="login to admin" onclick=Admin()>';
    }

    else
    {

        echo "details invalid";
    }

    
}}

}
?>
</div>
    </body>
</html>