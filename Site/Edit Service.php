<html>

<body>
<link rel="stylesheet" type="text/css" href="LogonName.CSS">
        <h1><img src="sa grey copy.png" alt="sa grey" width="272px" style="margin: 50%;">
        <a href="admin Options.php"><h2>
    Admin
    </h2></a></h1>

       <script src="jsFunctionIndex.js"></script>

<div>
<form  method="post">

<label for="Service">Which service are you changing</label>
<select name="Service" id="Service" style="font-size: 32pt;">

<?php

include 'index.php';

$servicesNameList=$conn->execute_query('SELECT serviceName from service;');

if ($servicesNameList->num_rows>0){

    while($row=$servicesNameList->fetch_assoc()){

       echo' <option value="'.$row["serviceName"].'" style="font-size: 40pt;">'.$row["serviceName"].'</option>';
    }
}
?>
</select>

<br><label for="what are you changing?">what are you changing</label>
        <select name="Selection" id="Selection" style="font-size: 32pt;">
        <option value="ServDescription" style="font-size: 32pt;">ServDescription</option>
        <option value="Price" style="font-size: 32pt;">Price</option>
        </select><br>

        <label for="new value">New Value</label><br>
        <input type="text" name="newValue" id="newValue"> <br>
    <input type="submit" value="submit" name="submit" onclick="admin()" style="font-size: 32pt;">
</form>

<?php
        if(isset($_POST["submit"])){
            $sqlEditService="UPDATE service  SET ".$_POST["Selection"]." ='".$_POST["newValue"]."' WHERE ServiceName='".$_POST["Service"]."'";
        if($conn->query($sqlEditService)==TRUE){
            $conn->execute_query($sqlEditService);
            echo '<script type="text/javascript">
            home();
        </script>';
        }
        else{
            echo $conn->error;
        }
    }

?>
</div>
</body>
</html>