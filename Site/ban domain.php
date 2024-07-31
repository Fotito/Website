<!DOCTYPE html>
<html>
    <head>

    </head>
<body>
<link rel="stylesheet" type="text/css" href="LogonName.CSS">
        <h1><img src="sa grey copy.png" alt="sa grey" width="272px" >
        <a href="admin Options.php"><h2>
    Admin
    </h2></a></h1>

       <script src="jsFunctionIndex.js"></script>

    <form method="POST">
        <label for="domain">give the domain name(often used at the end of their employees' email address, after the @)</label><br>
        <input type="text" name="domain" id="domain"><br>
        <input type="submit" name="submit" value="submit"><br>
    </form>
    <?php
    include 'index.php';

    

    if(isset($_POST["submit"])){
        $sqlBanDomain="INSERT INTO blacklist ".$_POST['domain']."";
        $sqlLegacyUser="INSERT INTO LegacyUsers Select * from users WHERE email LIKE '%".$_POST['domain']."'";
        $sqlBanUser="DELETE FROM users WHERE email LIKE '%".$_POST['domain']."'";
        if ($conn->query($sqlBanUser) === TRUE) {
            $conn->execute_query($sqlBanDomain);
            
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