<!DOCTYPE html>
<html>
    <head>

        
    </head>
    <body>
    <link rel="stylesheet" type="text/css" href="LogonName.CSS">
        <h1><img src="sa grey copy.png" alt="sa grey" width="272px">
        <a href="admin Options.php"><h2>
    Admin
    </h2></a></h1>

       <script src="jsFunctionIndex.js"></script>
Remove Account
        <form  method="GET">
            <label for="account name">Account id</label><br>
            <input type="text" name="id" id="id"><br>
            <input type="submit" value="Submit">
        </form>

        <?php
        include 'index.php';
        
        

        if(isset($_GET['submit'])){
            $sqlRemoveAcc="DELETE FROM users WHERE userID=". $_GET['id'];
        if ($conn->query($sqlRemoveAcc) === TRUE) {
           $conn->execute_query($sqlRemoveAcc);
            echo "Record deleted successfully";
            echo '<script type="text/javascript">
          home();
      </script>';
          } else {
            echo "Error deleting record: " . $conn->error;
          }
        
          
        }
        ?>
    </body>
</html>