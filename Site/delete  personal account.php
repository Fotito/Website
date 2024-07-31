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

        <form  method="GET">
            <label for="account name">Account id</label><br>
            <input type="text" name="id" id="id"><br>
            <input type="submit" value="Submit">
        </form>
<!--simply use session stuff to ensure that the only account that is deleted is is the specific users account-->
        <?php
        include 'index.php';
        
        $sqlRemoveAcc="DELETE FROM users WHERE userID=". $_GET['id'];

        if(isset($_GET['submit'])){
        if ($conn->query($sqlRemoveAcc) === TRUE) {
           $conn->execute_query($sqlRemoveAcc);
            echo "Record deleted successfully";
            
          echo '<script type="text/javascript">
          home();
      </script>';
          } else {
            echo "Error deleting record: " . $conn->error;
          }}
        ?>
    </body>
</html>